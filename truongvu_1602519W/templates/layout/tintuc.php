<?php  
    $d->reset();
    $sql = "select photo,tenkhongdau,ten_$lang,mota_$lang,ngaytao from #_baiviet where type='tintuc'and hienthi != 0 and noibat != 0 order by stt asc";
    $d->query($sql);
    $tintucs = $d->result_array();
?>
<div id="tintuc">
	<div class="margin_auto">
	    <div class="title"><h2>tin tức nổi bật</h2><p><?=$row_setting['slogan_'.$lang]?></p></div>
	    <div class="owl_tintuc">
	        <?php foreach ($tintucs as $key => $val) { ?>
	        <div class="tintuc">
	            <div class="box_tin">
	                <div class="img">
	                	<a class="hover_zoom" href="<?=$val['tenkhongdau']?>"><img src="thumb/373x250/1/<?=_upload_baiviet_l.$val['photo']?>" alt="<?=$val['ten_'.$lang]?>"></a>
	                </div>
	                <div class="noidung">
	                    <h3><a href="<?=$val['tenkhongdau']?>"><?=$val['ten_'.$lang]?></a></h3>
	                    <p class="ngaydang"><?=date('\n\g\à\y\ d/m/Y',$val['ngaytao'])?> by admin</p>
	                    <p class="mota"><?=$val['mota_'.$lang]?></p>
	                </div>
	            </div>
	        </div>
	        <?php } ?>
	    </div>
	</div>
</div>