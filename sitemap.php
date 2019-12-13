<?php 
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	

	$lang="";
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
		
	
	
header("Content-Type: application/xml; charset=utf-8"); 
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; 
 
	function urlElement($url, $pri) {
		echo '<url>'; 
		echo '<loc>'.$url.'</loc>'; 
		echo '<changefreq>weekly</changefreq>'; 
		echo '<priority>'.$pri.'</priority>';
		echo '</url>';
	} 
	function CreateXML1($tbl='',$type='',$uutien=1){
		global $d,$config_url;
		if($tbl=='') return false;
		
		$d->reset();
		$sql = "SELECT id,tenkhongdau,ngaytao FROM table_$tbl where hienthi=1 and type='".$type."' order by stt,ngaytao desc";
		$d->query($sql);
		$link_seo = $d->result_array();
		foreach ($link_seo as $key => $v) { 
			urlElement('http://'.$config_url.'/'.$v['tenkhongdau']."/",$uutien);
		}
		return;	
	}
	function CreateXML2($tbl='',$type='',$uutien=1){
		global $d,$config_url;
		if($tbl=='') return false;
		
		$d->reset();
		$sql = "SELECT id,tenkhongdau,ngaytao FROM table_$tbl where hienthi=1 and type='".$type."' order by stt,ngaytao desc";
		$d->query($sql);
		$link_seo = $d->result_array();
		foreach ($link_seo as $key => $v) { 
			urlElement('http://'.$config_url.'/'.$v['tenkhongdau'],$uutien);
		}
		return;	
	}

	urlElement('http://'.$config_url.'','1.0'); 
	urlElement('http://'.$config_url.'/gioi-thieu.html','1.0');  
	urlElement('http://'.$config_url.'/san-pham.html','1.0'); 
	urlElement('http://'.$config_url.'/tin-tuc.html','1.0'); 
	urlElement('http://'.$config_url.'/cong-trinh.html','1.0'); 
	urlElement('http://'.$config_url.'/lien-he.html','1.0');
	
	CreateXML1("product_danhmuc","sanpham",'0.8');
	CreateXML1("product_list","sanpham",'0.8');
	CreateXML1("product_cat","sanpham",'0.8');

	CreateXML2("product","sanpham",'1');


	CreateXML2("news","tintuc",'1');
	CreateXML2("news","album",'1');
	CreateXML2("news","dichvu",'1');


echo '</urlset>'; 
?>
