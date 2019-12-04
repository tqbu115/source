<?php 
  $d->reset();
  $sql= "select id,tenkhongdau,ten_$lang,photo from #_baiviet where type='duan' and noibat != 0 and hienthi != 0 order by stt,id desc";
  $d->query($sql);
  $duan_nb = $d->result_array();
?>
<div class="margin_auto">
  <div class="title"><h4>dự án đã thực hiện</h4><p>Những mẫu tranh tiêu biểu của chúng tôi</p></div>
  <div class="khung_flex">
    <div class="video_duan"><?=get_video_youtube(1,0.775);?></div>
    <div class="slick_duan">
      <?php foreach ($duan_nb as $key => $da) { if($key==0||$key%2==0){ ?><div class="bao_duan"><?php } ?>
      <div class="duan">
        <a class="hover_zoom" href="<?=$da['tenkhongdau']?>"><img src="thumb/594x490/1/<?=_upload_baiviet_l.$da['photo']?>" alt="<?=$da['ten_'.$lang]?>"></a>
        <h3><a href="<?=$da['tenkhongdau']?>"><?=$da['ten_'.$lang]?></a></h3>
      </div>
      <?php if(($key+1)%2==0||($key+1)>=count($duan_nb)){ ?></div><?php } } ?>
    </div>
  </div>
</div>