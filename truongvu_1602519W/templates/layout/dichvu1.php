<?php
  $d->reset();
  $sql = "select mota_$lang,ten_$lang,tenkhongdau from #_baiviet where type='dichvu' and hienthi = 1 and noibat != 0 order by id,stt";
  $d->query($sql);
  $dichvu = $d->result_array();  

  $d->reset();
  $sql_banner_top= "select thumb_$lang,photo_$lang from #_photo where type='dvimg'";
  $d->query($sql_banner_top);
  $dvimg = $d->fetch_array();

  $d->reset();
  $sql_banner_top= "select thumb_$lang,photo_$lang,link from #_photo where type='quangcao'";
  $d->query($sql_banner_top);
  $quangcao = $d->fetch_array();
?>
<div class="margin_auto">
  <div class="noidung_gt col-md-6 col-sm-6 col-xx-12 col-xs-12">
    <div class="title_gt"><p>Dịch vụ</p><h4>Chăm sóc khách hàng</h4></div>
    <?php foreach ($dichvu as $key => $dv) { ?>
    <div class="dvit">
      <h4><a href="dich-vu/<?=$dv['tenkhongdau']?>.html"><?=$dv['ten_'.$lang]?></a></h4>
      <p><?=$dv['mota_'.$lang]?></p>
    </div>
    <?php } ?>
  </div> 
  <div class="img col-md-6 col-sm-6 col-xx-12 col-xs-12">
     <a href="gioi-thieu.html"><img src="thumb/600x645/2/<?=_upload_hinhanh_l.$dvimg['photo_'.$lang]?>"></a>
  </div>
</div>
<div class="qc">
  <a href="<?=$quangcao['link']?>" target="_blank"><img src="thumb/1366x390/2/<?=_upload_hinhanh_l.$quangcao['photo_'.$lang]?>"></a>
</div>