

<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>


<!--Tags sản phẩm-->
<link href="css/tab.css" type="text/css" rel="stylesheet" />



<h1 class="tieude_giua"><span><?=$title_cat?></span></h1>

<div class="box_container">
    <div class="wap_pro">
    <div class="zoom_slick">    
        <div class="slick2">                
            <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>"><img class='cloudzoom' src="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo']; else echo 'images/noimage.gif';?>" /></a>
            
            <?php $count=count($hinhthem); if($count>0) {?>
            <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>" ><img src="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></a>	
            <?php }} ?>
        </div><!--.slick-->
        
     
        <?php $count=count($hinhthem); if($count>0) {?>
        <div class="slick">                
                <p><img src="<?=_upload_sanpham_l.$row_detail['thumb']?>" /></p>
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                <p><img src="<?=_upload_hinhthem_l.$hinhthem[$j]['thumb']?>" /></p>
                <?php } ?>
        </div><!--.slick-->
        <?php } ?>
        
    </div><!--.zoom_slick--> 
    
    <ul class="product_info">
        <?php if($row_detail['masp'] != '') { ?><li><b><?=_masanpham?>:</b> <?=$row_detail['masp']?></span></li><?php } ?>
        <?php if($row_detail['giacu'] > 0) { ?><li class="giacu"><?=_giacu?>: <?=number_format($row_detail['giacu'],0, ',', '.').' vnđ';?></li><?php } ?>
        <li class="gia"><?=_gia?>: <?php if($row_detail['gia'] > 0)echo number_format($row_detail['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></li>

        <?php if($row_detail['hethang'] == 1) { ?><li><span class="txt_hethang">(Hết hàng)</span><?php } ?>
            
        <?php if($row_detail['mota'] != '') { ?><li><?=$row_detail['mota']?></li><?php } ?>

        


        <li>
        <div class="addthis_native_toolbox">
            <div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

            <div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>

            <br />
            <script type="text/javascript" src="https://apis.google.com/js/plusone.js" async="async" defer="defer" ></script>
            <g:plusone></g:plusone>
        </div>
        </li>          
    </ul>
    <div class="clear"></div>  
    </div><!--.wap_pro-->
    
    
    <div class="wap_pro">
   
    <?=$row_detail['noidung']?>   
    
    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
    
    </div>
            
            <!---END #tabs-->	
    <div class="clear"></div>
</div><!--.box_containerlienhe-->

<?php if(count($product)>0) { ?>
<div class="tieude_giua"><span><?=$title_other?></span></div>
<div class="wap_item">

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


    </div><!---END .item-->
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->
<?php } ?>


<?php /* ?>
 <?php if(count($product_price)>0) { ?>
        <li class="loai"><b>Chọn loại bạn cần mua: </b> <br>
        <?php 
            foreach($product_price as $key=>$value)
            {
                echo '<span data-id="'.$value['id'].'" class="size">'.$value['size'].' giá '.number_format($value['price'],0, ',', '.').' vnđ</span><br>';
            }
        ?>
        </li>
        <?php } ?>

        <?php if($row_detail['hethang'] == 0) { ?>
        <li><b><?=_soluong?>:</b> <input type="number" value="1" class="soluong" /> </li>  
               
        <li><a class="dathang" data-id="<?=$row_detail['id']?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><?=_datmuasanpham?></a></li>
        <?php } ?>
<?php */ ?>