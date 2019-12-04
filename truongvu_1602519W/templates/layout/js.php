<script src="js/jquery-1.9.1.js"></script>
<script src="js/slick/slick.min.js" charset="utf-8"></script> 
<div id="back-to-top"><a href="javascript:void(0)"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></div>
<script src="js/toast/toastr.min.js"></script>
<script src="js/fotorama/fotorama.js"></script>
<script>
  $('.fotorama').fotorama({
  width: '100%',
  maxwidth: '100%',
  ratio: 16/9,
  allowfullscreen: true,
  nav: 'thumbs'
});
</script>
<script >
  $(window).scroll(function(event) {
    var scroll_top = $(document).scrollTop();
    if(scroll_top >= $('#header').height()){
      $('#header').addClass('fixed');
    } else {
      $('#header').removeClass('fixed');
    }
  });
    $(window).scroll(function(event) {
    var scroll_top = $(document).scrollTop();
    if(scroll_top >= $('.hotline_fixed').height()){
      $('.hotline_fixed').addClass('ht_fixed');
    } else {
      $('.hotline_fixed').removeClass('ht_fixed');
    }
  });
  $('.menu_left ul li').hover(function(){
    var vitri = $(this).position().top;
    $(this).children('ul').css({'top':vitri+'px'});
  });
  $(document).ready(function() { $('#slider').fadeIn(); });
  $('.slick_visao').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: false,
    centerMode: false,
    variableWidth: false,
    infinite: true,
    focusOnSelect: false,
    cssEase: 'linear',
    touchMove: true,
  });
</script>
<?php if($com == 'lien-he' || $template == 'product_detail' || $com == ""){ ?>
<script src="https://www.google.com/recaptcha/api.js?render=<?=$sitekey?>"></script>
<?php } if($com == 'lien-he' || $com == ""){ ?>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('<?=$sitekey?>', {action: 'contact'}).then(function(token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token;
    });
  });
</script>
<?php } ?>
<script>
  $(document).ready(function() {
    $('#timkiem .frm_timkiem').submit(function(){ 
      var timkiem = $('#timkiem input').val();
      if(!timkiem){
        //toastr["warning"]("Nhập từ khóa tìm kiếm");
        $('#timkiem input').toggleClass('show');
      } else {
        window.location.href="tim-kiem&keywords="+timkiem;
      }
      return false;
    });
  });
</script>
<?php if($template == 'service_detail'){ ?>
<script>
  $(document).ready(function(e) {
    $('.owl_tinkhac').slick({
      slidesToShow: 4,
      slidesToScroll: 2,
      dots: false,
      infinite: true,
      centerMode: false,
      focusOnSelect: false,
      arrows: false,
      vertical: false,
      verticalSwiping: false,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },{
          breakpoint: 750,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },{
          breakpoint: 380,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  });
</script>
<?php } ?>
<?php if($template == "product_detail"){ ?>
<script src="js/magiczoomplus/magiczoomplus.js"></script>
<script>
  $(document).ready(function() {
    $('#tabs li a').click(function(){
      var id = $(this).attr('data-id');
      $('#tabs li').removeClass('active');
      $(this).parent().addClass('active');
      $('.tabct').removeClass('tab_show');
      $('.tabct').removeClass('tab_hidden');
      $('.tabct').addClass('tab_hidden');
      $('#'+id).addClass('tab_show');
    });
    $('.dky-phone form').submit(function(event) {
      var dienthoai = $('.dky-phone form input[name=dienthoai]').val();
      $('.dky-phone .loading').fadeIn();
      grecaptcha.ready(function() {
        grecaptcha.execute('<?=$sitekey?>', {action: 'nhantin'}).then(function(token) {
          $.ajax ({
            type: "POST",
            url: "ajax/dangky_email.php",
            data: {dienthoai,type:'nhantin',recaptcha_response:token},
            success: function(result) { 
              if(result==0){
                $('.dky-phone form input[name=dienthoai]').val('');
                toastr["success"]("Đăng ký thành công !");
              } else if(result==1){
                toastr["warning"]("Điện thoại đã đăng ký.");
                $('.dky-phone form input[name=dienthoai]').val('');
              } else if(result==2){
                toastr["warning"]("Có lỗi xảy ra.");
                $('.dky-phone form input[name=dienthoai]').val('');
              }
              $('.dky-phone .loading').fadeOut();
            }
          });
        });
      });
      return false;
    });
  });
</script>
<script language="javascript">
  $('#foo3').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    infinite: false,
    centerMode: false,
    focusOnSelect: false,
    arrows: true,
    nextArrow: '<img src="images/right_lv.png" class="foo3_r" alt="right">',
    prevArrow: '<img src="images/left_lv.png" class="foo3_l" alt="left">',
    vertical: false,
    verticalSwiping: false,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 1,
      }
    },{
      breakpoint: 980,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
    ]
  });
