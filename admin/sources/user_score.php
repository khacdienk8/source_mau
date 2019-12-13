<?php	if(!defined('_source')) die("Error");

	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	
	$urlcu = "";
	
	$urlcu .= (isset($_REQUEST['type'])) ? "&type=".addslashes($_REQUEST['type']) : "";
	$urlcu .= (isset($_REQUEST['p'])) ? "&p=".addslashes($_REQUEST['p']) : "";

switch($act){

	case "man":
		get_items();
		$template = "user_score/items";
		break;		
	case "add":				
		$template = "user_score/item_add";
		break;
	case "edit":		
		get_item();		
		$template = "user_score/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	
	default:
		$template = "index";
}

#====================================
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_items(){
	global $d, $items, $url_link,$totalRows , $pageSize, $offset,$paging,$urlcu;


	if($_REQUEST['key']!='')
	{
		$where.=" and ten like '%".$_REQUEST['key']."%'";
	}
	$where.= " order by id desc";

	$sql="SELECT count(id) AS numrows FROM #_user_score where id<>0 $where";
	$d->query($sql);	
	$dem=$d->fetch_array();
	$totalRows=$dem['numrows'];
	$page=$_GET['p'];
	
	$pageSize=20;
	$offset=10;
						
	if ($page=="")
		$page=1;
	else 
		$page=$_GET['p'];
	$page--;
	$bg=$pageSize*$page;		
	
	$sql = "select * from #_user_score where id<>0 $where limit $bg,$pageSize";		
	$d->query($sql);
	$items = $d->result_array();	
	$url_link="index.php?com=user_score&act=man".$urlcu;
}

function get_item(){
	global $d, $item,$urlcu;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=user_scoreact=man".$urlcu);
	
	$sql = "select * from #_user_score where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=user_score&act=man".$urlcu);
	$item = $d->fetch_array();
	
}


//Save sản phẩm
function save_item(){
	global $d,$config,$urlcu;
	$file_name=$_FILES['file']['name'];	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=user_score&act=man".$urlcu);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$id =  themdau($_POST['id']);
		if($photo = upload_image("file", _format_duoihinh, _upload_sanpham,$file_name)){
			//image_fix_orientation(_upload_sanpham.$photo);
			//saveImageWaterMark(_upload_sanpham.$data['photo']);
			$data['photo'] = $photo;	
			//dump($photo);
			$data['thumb'] = create_thumb($data['photo'], 275 , 240, _upload_sanpham,$file_name,2);									
			$d->setTable('user_score');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo']);	
				delete_file(_upload_sanpham.$row['thumb']);								
			}
		}

		$data['type'] = $_POST['type'];
		
		$data['tenkhongdau'] = changeTitle($_POST['ten']);				
		$data['gia'] = $_POST['gia'];
		$data['score'] = $_POST['score'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['stt'] = $_POST['stt'];

		$data['ngaysua'] = time();
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}		
		$d->setTable('user_score');
		$d->setWhere('id', $id);
		if($d->update($data))
		{
			
				
			redirect("index.php?com=user_score&act=man".$urlcu);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=user_score&act=man".$urlcu);
	}else{

		$data['type'] = $_POST['type'];
		
		$data['tenkhongdau'] = changeTitle($_POST['ten']);				
		$data['gia'] = $_POST['gia'];
		$data['score'] = $_POST['score'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['stt'] = $_POST['stt'];
	
		$data['ngaytao'] = time();
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['type'] = $_POST['type'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}
		$d->setTable('user_score');
		if($d->insert($data))
		{	 
			redirect("index.php?com=user_score&act=man".$urlcu);
		}
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=user_score&act=man".$urlcu);
	}
}


//===========================================================
function delete_item(){
	global $d,$urlcu;
	if($_REQUEST['id_cat']!='')
	{
		 $id_catt="&id_cat=".$_REQUEST['id_cat'];
	}
	if($_REQUEST['p']!='')
	{ 
	$id_catt.="&p=".$_REQUEST['p'];
	}
		
	if(isset($_GET['id']))
	{
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,thumb, photo from #_user_score where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);			
			}
		$sql = "delete from #_user_score where id='".$id."'";
		$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=user_score&act=man".$urlcu."");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=user_score&act=man".$urlcu);
	}elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
		$sql = "select id,thumb, photo from #_user_score where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);
			}
			$sql = "delete from #_user_score where id='".$id."'";
			$d->query($sql);
		}
		} 
		redirect("index.php?com=user_score&act=man".$urlcu);
		} 
		else 
		transfer("Không nhận được dữ liệu", "index.php?com=user_score&act=man".$urlcu);	

}

?>