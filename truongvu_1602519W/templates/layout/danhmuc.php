<?php
  $d->reset();
  $sql = "select id,tenkhongdau,ten_$lang,photo,mota_$lang from #_product_list where type='product' and hienthi != 0 order by stt asc";
  $d->query($sql);
  $danhmuc = $d->result_array();
?>
<?php if(count($danhmuc) > 0){ ?>
<div id="danhmuc">
  <div class="margin_auto">
    <div class="slick_danhmuc">
      <?php foreach ($danhmuc as $key => $dm){  ?>
        <div class="dm">
          <a class="hover_zoom" href="<?=$dm['tenkhongdau']?>"><img data-lazy="thumb/590x300/1/<?=_upload_product_l.$dm['photo']?>" alt="<?=$dm['ten_'.$lang]?>"/></a>
          <h3 data-stt="<?=$key<10?"0".($key+1):$key+1?>"><a href="<?=$dm['tenkhongdau']?>"><?=$dm['ten_'.$lang]?></a></h3>
       </div>
      <?php  } ?>
    </div>
  </div>
</div>
<?php }  ?>