<?php
  	$d->reset();
  	$sql= "select id,tenkhongdau,ten_$lang,photo,mota_$lang from #_baiviet where hienthi=1 and type='dichvu' and noibat != 0 order by id,stt desc";
  	$d->query($sql);
  	$dichvu_nb = $d->result_array();

 	if(count($dichvu_nb) > 0){ ?>
<div id="dichvu">
	<div class="margin_auto">
		<div class="slick_dichvu">
			<?php foreach ($dichvu_nb as $key => $rl) {?>
			<div class="dichvu">
				<a href="<?=$rl['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/220x220'" src="thumb/220x220/1/<?=_upload_baiviet_l.$rl['photo']?>" alt="<?=$rl['ten_'.$lang]?>"></a>
				<h3><a href="<?=$rl['tenkhongdau']?>"><?=$rl['ten_'.$lang]?></a></h3>
				<p><?=$rl['mota_'.$lang]?></p>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>