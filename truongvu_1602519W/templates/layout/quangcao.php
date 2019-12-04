<?php 
	$d->reset();
	$sql= "select photo_vi,ten_vi,link from #_photo where hienthi=1 and type='quangcao' order by stt,id desc ";
	$d->query($sql);
	$quangcao = $d->result_array();
?>
<div class="slick_qc">
	<?php foreach ($quangcao as $key => $qc) { ?>
	<a target="_blank" style="background: url(<?=_upload_hinhanh_l.$qc['photo_vi']?>) no-repeat center; background-size: cover; width: 100%; height: 360px; max-height: 40vw;" href="<?=$qc['link']?>" class="img"></a>
	<?php } ?>
</div>