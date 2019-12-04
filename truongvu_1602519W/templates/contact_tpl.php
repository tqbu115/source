<div id="info">
  <div class="margin_auto"> 
    <div class="dieuhuong">  
      <a href="./" itemprop="url" title="Trang Chủ"><span itemprop="title"><?=_trangchu?></span></a>
      <a href="<?=$com?>" itemprop="url" title="<?=$title_detail?>"><span itemprop="title"><?=$title_detail?></span></a>
    </div>
    <div class="khung_contact">
      <div class="khung_trai">
        <div class="noidung_detail">
          <p><?=$row_detail['noidung_'.$lang]?></p>
        </div>
      </div>
      <div class="khung_phai">
        <div class="form_lh">
          <h4><?=_thongtinlienhe?></h4>
          <form accept-charset="UTF-8" method="post" name="frm" class="contact-form" action="lien-he" enctype="multipart/form-data">
            <p class="form-group"><input class="form-control" name="ten" type="text" placeholder="<?=_hoten?>" required/></p>
            <p class="form-group"><input class="form-control" name="diachi" type="text" placeholder="<?=_diachi?>" required/></p>
            <p class="form-group"><input class="form-control" name="dienthoai" type="text" id="dienthoai" placeholder="<?=_dienthoai?>" required/></p>
            <p class="form-group"><input class="form-control" name="email" type="email" id="contact_email" id="email" placeholder="Email" required/></p>
            <p class="form-group">
              <textarea name="noidung" class="form-control" cols="50" rows="5" class="ta_noidung" placeholder="<?=_content?>" required></textarea>
            </p>
            <input type="hidden" name="type" value="lienhe">
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <p>
              <button><?=_guilienhe?></button>
              <button type="reset">Reset</button>   
            </p>             
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>
<h2 class="visit_hidden"><?=$title_detail?></h2>