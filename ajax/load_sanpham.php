<?php 

include ("ajax_config.php");

include _template."layout/giohang_ajax.php";

$id_list =(int) $_GET['id_list'];

if($id_list > 0)
{
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where id_list=".$id_list." and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,10";		
	$d->query($sql);
	$product = $d->result_array();	

?>


<?php foreach($product as $k => $value){	?>
    <div class="item" >
        <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
        <img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
        </a>
        
        <h3 class="ten"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>" ><?=$value['ten']?></a></h3>
        <p class="sp_gia">
        	Giá: <span><?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đ';else echo 'Liên hệ'; ?></span>
        </p>
        <?php if($value['giacu'] > 0) { ?><p class="giacu"><?php echo number_format($value['giacu'],0, ',', '.');?></p><?php } ?>

    </div><!---END .item-->
<?php } ?>


<?php } ?>

