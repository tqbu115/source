<?php
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	//$d = new database($config['database']);

$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;

$data = array(
    	//sanpham 
	array("tbl"=>"product_list","field"=>"idl","com"=>"san-pham","type"=>"product"),
	array("tbl"=>"product","field"=>"id","com"=>"san-pham","type"=>"product"),
   		//dich vu
	array("tbl"=>"baiviet","field"=>"id","com"=>"dich-vu","type"=>"dichvu"),
		//tin tuc
	array("tbl"=>"baiviet","field"=>"id","com"=>"tin-tuc","type"=>"tintuc"),
	array("tbl"=>"info","field"=>"id","com"=>"gioi-thieu","type"=>"gioithieu"),
	array("tbl"=>"baiviet","field"=>"id","com"=>"chinh-sach","type"=>"chinhsach"),
		//congtrinh
	array("tbl"=>"baiviet","field"=>"id","com"=>"cong-trinh","type"=>"congtrinh"),
);
if($com){
	foreach($data as $k=>$v){
		if(isset($com) && $v['tbl']!='info'){
			$d->query("select id from #_".$v['tbl']." where tenkhongdau='".$com."' and type='".$v['type']."' and hienthi=1");
			if($d->num_rows()>=1){
				$row = $d->fetch_array();
				$_GET[$v['field']] = $row['id'];
				$com = $v['com'];	
				break;
			}
		}
	}
}
switch($com){
	/**************LOGIN***************/
		// case 'dang-ky':
		// 	$source = "login/dangky";
		// 	$template = "login/dangky";
		// 	break;

		// case 'dang-nhap':
		// 	$source = "login/dangnhap";
		// 	$template ="login/dangnhap";
		// 	break;

		// case 'dang-xuat':
		// 	$source = "login/dangxuat";
		// 	break;

		// case 'tai-khoan':
		// 	$source = "login/taikhoan";
		// 	$template ="login/taikhoan";
		// 	break;

		// case 'kich-hoat-mail':
		// 	$source = "login/kichhoatmail";
		// 	$template ="login/kichhoatmail";
		// 	break;

		// case 'quen-mat-khau':
		// 	$source = "login/quenmatkhau";
		// 	$template ="login/quenmatkhau";
		// 	break;

		// case 'doi-phan-thuong':
		// 	$source = "login/doiphanthuong";
		// 	$template ="login/doiphanthuong";
		// 	break;

	/**************LOGIN***************/
	case 'ngon-ngu':
		$_SESSION['lang'] = $_GET['lang'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	break;
	case 'gio-hang':
		$source = "giohang";
		$template = "giohang";
		$type_og = "article";
		$title_detail = "Giỏ Hàng";
	break;
	case 'thanh-toan':
		$source = "thanhtoan";
		$template = "thanhtoan";
		$type_og = "article";
		$title_detail = "Thanh Toán";
	break;
	case 'cong-trinh':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'congtrinh';
			$title_detail = _congtrinh;
	break;
	case 'dich-vu':
			$source = "news";
			$template =isset($_GET['id']) ? "service_detail" : "news";
			$title_detail = _dichvu;
			$type_bar = 'dichvu';	
	break;
	case 'san-pham':
		$source = "product";
		$template = isset($_GET['id']) ? "product_detail" : "product";
		$type_og = isset($_GET['id']) ? "article" : "object";
		$type_bar = 'product';
		$title_detail = _sanpham;
	break;
	case 'gioi-thieu':
		$source = "about";
		$template = "about";
		$type_og = "article";
		$type_bar = 'gioithieu';
		$title_detail = _gioithieu;
	break;
	case 'tin-tuc':
		$source = "service";
		$template = isset($_GET['id']) ? "service_detail" : "service";
		$type_og = isset($_GET['id']) ? "article" : "object";
		$type_bar = 'tintuc';
		$title_detail = _tintuc;
	break;
	case 'chinh-sach':
		$source = "service";
		$template = isset($_GET['id']) ? "service_detail" : "service";
		$type_og = isset($_GET['id']) ? "article" : "object";
		$type_bar = 'chinhsach';
		$title_detail = _chinhsach;
	break;
	case 'lien-he':
		$source = "contact";
		$type_bar = 'lienhe';
		$type_og = "article";
		$template = "contact";
		$title_detail = _lienhe;
	break;
	case 'tim-kiem':
		$source = "search";
		$type_og = "article";
		$template = "product";
		
	break;
	case '':
		$source = "index";
		$type_og = "website";
		$template = "index";
		break;
		default: 
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
		include('404.php');
		exit();
	break;
}
if($config['index']==1){
	if($_SERVER["REQUEST_URI"]=='/index.php'){
		header("location:".get_http().$config_url);
	}
}
if($source!="") include _source.$source.".php";

if($_REQUEST['com']=='logout')
{
	session_unregister($login_name);
	header("Location:index.php");
}		
if($_REQUEST['com']=='thoat')
{
	unset($_SESSION['login']);
	header("location:trang-chu.html");
}		
?>