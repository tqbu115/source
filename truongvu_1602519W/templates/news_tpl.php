<div id="info">
  <div class="margin_auto">
    <div class="dieuhuong">  
      <a href="./" itemprop="url" title="Trang chủ"><span itemprop="title"><?=_trangchu?></span></a>
      <a href="<?=$com?>" itemprop="url" title="<?=$title_detail?>"><span itemprop="title"><?=$title_detail?></span></a>
    </div>
    <?php if(count($tintuc) > 0){ ?>
     <div class="box_news">
      <?php for($i=0, $count_tt=count($tintuc);$i<$count_tt;$i++){  ?> 
        <div class="news">
          <div class="img">
            <a  class="hover_zoom" href="<?=$tintuc[$i]['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/175x175'" src="thumb/175x175/1/<?=_upload_baiviet_l.$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>"></a>
          </div>
          <div class="noidung">
            <h3><a href="<?=$tintuc[$i]['tenkhongdau']?>"><?=$tintuc[$i]['ten_'.$lang]?></a></h3>
            <div class="mota"><?=$tintuc[$i]['mota_'.$lang]?></div>
            <p class="ngaydang"><?=date('h:i d/m/Y A',$tintuc[$i]['ngaytao'])?> - <span><?=_luotxem?> <?=$tintuc[$i]['luotxem']?></span></p>
          </div>
        </div>
      <?php }?>
    </div>
    <div align="center" ><div class="paging"><?=$paging?></div></div>
    <?php }else{ ?>
    <div class="updating"><?=_capnhap?></div>
  <?php } ?>
  </div>
</div> 