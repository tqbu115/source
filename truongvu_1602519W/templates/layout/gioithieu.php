<?php
$d->reset();
$sql = "select id,ten_$lang as ten, name_$lang as name,photo, mota_$lang as mota from #_info where type='gioithieu' ";
$d->query($sql);
$gioithieu = $d->fetch_array();

$d->reset();
$sql= "select id,ten_$lang,photo,tenkhongdau,mota_$lang from #_baiviet where hienthi=1 and type='vechungtoi' order by stt asc";
$d->query($sql);
$vechungtoi = $d->result_array();  
?>
<div class="margin_auto">
	<div class="gioithieu">
		<div class="noidung_gt">
			<div class="title_gt"><h2><?=$gioithieu['ten']?></h2></div>
			<div class="mota"><?=$gioithieu['mota']?>
			<a class="xemthem" href="gioi-thieu">Xem thêm</a>
		</div>
	</div>
	<div class="img_gt">
		<div class="bao_all">
			<a class="hover_zoom img" href="gioi-thieu"><img onerror="this.src='http://placehold.it/585x409'" src="thumb/585x409/1/<?=_upload_hinhanh_l.$gioithieu['photo']?>" alt="<?=$gioithieu['ten']?>"></a>
			<div class="bao_nd">
				<?php foreach ($vechungtoi as $key => $vs) { ?>
				<div class="vechungtoi">
					<img onerror="this.src='http://placehold.it/88x88'" src="thumb/88x88/2/<?=_upload_baiviet_l.$vs['photo']?>" alt="<?=$vs['ten_'.$lang]?>"/>
					<div class="noidung">
						<a href="<?=$vs['tenkhongdau']?>"><h3><?=$vs['ten_'.$lang]?></h3></a>
						<div class="mota"><p><?=$vs['mota_'.$lang]?></p></div>
					</div>
				</div>
			<?php } ?>
			
			</div>
		</div>
	</div>
</div>
</div>