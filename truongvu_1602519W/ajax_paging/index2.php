<?php
	session_start();
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');	
	
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	$lang = "vi";

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	include_once _source."lang.php";

	if(isset($_POST))
  	{   
  		$where = "";
  		if($_POST['idl'] != 0){
  			$where .= " and id_list = '".$_POST['idl']."'";	
  		}
  		if($_POST['idc'] != 0){
  			$where .= " and id_cat = '".$_POST['idc']."'";	
  		}

  		$d->reset();
		$sql= "select id,tenkhongdau,ten_$lang,photo,giaban,giacu from #_product where type='product' and hienthi=1 and noibat != 0 $where order by id,stt desc";
		$d->query($sql);
		$product = $d->result_array();
	} 
?>
<?php if(count($product) > 0){ ?>
<div class="sanpham">
	<?php foreach ($product as $key => $row) { ?>
		<div class="item">
	        <div class="img">
	          <a class="hover_zoom" href="<?=$row['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/280x370'" src="thumb/280x370/1/<?=_upload_product_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>"></a>
	          <?=$row['giaban']!=0&&$row['giacu']!=0?'<span class="sale">'.round(((($row['giacu']-$row['giaban'])/$row['giacu'])*100),0).'% OFF</span>':''?>
	        </div>
	        <div class="noidung">
	            <h3><a href="<?=$row['tenkhongdau']?>"><?=$row['ten_'.$lang]?></a></h3>
	            <div class="gia">
	                <?php if($row['giaban'] != 0) { ?><span class="giaban"><?=number_format($row['giaban'],0, ',', '.')?>đ</span>
	                <?php }else{ ?><span class="giaban">Liên Hệ</span><?php } ?>
	                <?php if($row['giacu'] != 0){?><span class="giacu"><?=number_format($row['giacu'],0, ',', '.')?>đ</span><?php } ?>
	            </div> 
	            <a class="buy" data-pid="<?=$row['id']?>"></a>
	        </div>
	    </div>
	<?php } ?>
</div>
<?php }else{ ?><div class="updating">Nội dung đang cập nhật</div><?php } ?>