<?php  
$d->reset();
$sql = "select photo,tenkhongdau,ten_$lang,mota_$lang,ngaytao from #_baiviet where type='tintuc'and hienthi != 0 and noibat != 0 order by stt asc";
$d->query($sql);
$tintucs = $d->result_array();

$d->reset();
$sql = "select id,links,ten_$lang,mota_$lang from #_video where type='video'and hienthi != 0 order by stt asc";
$d->query($sql);
$video = $d->result_array();
?>
<div class="margin_auto">
    <div class="bottom">
        <div class="tintuc">
            <div class="title_bt"><h2><?=_ttsk?></h2></div>
            <div class="bao_tt">
             <?php if(count($tintucs) > 0){ ?>
                <div class="tintuc_l">
                    <div class="khung">
                        <div class="tintucr_it">
                            <a class="img hover_zoom" href="<?=$tintucs[0]['tenkhongdau']?>">
                                <img onerror="this.src='http://placehold.it/360x198'" src="thumb/360x198/1/<?=_upload_baiviet_l.$tintucs[0]['photo']?>" alt="<?=$tintucs[0]['ten_'.$lang]?>">
                            </a>
                            <div class="noidung">
                                <div class="noidung_nd">
                                    <h3><a href="<?=$tintucs[0]['tenkhongdau']?>"><?=$tintucs[0]['ten_'.$lang]?></a></h3></div> 
                                    <div class="nd_mt"><p class="mota"><?=$tintucs[0]['mota_'.$lang]?></p></div>           
                                </div>
                            </div>
                             <div class="xemthem"><a href="tin-tuc"><?=_xemthem?></a></div>
                        </div>
                    </div>
                    <div class="tintuc_r">
                        <?php for ($i=0; $i < count($tintucs); $i++) {  ?>
                            <div class="khung">
                                <div class="tintucr_it">
                                    <a class="img hover_zoom" href="<?=$tintucs[$i]['tenkhongdau']?>">
                                        <img onerror="this.src='http://placehold.it/151x111'" src="thumb/151x111/1/<?=_upload_baiviet_l.$tintucs[$i]['photo']?>" alt="<?=$tintucs[$i]['ten_'.$lang]?>">
                                    </a>
                                    <div class="noidung">
                                        <div class="noidung_nd">
                                            <h3><a href="<?=$tintucs[$i]['tenkhongdau']?>"><?=$tintucs[$i]['ten_'.$lang]?></a></h3></div> 
                                            <div class="nd_mt"><p class="mota"><?=$tintucs[$i]['mota_'.$lang]?></p></div>           
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }else{ ?><div class="updating"><?=_capnhap?></div><?php } ?>
                </div>
            </div>
            <div class="video_bot">
                <div class="title_bt"><h2><?=_video?></h2></div>
                <?php if(count($video) > 0){ ?>
                    <div class="khung">
                        <div class="iframe">
                            <a data-fancybox href="<?=$video[0]['links']?>"><img width="555" height="420" src="https://img.youtube.com/vi/<?=getYoutubeIdFromUrl($video[0]['links']);?>/hqdefault.jpg" alt="<?=$video[0]['ten_'.$lang]?>" /></a>
                        </div>
                        <div class="slick_video">
                            <?php foreach ($video as $key => $vi) { ?>
                                <a class="vi" data-fancybox href="<?=$vi['links']?>"><img width="193" height="128" src="https://img.youtube.com/vi/<?=getYoutubeIdFromUrl($vi['links']);?>/hqdefault.jpg" alt="<?=$vi['ten_'.$lang]?>" /></a>
                           <?php } ?>
                        </div>
                    </div>
                <?php } else { ?><div class="updating"><?=_capnhap?></div><?php }?>
            </div>
        </div>
    </div>