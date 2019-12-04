<div id="info">
  <div class="margin_auto">
    <?php include _template."layout/dieuhuong_detail.php";?>
    <?php if(count($product)!=0){ ?>
      <div class="sanpham">
        <?php foreach ($product as $key => $row) { ?>
        <div class="item">
          <div class="img_bd">
            <a class="hover_zoom" href="<?=$row['tenkhongdau']?>"><img onerror="this.src='http://placehold.it/273x251'" src="thumb/273x251/1/<?=_upload_product_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>"></a>
            <div class="icon blink_me">
            <?php if($row['sp_banchay'] != 0){ ?><img src="images/truongvu/new.png" alt="new"><?php } ?>
            <p><?=$row['giaban']!=0&&$row['giacu']!=0?'<span class="sale">'.round(((($row['giacu']-$row['giaban'])/$row['giacu'])*100),0).'%</span>':''?></p>
            </div>
          </div>
          <div class="noidung">
              <h3><a href="<?=$row['tenkhongdau']?>"><?=$row['ten_'.$lang]?></a></h3>
              <div class="gia"><?=_gia?>:&nbsp;&nbsp;
                  <?php if($row['giaban'] != 0) { ?><span class="giaban"><?=number_format($row['giaban'],0, ',', '.')?>đ</span>
                  <?php }else{ ?><span class="giaban"><?=_lienhe?></span><?php } ?>
                  <?php if($row['giacu'] != 0){?><span class="giacu"><?=number_format($row['giacu'],0, ',', '.')?>đ</span><?php } ?>
              </div> 
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="paging"><?=$paging?></div> <?php }else{ ?><div class="updating"><?=_capnhap?></div><?php }  ?>
  </div>
</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>
<h2 class="visit_hidden"><?=$title_detail?></h2>