<nav id="menu_mm">
	<?php if(count($product_list_menu) > 0 ){ ?>
    <ul>
      <?php foreach ($product_list_menu as $key => $rl) { 
        $d->reset();
        $sql = "select id,tenkhongdau,ten_$lang from #_product_cat where hienthi=1 and type='product' and id_list = '".$rl['id']."' order by stt,id asc";
        $d->query($sql);
        $product_cat_menu = $d->result_array();
      ?>
      <li class="icon"><a href="<?=$rl['tenkhongdau']?>"><img src="thumb/40x35/2/<?=_upload_product_l.$rl['photo']?>" alt="<?=$rl['ten_'.$lang]?>"><?=$rl['ten_'.$lang]?></a>
        <?php if(count($product_cat_menu) > 0){ 
          $d->reset();
          $sql = "select id,tenkhongdau,ten_$lang from #_product_item where hienthi=1 and type='product' and id_cat = '".$rc['id']."' order by stt,id asc";
          $d->query($sql);
          $product_item_menu = $d->result_array();
        ?>
        <ul>
          <?php foreach ($product_cat_menu as $key => $rc) { ?>
          <li><a href="<?=$rc['tenkhongdau']?>"><?=$rc['ten_'.$lang]?></a>
            <?php if(count($product_item_menu) > 0){ ?>
            <ul>
              <?php foreach ($product_item_menu as $key => $ri) { ?>
              <li><a href="<?=$ri['tenkhongdau']?>"><?=$ri['ten_'.$lang]?></a></li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
</nav>