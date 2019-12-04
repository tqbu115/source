<?php
$d->reset();
$sql = "select id,tenkhongdau,ten_$lang from #_product_list where hienthi=1 and type='product' order by stt asc";
$d->query($sql);
$product_list_menu = $d->result_array();
?>
<div class="margin_auto">
  <nav class="menu_top khung_flex flex_center"> 
    <div id="logo"><a href="./"><img src="thumb/100x75/2/<?=_upload_hinhanh_l.$logo['photo_vi']?>" alt="logo"></a></div>
    <ul>
      <li class="icon <?=$com==''?'active':''?>"><a href="./"><?=_trangchu?></a></li>
      <li class="icon <?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><?=_gioithieu?></a></li>
      <li class="icon <?=$com=='san-pham'?'active':''?>"><a href="san-pham"><?=_sanpham?></a>
        <?php if(count($product_list_menu) > 0){ ?>
          <ul>
            <?php foreach ($product_list_menu as $key => $rl) { ?>
              <li <?=$idl==$rl['tenkhongdau']?'class="active"':''?>><a href="<?=$rl['tenkhongdau']?>"><?=$rl['ten_'.$lang]?></a></li>
            <?php } ?>
          </ul>
        <?php } ?>
      </li>
      <li class="icon <?=$com=='dich-vu'?'active':''?>"><a href="dich-vu"><?=_dichvu?></a></li>
         <li class="icon <?=$com=='cong-trinh'?'active':''?>"><a href="cong-trinh"><?=_congtrinh?></a></li>
      <li class="icon <?=$com=='tin-tuc'?'active':''?>"><a href="tin-tuc"><?=_tintuc?></a></li>
      <li class="icon <?=$com=='lien-he'?'active':''?>"><a href="lien-he"><?=_lienhe?></a></li>
      <li class="search"><?php include _template."layout/addon/timkiem.php"; ?></li>
    </ul>
  </nav>
</div>
<div class="hotline_fixed">
  <span><img src="images/truongvu/icon-hl.png" alt="icon-hotline"></span><a href="#"><strong><?=$row_setting['hotline']?></strong></a>
</div>