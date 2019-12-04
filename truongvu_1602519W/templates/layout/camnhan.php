<?php
$d->reset();
$sql= "select id,photo,tenkhongdau,ten_$lang,mota_$lang,name_$lang from #_baiviet where hienthi=1 and type='camnhan' order by stt,id desc";
$d->query($sql);
$camnhan = $d->result_array();
if(count($camnhan) > 0){
	?>
	<div id="camnhan">
		<div class="margin_auto">
			<div class="title">
				<h2>Phản hồi từ đối tác</h2>
				<p class="slogan_lv"><?=$row_setting['slogan_'.$lang]?></p>
			</div>
			<div class="slick_camnhan">
				<?php foreach ($camnhan as $key => $cn) { ?>
					<div class="camnhan hover_zoom">
						<img class="img_cn" onerror="this.src='http://placehold.it/190x190'" src="thumb/190x190/1/<?=_upload_baiviet_l.$cn['photo']?>" alt="<?=$cn['ten_'.$lang]?>">
						<div class="noidung">
							<h3><?=$cn['ten_'.$lang]?></h3>
							<p><?=$cn['mota_'.$lang]?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>