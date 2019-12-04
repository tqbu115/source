<?php
  $d->reset();
  $sql = "select tenkhongdau,ten_$lang,id from #_product_list where hienthi=1 and type='product' order by stt asc";
  $d->query($sql);
  $product_list_l = $d->result_array();
?>
<div id="left">
  <div class="isfixed">
    <div class="danhmuc">
      <h4>Danh mục sản phẩm</h4>
      <ul class="danhmuc_l">
        <?php foreach ($product_list_l as $key => $rl) { 
          $d->reset();
          $sql = "select ten_vi,tenkhongdau,id from #_product_cat where hienthi=1 and type='product' and id_list = ".$rl['id']." order by stt,id desc";
          $d->query($sql);
          $product_cat_l = $d->result_array();
        ?>
          <li <?php if($rl['tenkhongdau'] == $idl){echo 'class="active"';} ?>><a href="<?=$rl['tenkhongdau']?>"><?=$rl['ten_'.$lang]?></a>
            <?php if(count($product_cat_l) > 0) { ?>
              <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> -->
              <ul>
                <?php foreach ($product_cat_l as $key => $rc) { ?>
                  <li <?php if($rc['tenkhongdau'] == $idc){echo 'class="active"';} ?>><a href="<?=$rc['tenkhongdau']?>"><?=$rc['ten_'.$lang]?></a></li>
                <?php } ?>
              </ul>
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>