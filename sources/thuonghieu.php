<?php  if(!defined('_source')) die("Error");

	@$id_danhmuc =  trim(strip_tags(addslashes($_GET['id_danhmuc'])));
	
		
	if($id_danhmuc!='')
	{		
		$d->reset();
		$sql = "select id,ten$lang as ten,title,keywords,description FROM #_product_danhmuc where id='$id_danhmuc' or tenkhongdau='$id_danhmuc' and type='thuonghieu' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		if(empty($title_bar)){redirect("http://".$config_url.'/404.php');}
					
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
		
		$where = " type='".$type."' and id_thuonghieu=".$title_bar['id']." and hienthi=1 order by stt,id desc";
	}
	//Tất cả sản phẩm
	else
	{
		$where = " type='".$type."' and hienthi=1 order by stt,id desc";
	}
	
	#Lấy sản phẩm và phân trang
	$d->reset();
	$sql = "SELECT count(id) AS numrows FROM #_product where $where";
	$d->query($sql);	
	$dem = $d->fetch_array();
	
	$totalRows = $dem['numrows'];
	$page = $_GET['p'];
	if($id > 0)
	{
		$pageSize = $company['soluong_spk'];//Số item cho 1 trang
	}
	else
	{
		$pageSize = $company['soluong_sp'];//Số item cho 1 trang
	}
	
	
	$offset = 5;//Số trang hiển thị				
	if ($page == "")$page = 1;
	else $page = $_GET['p'];
	$page--;
	$bg = $pageSize*$page;		
	
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where $where limit $bg,$pageSize";		
	$d->query($sql);
	$product = $d->result_array();	
	$url_link = getCurrentPageURL();

?>