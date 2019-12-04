<?php
	$d->reset();
	$sql_setting = "select * from #_bgweb where type='footer' limit 0,1";
	$d->query($sql_setting);
	$footer = $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgvisao' limit 0,1";
	$d->query($sql_setting);
	$bgvisao = $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bggioithieu' limit 0,1";
	$d->query($sql_setting);
	$bggioithieu = $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgnhantin' limit 0,1";
	$d->query($sql_setting);
	$bgnhantin = $d->fetch_array();
?>
<style>
	#gioithieu{
		<?php if($bggioithieu['photo']!=""){ ?>background: url(<?=_upload_hinhanh_l.$bggioithieu['photo']?>) <?=$bggioithieu['re_peat']?> <?=$bggioithieu['tren']?> <?=$bggioithieu['trai']?>;<?php } ?>
		<?php if($bggioithieu['mauneen']!=""){ ?>background-color:<?=$bggioithieu['mauneen']?>;<?php } ?>
		<?php if($bggioithieu['fix_bg']!=""){ ?>background-attachment:<?=$bggioithieu['fix_bg']?>;<?php } ?>
		background-size: cover;
	}
	#visao{
		<?php if($bgvisao['photo']!=""){ ?>background: url(<?=_upload_hinhanh_l.$bgvisao['photo']?>) <?=$bgvisao['re_peat']?> <?=$bgvisao['tren']?> <?=$bgvisao['trai']?>;<?php } ?>
		<?php if($bgvisao['mauneen']!=""){ ?>background-color:<?=$bgvisao['mauneen']?>;<?php } ?>
		<?php if($bgvisao['fix_bg']!=""){ ?>background-attachment:<?=$bgvisao['fix_bg']?>;<?php } ?>
		background-size: cover;
	}
	/*#nhantin{
		<?php if($bgnhantin['photo']!=""){ ?>background: url(<?=_upload_hinhanh_l.$bgnhantin['photo']?>) <?=$bgnhantin['re_peat']?> <?=$bgnhantin['tren']?> <?=$bgnhantin['trai']?>;<?php } ?>
		<?php if($bgnhantin['mauneen']!=""){ ?>background-color:<?=$bgnhantin['mauneen']?>;<?php } ?>
		<?php if($bgnhantin['fix_bg']!=""){ ?>background-attachment:<?=$bgnhantin['fix_bg']?>;<?php } ?>
	}*/
	.footer .thongtin_ct{
		<?php if($footer['photo']!=""){ ?>background: url(<?=_upload_hinhanh_l.$footer['photo']?>) <?=$footer['re_peat']?> <?=$footer['tren']?> <?=$footer['trai']?>;<?php } ?>
		<?php if($footer['mauneen']!=""){ ?>background-color:<?=$footer['mauneen']?>;<?php } ?>
		<?php if($footer['fix_bg']!=""){ ?>background-attachment:<?=$footer['fix_bg']?>;<?php } ?>
		background-size: cover;
	}
</style>