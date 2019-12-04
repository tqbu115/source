<?php
$d->reset();
$sql = "select tenkhongdau,ten_$lang,id,photo,quangcao from #_product_list where hienthi=1 and noibat != 0 and type='product' order by stt asc";
$d->query($sql);
$product_list = $d->result_array(); 
?>


<div id="sanpham">
	<?php foreach ($product_list as $key => $pdl) {
		$d->reset();
		$sql = "select id,tenkhongdau,masp,ten_$lang,photo,giacu,giaban,mota_$lang,sp_banchay,noibat from table_product where type='product' and hienthi=1 and noibat != 0 and id_list = ".$pdl['id']." order by stt,id desc";
		$d->query($sql);
		$product = $d->result_array(); 
		?>
		<div class="khung">
			<div class="margin_auto">
				<div class="title_gt title_sp">
					<h2 style="background: #3952a4 url(<?= _upload_product_l.$pdl['photo'] ?>) no-repeat 10px 6px;">
						<?=$pdl['ten_'.$lang]?></h2>
						<div class="button">
							<img class="btnprev" src="images/truongvu/c1.png">
							<img class="btnnext" src="images/truongvu/c2.png">
						</div>
					</div>
					<div class="slick_sanpham">
						<?php foreach ($product as $key => $pd_id) { ?>

					<?php } ?>
				</div>
			</div>
		</div>
	<?php }?>
</div>

