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
  		if($_POST['id'] != 0){
  			$where = " and id_list = '".$_POST['id']."'";
  		}

  		$d->reset();
		$sql = "select id,tenkhongdau,ten_$lang,photo,mota_$lang from #_baiviet where type='duan' and hienthi=1 and noibat != 0 $where order by stt,id desc ";
		$d->query($sql);
		$duan = $d->result_array();

	} 
    if(count($duan) > 0){ 
?>
	<div class="slick_duan">
		<?php foreach ($duan as $key => $row) { ?>
		<div class="duan">
	    	<a class="img hover_zoom" href="<?=$row['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/442x342'" src="thumb1/884x684/1/<?=_upload_baiviet_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>"></a>
	    	<div class="noidung">
	    		<h3><a href="<?=$row['tenkhongdau']?>"><?=$row['ten_'.$lang]?></a></h3>   
	    		<p><?=$row['mota_'.$lang]?></p>
	    		<a href="<?=$row['tenkhongdau']?>">Xem thêm ></a>
	    	</div>
	    </div>
		<?php } ?>
	</div>
<?php }else{ ?><div class="updating">Nội dung đang cập nhật</div><?php } ?>