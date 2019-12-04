<?php
$d->reset();
$sql= "select noidung_$lang,mota_$lang from #_info where type='footer'";
$d->query($sql);
$footer = $d->fetch_array();

$d->reset();
$sql= "select id,ten_$lang,photo,tenkhongdau,mota_$lang from #_baiviet where hienthi=1 and type='chinhsach' order by stt asc";
$d->query($sql);
$chinhsach = $d->result_array();  

$d->reset();
$sql = "select tenkhongdau,ten_$lang,id,photo,quangcao from #_product_list where hienthi=1 and noibat != 0 and type='product' order by stt asc";
$d->query($sql);
$product_list = $d->result_array(); 
?>
<div id="footer" >
	<div class="footer">
		<div class="bando">
			<?php if($row_setting['phuongthuc'] == 0){ ?><a href="<?=$row_setting['link_map']?>" target="_blank"><img src="upload/map.png" alt="map"></a><?php }else if($row_setting['phuongthuc']== 1){ ?> <?=$row_setting['iframe_map']?> <?php } ?>
		</div>
		<div class="thongtin_ct">
			<h4 class="tieude_cty"><?=_cty?></h4>
			<div class="noidung"><?=$footer['noidung_'.$lang]?></div>
			<div class="thongtin_ct2">
				<div class="chinhsach">
					<h4 class="tieude_f"><?=_chinsach?></h4>
					<ul>
						<?php foreach ($chinhsach as $key => $cs) { ?>
							<li><a href="<?=$cs['tenkhongdau']?>"><?=$cs['ten_'.$lang]?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="lienket">
					<h4 class="tieude_f"><?=_link?></h4>
					<?php include _template."layout/addon/lienket.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="coppy"><div class="khung_flex flex_center"><p>Copyright © 2019 <span><?=$row_setting['ten_'.$lang]?></span>. Design By <span>Nina Co., Ltd</span></p><?php include _template."layout/addon/thongke.php"; ?></div></div>
</div>
