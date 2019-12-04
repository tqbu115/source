<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	
  if(!isset($_SESSION['lang'])) {
  $_SESSION['lang']='vi'; }
  $lang=$_SESSION['lang'];    

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
  include_once _lib."functions_share.php";
  include_once _lib."class.database.php";
  $d = new database($config['database']);
  include_once _source."lang.php";
	include_once _lib."functions_giohang.php";
  include_once _source."template.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php";
	$pageURL=getCurrentPageURL();

  if($_GET['lang']!=''){
   $_SESSION['lang']=$_GET['lang'];
   redirect($_SESSION['links']);
 } else {
   $_SESSION['links']=getCurrentPageURL();
 }
  
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<base href="http://<?=$config_url?>/">
<link id="favicon" rel="shortcut icon" href="thumb/40x40/2/<?=_upload_hinhanh_l.$favicon['photo_'.$lang]?>" type="image/x-icon" />
<title><?=$title_bar?></title>
<meta name="description" content="<?=$description_bar?>">
<meta name="keywords" content="<?=$keyword_bar?>">
<meta name="viewport" content="width=1366" />
<meta name="robots" content="<?php if($meta_index!=''){ echo $meta_index;} else { echo "noodp,index,follow";} ?>" />
<meta http-equiv="audience" content="General" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name='revisit-after' content='1 days' />
<meta name="ICBM" content="<?=$row_setting['toado']?>">
<meta name="geo.position" content="<?=$row_setting['toado']?>">
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<link rel="canonical" href="<?=getCurrentPageURLCNC()?>" />
<meta property="og:site_name" content="<?=$row_setting['website']?>" />
<meta property="og:type" content="<?=$type_og?>" />
<meta property="og:locale" content="vi_VN" />
<meta name="twitter:card" value="summary">
<meta name="twitter:url" content="<?=getCurrentPageURL()?>">
<meta name="twitter:title" content="<?=$title_bar?>">
<meta name="twitter:description" content="<?=$description_bar?>">
<meta name="twitter:image" content="<?=get_http().$config_url.'/thumb/200x200/2/'.$upload_file.$row_detail['photo']?>"/>
<meta name="twitter:site" content="<?=$title_bar?>">
<meta name="twitter:creator" content="<?=$title_bar?>">
<meta name="dc.language" CONTENT="vietnamese">
<meta name="dc.source" CONTENT="http://<?=$config_url?>/">
<meta name="dc.title" CONTENT="<?=$title_bar?>">
<meta name="dc.keywords" CONTENT="<?=$keyword_bar?>">
<meta name="dc.description" CONTENT="<?=$description_bar?>">
<meta property="og:url" content="<?=getCurrentPageURL()?>" />
<meta property="og:image" content="<?=get_http().$config_url.'/thumb/200x200/2/'.$upload_file.$row_detail['photo']?>" />
<meta property="og:image:alt" content="<?=$title_bar?>" />
<meta property="og:description" content="<?=$description_bar?>" />
<meta property="og:image:url" content="<?=get_http().$config_url.'/thumb/200x200/2/'.$upload_file.$row_detail['photo']?>" />
<meta name="dc.publisher" content="<?=$row_setting['ten_'.$lang]?>" />

<link href="style.css" rel="stylesheet"  />
<link href="js/menu_bar/css/style.css" rel="stylesheet"  />
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet"  />
<link href="js/toast/toastr.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/animate.min.css">
<?php if($com == 'gio-hang'){ ?>
<link rel="stylesheet" href="css/giohang.css" />
<?php } ?>
<?php if($com == 'thanh-toan'){ ?>
<link rel="stylesheet" href="css/checkout.css" />
<?php } ?>
<?php if($template == 'product_detail'){ ?>
<link href="js/magiczoomplus/magiczoomplus.css" rel="stylesheet"  media="screen"/>
<?php } ?>
<?php if($com == ""){ ?>
<link rel="stylesheet" href="ajax_paging/ajax.css" />
<?php } ?>
<link rel="stylesheet" href="js/fancybox3/jquery.fancybox.min.css" />
<?php include _template."layout/background.php"; ?>
<link rel="stylesheet" href="js/slick/slick.css">
<link rel="stylesheet" href="js/slick/slick-theme.css">
<link  rel="stylesheet" href="js/mmmenu/jquery.mmenu.all.css" />
<link rel="stylesheet" type="text/css" href="js/fotorama/fotorama.css">
<?=$row_setting['analytics']?> 
<?=$row_setting['code_head']?>   
</head>
<body>
<?=$row_setting['code_body']?>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=629584947171673";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div id="container">
  <header id="header">
    <?php include _template."layout/header.php"; ?>         
  </header>
  <main id="main">
    <?php include _template.$template."_tpl.php"; ?>
  </main>
  <footer>
    <?php include _template."layout/footer.php"; ?>
  </footer> 
</div>
<?php include _template."layout/js.php"; ?>
<?php include _template."layout/addon/facebook.php"; ?>
<?php include _template."layout/addon/zalo.php"; ?>
<?=$row_setting['code_footer']?>
</body>
</html>