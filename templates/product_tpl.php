<input type="hidden" value="1" class="soluong"  />


<h1 class="tieude_giua"><span><?=$title_cat?></span></h1>

<div class="wap_item">
	
	<?php foreach($product as $k => $value){	?>
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
    
	<div class="clear"></div>
	<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->
