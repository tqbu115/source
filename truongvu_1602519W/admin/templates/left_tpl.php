<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>


  <li class="categories_li <?php if($_GET['com']=='product' && $_GET['type'] == 'product' || $_GET['com']=='tags' ) echo ' activemenu' ?>" id="menu_sp"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='product' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=product">Sản phẩm cấp 1</a></li>
      <li <?php if($_GET['type']=='product' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=product">Sản phẩm</a></li>
    </ul>
  </li>
  <li class="categories_li <?php if($_GET['com']=='baiviet' && $_GET['type'] == 'dichvu' ) echo ' activemenu' ?>" id="menu_dv"><a href="" title="" class="exp"><span>Dịch vụ</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='dichvu' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dichvu">Dịch vụ</a></li>
    </ul>
  </li>
    <li class="categories_li <?php if($_GET['com']=='baiviet' && $_GET['type'] == 'congtrinh' || $_GET['com']=='tags' ) echo ' activemenu' ?>" id="menu_ct"><a href="" title="" class="exp"><span>Công Trình</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='contrinh' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=congtrinh">Công Trình</a></li>
    </ul>
  </li>
  <li class="categories_li <?php if($_GET['com']=='baiviet' && $_GET['type']!='dichvu' && $_GET['type'] != "duan")  echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='tintuc' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Tin tức</a></li>
       <li <?php if($_GET['type']=='tienich' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tienich">Tiện Ích</a></li>
        <li <?php if($_GET['type']=='chinhsach' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=chinhsach">Chính Sách</a></li>
    </ul>
  </li>
  <li class="categories_li <?php if($_GET['com']=='info' && $_GET['seo']!='1') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='gioithieu') echo 'class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu" title="">Giới thiệu</a></li>
      <li <?php if($_GET['type']=='lienhe') echo 'class="this"' ?>><a href="index.php?com=info&act=capnhat&type=lienhe" title="">Liên Hệ</a></li>
      <li <?php if($_GET['type']=='footer') echo 'class="this"' ?>><a href="index.php?com=info&act=capnhat&type=footer" title="">Footer</a></li>
    </ul>
  </li>  
  <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='bannerqc'  || $_GET['com']=='company' || $_GET['com']=='lang_define') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['com']=='setting') echo 'class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      <li <?php if($_GET['type']=='logo') echo 'class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
      <?php /*<li <?php if($_GET['type']=='bocongthuong') echo 'class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=bocongthuong" title="">Bộ công thương</a></li>*/ ?>
      <li <?php if($_GET['type']=='favicon') echo 'class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>
    </ul>
  </li>
  <li class="gallery_li<?php if($_GET['com']=='photo' || $_GET['com']=='video' || $_GET['com']=='lkweb'  || $_GET['com']=='album' || $_GET['com']=='yahoo') echo ' activemenu' ?>" id="menu_ha"><a href="#" title="" class="exp"><span>Hình Ảnh - Video - MXH</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Slider</a></li>
      <li <?php if($_GET['type']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
      <li <?php if($_GET['type']=='mangxh') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=mangxh" title="">Chia sẽ MXH</a></li>
      <li <?php if($_GET['type']=='lienketmxh') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=lienketmxh" title="">Liên kết MXH</a></li>
    </ul>
  </li>
  <li class="gallery_li<?php if($_GET['com']=='background') echo ' activemenu' ?>" id="menu_bg"><a href="#" title="" class="exp"><span>Background website</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=footer" title="">Background footer</a> </li>
    </ul>
  </li> 
</ul>