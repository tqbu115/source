<div id="info">
  <div class="margin_auto">
    <div class="dieuhuong   ">  
      <a href="./" itemprop="url" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
      <a href="<?=$com?>" itemprop="url" title="<?=$title_detail?>"><span itemprop="title"><?=$title_detail?></span></a>
    </div>
    <?php if(count($album)!=0){?>
    <div class="khung_album">
      <?php for($j=0;$j<count($album);$j++){  ?>
        <div class="hinhanh">
          <a class="hover_zoom" data-fancybox="ha" href="<?=_upload_baiviet_l.$album[$j]['photo']?>"><img onerror="this.src='http://placehold.it/566x440'" src="thumb/566x440/1/<?=_upload_baiviet_l.$album[$j]['photo']?>" alt="<?=$album[$j]['ten_'.$lang]?>"></a>
        </div>
      <?php }?>
    </div>
    <?php } else { ?><div class="updating">Nội dung đang cập nhật</div><?php }?>
    <div class="paging"><?=$paging?></div> 

  </div>
  <h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1></div>