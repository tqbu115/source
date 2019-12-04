<?php
	$d->reset();
	$sql = "select * from #_lkweb where hienthi=1 and type='mangxh' order by stt,id desc ";
	$d->query($sql);
	$lienket = $d->result_array();
?>
<div class="mang_xh">
		<label><?=_link?></label>
	<?php for($i=0;$i<count($lienket);$i++){?>
		<a href="<?=$lienket[$i]['url']?>" target="_blank"><img src="thumb/40x40/2/<?=_upload_hinhanh_l.$lienket[$i]['photo']?>" alt="<?=$lienket[$i]['ten_'.$lang]?>" /></a>
	<?php } ?>
</div>