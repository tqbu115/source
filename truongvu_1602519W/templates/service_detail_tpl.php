<div id="info">
  <div class="margin_auto">
    <?php include _template."layout/dieuhuong_detail.php";?>     
    <div class="noidung_detail">
      <?php if ($com == 'cong-trinh') { ?>
        <div class="fotorama" data-autoplay="true">
         <?php foreach ($hinhanh as $key => $ha) { ?>
           <a href="<?=$ha['photo']?>">
            <img  src="<?=_upload_baiviet_l.$ha['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>">
          </a>
        <?php } ?>
      </div>
      <?php }?>
        <div class="noidung"><?=$row_detail['noidung_'.$lang]?></div>
        <div class="addthis_inline_share_toolbox"><div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div></div>
        <?=get_social('','comment');?>
      </div>
      <?php if(count($tintuc) > 0){ ?>
        <div class="khung">
          <div class="title"><h4><?=_baivietkhac?></h4></div>
          <div class="owl_tinkhac owl-carousel baiviet2">
            <?php foreach($tintuc as $key => $row){?>
              <div class="baiviet2_it" >
                <div class="img">
                  <a class="hover_zoom" href="<?=$row['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/560x440'" src="thumb/560x440/1/<?=_upload_baiviet_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>"></a>
                </div>
                <div class="noidung">
                  <h3><a href="<?=$row['tenkhongdau']?>"><?=$row['ten_'.$lang]?></a></h3>
                  <p><?=$row['mota_'.$lang]?></p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      <?php } ?>
    </div> 
  </div>