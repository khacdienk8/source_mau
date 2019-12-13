<?php
include ("../ajax/ajax_config.php");	
include_once "class_paging_ajax.php";

Include _template."layout/giohang_ajax.php";

if(isset($_POST["page"]))
{
	$paging = new paging_ajax();
	
	$paging->class_pagination = "pagination";
	$paging->class_active = "active";
	$paging->class_inactive = "inactive";
	$paging->class_go_button = "go_button";
	$paging->class_text_total = "total";
	$paging->class_txt_goto = "txt_go_button";
	$paging->per_page = 8; 	
	$paging->page = $_POST["page"];
	$paging->text_sql = "select id,ten,tenkhongdau,photo,thumb,giacu,gia,masp,mota from table_product where hienthi=1 and id_danhmuc=".$_POST["id_danhmuc"]." and type='sanpham' order by stt asc";
	$product = $paging->GetResult();
	$message = '';
	$paging->data = "".$message."";
} 
?>

<?php foreach($product as $k => $value) { ?>
<div class="item" >
    <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
    <img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
    </a>
    
    <h3 class="ten"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>" ><?=$value['ten']?></a></h3>
</div><!---END .item-->
<?php } ?>

<?=$paging->Load(); ?>