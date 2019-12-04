<?php
$d->reset();
$sql = "select photo,tenkhongdau,ten_$lang,mota_$lang,ngaytao from #_baiviet where type='tienich'and hienthi != 0 order by stt asc limit 4";
$d->query($sql);
$tienich = $d->result_array();
?>
<?php include _template."layout/amazingslider.php"; ?>
<div id="tienich">
	<div class="margin_auto">
		<?php if(count($tienich) > 0){ ?>
			<div class="tienich">
				<?php for ($i=0; $i < count($tienich); $i++) {  ?>
					<div class="khung_tienich">
						<div class="tienich_it">
								<img onerror="this.src='http://placehold.it/55x55'" src="thumb/55x55/1/<?=_upload_baiviet_l.$tienich[$i]['photo']?>" alt="<?=$tienich[$i]['ten_'.$lang]?>">
							<div class="noidung">
								<h3><?=$tienich[$i]['ten_'.$lang]?></h3>
								<div class="nd_tienich"><?=$tienich[$i]['mota_'.$lang]?></div>           
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php }else{ ?><div class="updating">Nội dung đang cập nhật</div><?php } ?>
	</div>
	<??>
	
</div>
<?php include _template."layout/sanpham.php"; ?>
<div id="bottom"><?php include _template."layout/bottom.php"; ?></div>
<?php include _template."layout/addon/nhantin.php"; ?>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>