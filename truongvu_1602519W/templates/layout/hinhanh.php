<?php 
$d->reset();
$sql = "select id,ten_$lang,mota_$lang,photo,name_$lang from #_info where type='thuvienanh'";
$d->query($sql);
$bosuutap = $d->fetch_array(); 

$d->reset();
$sql = "select id,photo,ten from #_baiviet_photo where type='thuvienanh' limit 12";
$d->query($sql);
$bosuutap_p = $d->result_array(); 
?>
<div id="hinhanh">
	<div class="margin_auto">
		<div class="title"><h2><?=$bosuutap['ten_'.$lang]?></h2><p><?=$bosuutap['name_'.$lang]?></p></div>
		<div class="box_hinhanh">
			<?php foreach ($bosuutap_p as $key => $val) { ?>
				<div class="bao_hinhanh">
					<a href="<?=_upload_baiviet_l.$val['photo']?>"  data-fancybox="bosuutap">
						<img src="<?=_upload_baiviet_l.$val['photo']?>">
						<div class="tieude_hinhanh">
							<h4><?=$val['ten']?></h4>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
		<div class="xemthem_ha"><a href="thu-vien-anh">Xem Thêm</a></div>
	</div>
</div>
</div>