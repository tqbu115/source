<script language="javascript">

  function addtocart(pid){

    document.form_giohang.productid.value=pid;

    document.form_giohang.command.value='add';

    document.form_giohang.submit();

  }

</script>

<form name="form_giohang" action="index.php" method="post">

  <input type="hidden" name="productid" />

  <input type="hidden" name="command" />

</form>
<div id="info">
  
  <?php //include _template."layout/left.php";?>
  
  <div class="margin_auto">
    <div class="title"><h4><?=_timkiem?> '<?=$_GET['keywords']?>'</h4> </div>
    <?php if(count($product)!=0){?>
     <div class=" sanpham">
      <?php foreach($product as $k=>$row) {   ?>
        <div class="item">
          <div class="img hover_img">
            <a href="san-pham/<?=$row['tenkhongdau']?>.html"><img onerror="this.src='thumb/550x460/2/images/default.png';" alt="<?=$row['tenkhongdau']?>" src="thumb/550x460/1/<?=_upload_product_l.$row['photo']?>" /></a>
          </div>
          <div class="noidung">
            <p class="gia">
              <?php if($row['giaban'] != 0) { ?>
                <span class="giaban"><?=number_format($row['giaban'],0, ',', '.')?>&nbsp;VNĐ</span>
              <?php }else{ ?>
                <span class="giaban">Liên hệ</span>
              <?php } ?>
              <?php if($row['giacu'] != 0) {  ?>
                <span class="giacu"><?=number_format($row['giacu'],0, ',', '.')?>&nbsp;VNĐ</span>
              <?php } ?>
            </p>
            <h3><a href="san-pham/<?=$row['tenkhongdau']?>.html"><?=catchuoi($row['ten_'.$lang],37)?></a></h3>  
          </div>
        </div> 
      <?php } ?>
    </div>
    <div class="paging"><?=$paging?></div> 
  <?php } else { ?>
    <div style="width: 100%; float: left; text-align:center; color:#000000; font-family: UTMAvo; font-size:14px; text-transform:uppercase;"><?=_noidungdangcapnhat?> </div>
  <?php }?>
</div> 
</div> 