</script>
<?php } ?>
<script>$("#comment").load("ajax/load_comment.php?url="+$("#comment").data("url"));</script>
<script>
  if ($('#back-to-top').length) {
    var scrollTrigger = 200, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').show();
            } else {
                $('#back-to-top').hide();
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
  }
</script>
<?=$row_setting['vchat']?>
<script type="application/ld+json"> { 
  "@context" : "http://schema.org", 
"@type" : "LocalBusiness",
"name" : "<?=$row_setting['ten_'.$lang]?>", 
"image" : "http://<?=$config_url?>/<?=_upload_hinhanh_l.$favicon['photo_vi']?>",
"telephone" : "<?=$row_setting['dienthoai']?>", 
"priceRange " : " VND ", 
"email" : "<?=$row_setting['email']?>", 
"address" : { 
  "@type" : "PostalAddress",
  "streetAddress" : "  ",
  "addressLocality" : "  ", 
  "addressRegion" : " TP HCM ", 
  "addressCountry" : " Việt Nam ", 
  "postalCode" : " 70000 " },
  "openingHoursSpecification" : { "@type" : "OpeningHoursSpecification", 
"opens" : "T8:00", 
"closes" : "T17:30" }, 
"url" : "<?=getCurrentPageURL()?>" } 
</script>
<script src="js/fancybox3/jquery.fancybox.min.js"></script>
<script>$("[data-fancybox]").fancybox({});</script>
<script language="javascript" type="text/javascript" src="js/amazingslider/amazingslider.js"></script>
<script src="js/amazingslider/initslider-1.js"></script>
<?php if($template == 'index'){ ?>
<script src="ajax_paging/paging.js"></script>
<script>
  $('.dangkymail').submit(function(event) {
    var email = $('.dangkymail input[name=email]').val();
    console.log(email);
    $('.loading').fadeIn();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?=$sitekey?>', {action: 'nhantin'}).then(function(token) {
        $.ajax ({
          type: "POST",
          url: "ajax/dangky_email.php",
          data: {email:email,recaptcha_response:token,type:'nhantin'},
          success: function(result) { 
            if(result==0){
              $('.dangkymail .input').val('');
              toastr["success"]("Đăng ký thành công");
            } else if(result==1){
              toastr["warning"]("Email đã đăng ký");
              $('.dangkymail .input').val('');
            } else if(result==2){
              toastr["warning"]("Đăng ký thất bại");
              $('.dangkymail .input').val('');
            }
            $('.loading').fadeOut();
          }
        });
      });
    });
    return false;
  });
</script>
<script>
  $('.tintuc_r').slick({
      lazyLoad: 'ondemand',
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      infinite: true,
      centerMode: false,
      variableWidth: false,
      focusOnSelect: false,
      vertical: true,
      verticalSwiping: true,
      autoplay: true,
      autoplaySpeed: 3000,

  });
</script>
<script>
  $('.slick_video').slick({
        slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      infinite: true,
      centerMode: false,
      variableWidth: false,
      focusOnSelect: false,
      vertical: false,
      verticalSwiping: false,
      autoplay: true,
      autoplaySpeed: 3000,

  });
</script>
<script>
  $('.slick_sanpham').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    autoplay: false,
    centerMode: false,
    variableWidth: false,
    infinite: true,
    focusOnSelect: false,
    cssEase: 'linear',
    touchMove: true,
     autoplaySpeed: 3000,
  });
</script>
<script type="text/javascript">
    $('.btnprev').click(function() {
    $(this).parents('.khung').find('.slick-prev').click();
  });
  $('.btnnext').click(function() {
    $(this).parents('.khung').find('.slick-next').click();
  });
</script>
<script >
  $(document).ready(function() {
    $('.img_face a').click(function(event) {
      /* Act on the event */
      if($('.face_right').hasClass('active')){
        $('.face_right').removeClass('active');
      } else {
        $('.face_right').addClass('active');
      }
      return false;
    });  
  });
</script>
<?php }else{ ?>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6f62ebc807c8bf"></script>
<?php } ?>
<?php if($com == "" || $template == 'product_detail'){ ?>
<script>
  $('.owl_sp').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    centerMode: false,
    variableWidth: false,
    infinite: true,
    focusOnSelect: true,
    cssEase: 'linear',
    touchMove: true,
  });
</script>
<?php } ?>