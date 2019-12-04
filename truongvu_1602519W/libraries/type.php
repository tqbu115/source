<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	if(count($act>1)){
		$act = $act[1];
	} else {
		$act = $act[0];
	}
	switch($type){
		//-------------product------------------
		case 'product':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_quangcao = "false";
					$config_images = "true";
					$config_noibat = "true";
					$config_menu = "false";
					$config_left = "false";
					$mapx = "false";
					$mau = "false";
					$config_mota = "true";
					$config_mota_ck = "false";
					$config_img = "false";
					@define ( _width_thumb , 25 );
					@define ( _height_thumb , 32 );
					@define ( _width_thumb_qc , 370 );
					@define ( _height_thumb_qc , 365 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_images = "false";
					$config_mota= "false";
					$config_mota_ck = "true";
					$config_noibat = "true";
					$mapx  = "false";
					@define ( _width_thumb , 1366 );
					@define ( _height_thumb , 250 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				case 'item':
					$title_main = "Danh mục cấp 3";
					$config_images = "false";
					$config_mota= "false";
					@define ( _width_thumb , 24 );
					@define ( _height_thumb , 18 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Sản Phẩm";
					$config_images = "true";
					$config_img = "true";
					$config_mota= "true";
					$config_mota_ck = "true";
					$config_list = "true";
					$config_cat = "false";
					$config_item = "false";
					$config_sub = "false";
					$config_thuonghieu = "false";
					$config_noidung = "true";
					$config_thongso = "false";
					$config_khuyenmai = "false";
					$config_baohanh = "false";
					$config_noibat = "true";
					$config_banchay = "true";
					$config_name = "false";
					$config_banchay2 = "false";
					$config_toptk = "false";
					$config_bds = "false";
					$giaban = "true";
					$giacu = "true";
					$giasi = "false";
					$masp = "false";
					$mausac = "false";
					$size = "false";
					$tag = "false";	
					$rate = "false";
					$soluong = "false";	
					$config_seos = "false";	
					@define ( _width_thumb , 273 );
					@define ( _height_thumb , 251 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;

		case 'congtrinh':
			$title_main = "Công Trình";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "true";
			$config_mota = "true";
			$config_noidung = "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "true";
			$config_seos = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 100 );
			@define ( _height_thumb , 110 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;

		case 'color':
			$config_images = "true";
			$config_img = "true";
			@define ( _width_thumb , 25 );
			@define ( _height_thumb , 25 );
			@define ( _width_thumb_img , 275 );
			@define ( _height_thumb_img , 300 );
			$ratio_ = 2;
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'tintuc':
			$title_main = "Tin tức";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "true";
			$config_noidung = "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "true";
			$config_sub = "false";
			$config_seo = "true";
			$config_seos = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 100 );
			@define ( _height_thumb , 110 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'tienich':
			$title_main = "Tiện Ích";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "true";
			$config_noidung = "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "true";
			$config_seos = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 55 );
			@define ( _height_thumb , 55 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'chinhsach':
			$title_main = "Chính Sách";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "true";
			$config_noidung = "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "true";
			$config_seos = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 100 );
			@define ( _height_thumb , 110 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'dichvu':
			$title_main = "Dịch Vụ";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "true";
			$config_noidung = "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "true";
			$config_seos = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 100 );
			@define ( _height_thumb , 110 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'linhvuc':
			$title_main = "Lĩnh vực hoạt động";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "false";
			$config_noidung = "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 280 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'camnhan':
			$title_main = "Phản hồi từ đối tác";
			$config_ten = "true";
			$config_name = "false";
			$config_images = "true";
			$config_img = "false";
			$config_mota = "true";
			$config_mota_ck = "false";
			$config_noidung = "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noibat = "false";
			$config_sub = "false";
			$config_seo = "false";
			$color = "false";
			$link = "false";
			@define ( _width_thumb , 280 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------info------------------
		case 'lienhe':
			$config_mota = "true";
			$config_mota_ck = "false";
			$config_noidung = "true";
			break;
		case 'thuvienanh':
			$config_ten = "true";
			$config_url = "false";
			$config_name = "true";
			$config_images = "false";
			$config_img = "true";
			$config_seo = "false";
			@define ( _width_thumb , 1000 );
			@define ( _height_thumb , 300 );
			@define ( _width_thumb_img , 229 );
			@define ( _height_thumb_img , 220 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'chinhsachlaysi':
			$config_noidung = "true";
			$config_images = 'true';
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'gioithieu':
			$title_main = 'Giới thiệu';
			$config_ten = 'true';
			$config_url = 'true';
			$config_name = 'true';
			$config_images = 'true';
			$config_img = 'false';
			$config_mota = 'true';
			$config_mota_ck = 'true';
			$config_noidung = "true";
			$link = "false";
			@define ( _width_thumb , 600 );
			@define ( _height_thumb , 422 );
			@define ( _width_thumb_img , 570 );
			@define ( _height_thumb_img , 370 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'footer':
			$title_main = 'Thông tin footer';
			$config_ten = 'false';
			$config_mota = 'false';
			$config_noidung = "true";
			$config_images = "false";
			$config_seo = "false";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 505 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tags':
			$title_main = 'tags';
			$config_ten = 'true';
			break;
		// background
		case 'body':
			$title_main = 'Banner';
			@define ( _width_thumb , 1369 );
			@define ( _height_thumb , 400 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
		case 'logo':
			$title_main = 'Logo';
			@define ( _width_thumb , 100 );
			@define ( _height_thumb , 75 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'popup':
			$title_main = 'banner';
			@define ( _width_thumb , 800 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$config_hienthi = 'true';
			$links = 'true';
			$ratio_ = 1;
			break;
		case 'favicon':
			$title_main = 'Favicon';
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bgvisao':
			$title_main = 'background vì sao';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 65 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bggioithieu':
			$title_main = 'background giới thiệu';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bgnhantin':
			$title_main = 'background nhận tin';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 110 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bgsanpham':
			$title_main = 'background sản phẩm';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 0 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			$config_mota = "false";
			$config_noidung = "false";
			$config_icon = "false";
			$links = "true";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 553 );	
			//@define ( _width_thumb_icon , 320 );
			//@define ( _height_thumb_icon , 210 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'quangcao':
			$title_main = "Quảng Cáo";
			$config_mota = "false";
			$config_noidung = "false";
			$config_icon = "false";
			$links = "true";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 360 );	
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'doitac':
		    $title_main = "đối tác";
		    $config_mota = "false";
		    $config_noidung = "false";
		    $links = "true";
			@define ( _width_thumb , 160 );
			@define ( _height_thumb , 100 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bocongthuong':
		    $title_main = "Bộ công thương";
		    $config_hienthi = "true";
			@define ( _width_thumb , 116 );
			@define ( _height_thumb , 45 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links = "true";
			break;	
		case 'mangxh':
		    $title_main = "Mạng xã hội";
		    $config_images = "true";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'lienketmxh':
		    $title_main = "Liên kết website";
			@define ( _width_thumb , 31 );
			@define ( _height_thumb , 31 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'lkchat':
		    $title_main = "Liên kết phải";
			@define ( _width_thumb , 56 );
			@define ( _height_thumb , 56 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		//--------------defaut---------------
		case 'thanhtoan':
		    $title_main = "Hình thức thanh toán";
		    $config_images = "false";
		    $config_name = "false";
		    $config_url = "false";
		    $config_noidung = "true";
		    $config_seo = "false";
			break;
		default: 

			$source = "";

			$template = "index";

			break;

	}

	

?>