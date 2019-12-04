<?php 
$d->reset();
$sql = "select id,ten_$lang,mota_$lang,photo,name_$lang,link from #_info where type='lienhe'";
$d->query($sql);
$lienhe = $d->fetch_array(); 
?>
<div id="nhantin">
	<div class="margin_auto">
		<div class="nhantin">
			<div class="tieude_nhantin">
				<h4><?=_dangky?></h4>
				<p><?=$lienhe['mota_'.$lang]?></p>
			</div>
			<div class="lh" >
				<form action="" name="dangkymail" class="dangkymail" enctype="multipart/form-data"  accept-charset="UTF-8" method="post">
					<input class="input" type="email" name="email" id="exampleInputEmail" placeholder="<?=_nhapmail?>" aria-describedby="emailHelp" required>
					<input type="submit" value="<?=_dk?>" />
				</form>
				<div class="loading"><img src="images/loading.gif"></div>
			</div>
			<?php include _template."layout/addon/mangxh.php"; ?>
		</div>
	</div>
</div>