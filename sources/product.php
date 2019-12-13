<?php  if(!defined('_source')) die("Error");

	//@$id_danhmuc =  trim(strip_tags(addslashes($_GET['id_danhmuc'])));
	//@$id_list =   trim(strip_tags(addslashes($_GET['id_list'])));
	@$id_cat =   trim(strip_tags(addslashes($_GET['id_cat'])));
	@$id_item =   trim(strip_tags(addslashes($_GET['id_item'])));
	
	@$id =   trim(strip_tags(addslashes($_GET['id'])));	


		
	//Tag sản phẩm
	if($com=='tags')
	{
		$d->reset();
		$sql = "select id_pro from #_protag where id_tag='".$id_cat."'";
		$d->query($sql);
		$tag_detail = $d->result_array();	
		
		$d->reset();
		$sql = "select ten from #_tags where id='".$id_cat."'";
		$d->query($sql);
		$name_tag = $d->fetch_array();

		$title_cat = $name_tag['ten'];	
		$title_bar = $name_tag['ten'];
		
		$where = " type='".$type."' and id IN (select id_pro from #_protag where id_tag='".$id_cat."') order by stt asc,ngaytao desc";
	}
	//Chi tiết sản phẩm
	else if($id!='')
	{

		//Cập nhật lượt xem
		$d->reset();
		$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1 WHERE tenkhongdau ='$id'";
		$d->query($sql_lanxem);
		
		//Chi tiết sản phẩm
		$d->reset();
		$sql_detail = "select id,ten$lang as ten,mota$lang as mota,noidung$lang as noidung,masp,gia,giacu,luotxem,thumb,photo,size,mausac,id_danhmuc,id_list,id_cat,title,keywords,description,hethang FROM #_product where  tenkhongdau='$id' and hienthi=1 limit 0,1";
		$d->query($sql_detail);
		$row_detail = $d->fetch_array();
		if(empty($row_detail)){redirect("http://".$config_url.'/404.php');}	
		
		$title_cat = $row_detail['ten'];
		$title = $row_detail['title'];	
		$keywords = $row_detail['keywords'];
		$description = $row_detail['description'];

		$link_danhmuc = get_link_cat($row_detail['id_danhmuc'],"product_danhmuc");
		
		#Thông tin share facebook
		$images_facebook = 'http://'.$config_url.'/'._upload_sanpham_l.$row_detail['photo'];
		$title_facebook = $row_detail['ten'];
		$description_facebook = trim(strip_tags($row_detail['mota']));
		$url_facebook = getCurrentPageURL();
		
		//Hình ảnh khác của sản phẩm
		$d->reset();
		$sql_hinhthem = "select id,ten$lang as ten,thumb,photo FROM #_hinhanh where id_hinhanh='".$row_detail['id']."' and type='".$type."' and hienthi=1 order by stt,id desc";
		$d->query($sql_hinhthem);
		$hinhthem = $d->result_array();

		//loại & giá
		$d->reset();
		$sql_price = "select * FROM #_product_price where id_pro='".$row_detail['id']."'  order by id asc";
		$d->query($sql_price);
		$product_price = $d->result_array();
		
		//Tag sản phẩm
		$d->reset();
	    $sql_tags = "select id,ten FROM #_tags where  id IN (select id_tag FROM #_protag where id_pro=".$row_detail['id'].") and type='".$type."' order by id desc";
	    $d->query($sql_tags);
	    $tags_sp = $d->result_array();

		//Sản phẩm cùng loại
		$where = " type='".$type."' and id_danhmuc='".$row_detail['id_danhmuc']."' and id<>'".$row_detail['id']."' and hienthi=1 order by stt,id desc";	
	}
	//Danh mục sản phẩm cấp 4
	elseif($id_item!='')
	{
		$d->reset();
		$sql = "select id,ten$lang as ten,title,keywords,description FROM #_product_item where id='$id_item' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		if(empty($title_bar)){redirect("http://".$config_url.'/404.php');}
		
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
	
		$where = " type='".$type."' and id_item='$id_item' and hienthi=1 order by stt,id desc";
	}
	//Danh mục sản phẩm cấp 3
	elseif($id_cat!='')
	{
		$d->reset();
		$sql = "select id,ten$lang as ten,title,keywords,description FROM #_product_cat where id='$id_cat' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		if(empty($title_bar)){redirect("http://".$config_url.'/404.php');}
		
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
	
		$where = " type='".$type."' and id_cat='$id_cat' and hienthi=1 order by stt,id desc";
	}
	//Danh mục sản phẩm cấp 2
	elseif($id_list!='')
	{
		$d->reset();
		$sql = "select id,ten$lang as ten,title,keywords,description FROM #_product_list where tenkhongdau='$id_list' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		if(empty($title_bar)){redirect("http://".$config_url.'/404.php');}
		
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
	
		$where = " type='".$type."' and id_list='".$title_bar['id']."' and hienthi=1 order by stt,id desc";
	}
	
	//Danh mục sản phẩm cấp 1
	else if($id_danhmuc!='')
	{		
		$d->reset();
		$sql = "select id,ten$lang as ten,title,keywords,description FROM #_product_danhmuc where  tenkhongdau='$id_danhmuc' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		if(empty($title_bar)){redirect("http://".$config_url.'/404.php');}
					
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
		
		$where = " type='".$type."' and id_danhmuc=".$title_bar['id']." and hienthi=1 order by stt,id desc";
	}
	//Tất cả sản phẩm
	else
	{
		$where = " type='".$type."' and hienthi=1 order by stt asc,id desc";
	}

	if($com=='san-pham-moi')
	{
		$where = " type='".$type."' and spmoi>0 and hienthi=1 order by stt asc,id desc";
		$com = "san-pham";
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
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu,mota$lang as mota FROM #_product where $where limit $bg,$pageSize";		
	$d->query($sql);
	$product = $d->result_array();	
	$url_link = getCurrentPageURL();



	
?>