<?php
$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb,photo,mota$lang as mota from #_product_danhmuc where type='sanpham' and noibat>0  and hienthi=1 order by stt asc,id desc";
$d->query($sql);
$danhmuc_nb=$d->result_array();
?>



<?php 
for($i=0;$i<count($danhmuc_nb);$i++) { 

$d->reset();
$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu,mota$lang as mota FROM #_product where id_danhmuc=".$danhmuc_nb[$i]['id']." and noibat>0 and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,8";        
$d->query($sql);
$product_nb = $d->result_array();  

?>

<div class="box_container">
  
	<div class="tieude_index">
	<span><?=$danhmuc_nb[$i]['ten']?></span>
	</div>

	<div style="clear:both"></div>
	        
	<div class="wap_item">              
	<?php foreach($product_nb as $k => $value){ ?>
		<div class="item" >

			<?php if($value['giacu']>0) { ?>
			<span class="phantram"><?=_phantramgiam($value['giacu'],$value['gia'])?></span>
			<?php } ?>

	        <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
	        <img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
	        </a>
	        
	        <h3 class="ten"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>" ><?=$value['ten']?></a></h3>
	        <p><?=catchuoi($value['mota'],50)?></p>
	        <div class="box_gia">
				<?php if($value['giacu'] > 0) { ?><p class="giacu"><?php echo number_format($value['giacu'],0, ',', '.');?> đ</p><?php } ?>
				<p class="sp_gia">
				<?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đ';else echo 'Liên hệ'; ?>
				</p>
	        </div>
			<a class="link_detail" href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>" >Chi tiết</a>

	    </div><!---END .item-->
	<?php } ?>
	</div><!---END #content_tabs-->

	

</div>



<?php } ?>

