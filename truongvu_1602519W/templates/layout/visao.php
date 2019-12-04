<?php
  $d->reset();
  $sql= "select id,ten_$lang,photo,tenkhongdau,mota_$lang from #_baiviet where hienthi=1 and type='visao' order by stt asc";
  $d->query($sql);
  $visao = $d->result_array();  
?>
<?php if(count($visao) > 0){ ?>
<div id="visao">
  <div class="margin_auto">
    <div class="slick_visao">
    <?php foreach ($visao as $key => $vs) { ?>
      <div class="visao">
        <img onerror="this.src='http://placehold.it/50x50'" src="thumb/50x50/2/<?=_upload_baiviet_l.$vs['photo']?>" alt="<?=$vs['ten_'.$lang]?>"/>
        <div class="noidung">
          <h3><?=$vs['ten_'.$lang]?></h3>
          <div class="mota"><?=$vs['mota_'.$lang]?></div>
        </div>
      </div>
      <?php } ?>
    </div>  
  </div>
</div>
<?php } ?>