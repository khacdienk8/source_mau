<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	#Thông tin công ty
	$d->reset();
	$sql_company = "select *,ten$lang as ten,diachi$lang as diachi from #_company limit 0,1";
	$d->query($sql_company);
	$company= $d->fetch_array();
	
	switch($com)
	{
		
		case 'gioi-thieu':
			$type = "about";
			$title = _gioithieu;
			$title_cat = _gioithieu;
			$title_facebook = _gioithieu;
			$title_other = _tinlienquan;
			$source = "about";
			$template = "about";
			break;
			
		case 'tin-tuc':
			$type = "tintuc";
			$title = _tintuc;
			$title_cat = _tintuc;
			$title_facebook = _tintuc;
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;

		case 'bang-gia-si':
			$type = "banggiasi";
			$title = "BẢNG GIÁ SỈ";
			$title_cat = "BẢNG GIÁ SỈ";
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;
		case 'huong-dan-dat-hang':
			$type = "huongdan";
			$title = "HƯỚNG DẪN ĐẶT HÀNG";
			$title_cat = "HƯỚNG DẪN ĐẶT HÀNG";
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;
		case 'thanh-toan-giao-nhan':
			$type = "thanhtoan";
			$title = "THANH TOÁN & GIAO NHẬN";
			$title_cat = "THANH TOÁN & GIAO NHẬN";
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;

		case 'dich-vu':
			$type = "dichvu";
			$title = "Dịch Vụ";
			$title_cat = "Dịch Vụ";
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;

			
		case 'chinh-sach':
			$type = "chinhsach";
			$title = _chinhsach;
			$title_cat = _chinhsach;
			$title_other = _tinlienquan;
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			break;

		case 'lien-he':
			$type = "lienhe";
			$title = _lienhe;
			$title_cat = _lienhe;
			$source = "contact";
			$template = "contact";
			break;

		case 'tim-kiem':
			$type = "sanpham";
			$title = _ketquatimkiem;
			$title_cat = _ketquatimkiem;
			$source = "search";
			$template = "product";
			break;

			
		case 'tags':
			$type = "sanpham";
			$title = "Tìm kiếm thông tin";
			$title_cat = "Tìm kiếm thông tin";
			$source = "product";
			$template = "product";
			break;	
			
		case 'tag':
			$type = "tintuc";
			$title = _tagbaiviet;
			$title_cat = _tagbaiviet;
			$source = "news";
			$template = "news";
			break;	
							
		case 'san-pham':
			$type = "sanpham";
			$title = "SẢN PHẨM";
			$title_cat = "SẢN PHẨM";
			$title_other = "SẢN PHẨM KHÁC";
			$source = "product";
			$template = isset($_GET['id']) ? "product_detail" : "product";
			break;
					
		case 'video':
			$title = 'Video Clip';
			$title_cat = "Video Clip";
			$source = "video";
			$template = "video";
			break;

		case 'gio-hang':
			$type = "giohang";
			$title = _giohang;
			$title_cat = _giohang;
			$source = "giohang";
			$template = "giohang";
			break;	
			
		case 'thanh-toan':
			$type = "thanhtoan";
			$title = _thanhtoan;
			$title_cat = _thanhtoan;
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;
			

			
		case 'detail':
			switch(check_com_type($_REQUEST['id']))
			{
				case 'product':
					$source = "product";
					$type = get_type_cat($_REQUEST['id'] , 'product');
					$template = "product_detail";
					$title_other = "SẢN PHẨM KHÁC";
					$type_web = "object";
					break;
				case 'news':
					$source = "news";
					$type = get_type_cat($_REQUEST['id'] , 'news');
					$template = "news_detail";
					$title_other = "BÀI VIẾT KHÁC";
					$type_web = "article";
					break;

			}
			break;
			
		case 'danhmuc':
			switch(check_danhmuc_type($_REQUEST['id_danhmuc']))
			{
				case 'product_danhmuc':
					$type = get_type_cat($_REQUEST['id_danhmuc'] , 'product_danhmuc');
					$source = "product";
					$template = "product";
					$id_danhmuc = $_REQUEST['id_danhmuc'];
					break;
				case 'product_list':
					$type = get_type_cat($_REQUEST['id_danhmuc'] , 'product_list');
					$source = "product";
					$template = "product";
					$id_list = $_REQUEST['id_danhmuc'];
					break;
				case 'product_cat':
					$type = get_type_cat($_REQUEST['id_danhmuc'] , 'product_cat');
					$source = "product";
					$template = "product";
					$id_list = $_REQUEST['id_danhmuc'];
					break;

				case 'news_danhmuc':
					$type = get_type_cat($_REQUEST['id_danhmuc'] , 'news_danhmuc');
					$source = "news";
					$template = "news";
					$id_danhmuc = $_REQUEST['id_danhmuc'];
					break;
				case 'news_list':
					$type = get_type_cat($_REQUEST['id_danhmuc'] , 'news_list');
					$source = "news";
					$template = "news";
					$id_list = $_REQUEST['id_danhmuc'];
					break;

			}
			break;
			

		case '':
			$source = "index";
			$template = "index";
			$title_facebook = $company['title'];
			$description_facebook = $company['description'];
			break;
		
		default :
			$source = "index";
			$template = "index";
			break;	
			
		case 'ngonngu':
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
						case '':
							$_SESSION['lang'] = '';
							break;
						case 'en':
							$_SESSION['lang'] = 'en';
							break;
						default: 
							$_SESSION['lang'] = '';
							break;
					}
			}
			else{
				$_SESSION['lang'] = '';
			}
			redirect($_SERVER['HTTP_REFERER']);
			break;
											
		

	}
	
	if($source!="") include _source.$source.".php";	
	if($_REQUEST['com']=='logout')
	{
		session_unregister($login_name);
		header("Location:index.php");
	}

	$arr_animate =array("wow bounce","wow flash","wow pulse","wow rubberBand","wow shake","wow swing","wow tada","wow wobble","wow jello","wow bounceIn","wow bounceInDown","wow bounceInLeft","wow bounceInRight","wow bounceInUp","wow bounceOut","wow bounceOutDown","wow bounceOutLeft","wow bounceOutRight","wow bounceOutUp","wow fadeIn","wow fadeInDown","wow fadeInDownBig","wow fadeInLeft","wow fadeInLeftBig","wow fadeInRight","wow fadeInRightBig","wow fadeInUp","wow fadeInUpBig","wow fadeOut","wow fadeOutDown","wow fadeOutDownBig","wow fadeOutLeft","wow fadeOutLeftBig","wow fadeOutRight","wow fadeOutRightBig","wow fadeOutUp","wow fadeOutUpBig","wow flip","wow flipInX","wow flipInY","wow flipOutX","wow flipOutY");		
?>