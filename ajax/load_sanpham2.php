<?php 

include ("ajax_config.php");

include _template."layout/giohang_ajax.php";

$typesp =  $_GET['typesp'];

if($typesp=='ban-chay')
{
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where spbanchay>0 and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,10";		
	$d->query($sql);
	$product = $d->result_array();	
}
else if($typesp=='order')
{
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where tieubieu>0 and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,10";		
	$d->query($sql);
	$product = $d->result_array();	
}
else if($typesp=='khuyen-mai')
{
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where giacu>0 and giacu>gia and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,10";		
	$d->query($sql);
	$product = $d->result_array();	
}


?>


<div id="slick_sp_noibat">
<?php foreach($product as $k => $value){	?>
    <div class="item" >
    <a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>">
    <img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
    </a>
    
    <h3 class="ten"><a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>" ><?=$value['ten']?></a></h3>
    <p class="sp_gia">
    	<span><?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đ';else echo 'Liên hệ'; ?></span>
		<?php if($value['giacu'] > 0) { ?><span class="giacu"><?php echo number_format($value['giacu'],0, ',', '.');?></span><?php } ?>
    </p>
	<a class="dathang" data-id="<?=$value['id']?>" >
		<span class="ico"></span>
	Mua ngay</a>

    </div><!---END .item-->
<?php } ?>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_sp_noibat').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 5,
				  }
				},
				{
				  breakpoint:920,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint:720,
				  settings: {
					slidesToShow: 3,
				  }
				},
				{
				  breakpoint:320,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>

