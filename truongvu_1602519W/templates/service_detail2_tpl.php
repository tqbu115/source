<div id="info">
  <div class="margin_auto">
    <?php include _template."layout/dieuhuong_detail.php";?>     
    <div class="noidung_detail">
      <div class="ngaydang">Ngày đăng : <?=date('d/m/Y - g:i A',$row_detail['ngaytao']);?></div>
      <div class="noidung"><?=$row_detail['noidung_'.$lang]?></div>
      <div class="addthis_inline_share_toolbox"><div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div></div>
      <?=get_social('','comment');?>
    </div>
    <?php if(count($tintuc) > 0){ ?>
    <div class="title"><h4>Bất động sản khác</h4></div>
    <div class="owl_bds">
      <?php foreach($tintuc as $key => $row){?>
        <div>
          <div class="bds">
            <div class="img"><a class="hover_zoom" href="<?=$row['tenkhongdau']?>"><img src="thumb1/440x380/1/<?=_upload_product_l.$row['photo']?>" alt="<?=$row['ten_'.$lang]?>"></a></div>
            <div class="noidung">
              <h3><a href="<?=$row['tenkhongdau']?>"><?=$row['ten_'.$lang]?></a></h3>
              <div class="mota">
                <p class="gia"><label>Giá</label>: <span><?=$row['giaban']!=0?bd_nice_number($row['giaban']):"Liên Hệ";?></span></p>
                <?php if($row['dientich']!=""){ ?><p class="dientich"><label>Diện tích</label>:<span><?=$row['dientich']?>m<sup>2</sup></span></p><?php } ?>
                <?php if($row['lienhe']!=""){ ?><p class="diachi"><label>Địa chỉ</label>:<span><?=$row['lienhe']?></span></p><?php } ?>
                <p class="ngaydang"><label>Ngày đăng</label>:<span><?=date("d/m/Y",$row['ngaytao'])?></span></p>
                <?php if($row['video']!=""){ ?><p class="trangthai"><label>Trạng thái</label>:<span><?=$row['video']?></span></p><?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
    <?php } ?>
  </div> 
  <h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>
  <h2 class="visit_hidden"><?=$title_detail?></h2>  