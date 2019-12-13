<input type="hidden" value="1" class="soluong" />


<h1 class="vcard fn" style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h1>
<h2 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['diachi'];?></h2>
<h3 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['email'];?></h3>


<div class="tieude_index">
<span>SẢN PHẨM NỔI BẬT</span>
</div>

<div id="slick_noibat" class="wap_item">              
<?php foreach($product_noibat as $k => $value){ ?>
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

