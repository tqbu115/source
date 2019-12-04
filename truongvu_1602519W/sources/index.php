<?php  if(!defined('_source')) die("Error");
	$title_bar = $row_setting['title'];
  	$keyword_bar = $row_setting['keywords'];
  	$description_bar = $row_setting['description'];
  	$row_detail['photo'] = $logo['photo_'.$lang];
  	$upload_file = _upload_hinhanh_l;

  	$d->reset();
	$sql = "select id,tenkhongdau,ten_$lang,photo,giacu,giaban,noibat,sp_banchay from #_product where hienthi=1 and type='product' and noibat != 0 order by stt,id asc";
	$d->query($sql);
	$product_new = $d->result_array(); 
?>