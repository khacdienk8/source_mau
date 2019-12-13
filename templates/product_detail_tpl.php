

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
        <?php if($row_detail['nhasanxuat'] != '') { ?><li><b>Xuất xứ:</b> <?=$row_detail['nhasanxuat']?></span></li><?php } ?>

        <?php if($row_detail['giacu'] > 0) { ?><li class="giacu"><?=_giacu?>: <?=number_format($row_detail['giacu'],0, ',', '.').' vnđ';?></li><?php } ?>
        <li class="gia"><?=_gia?>: <?php if($row_detail['gia'] > 0)echo number_format($row_detail['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></li>

    
        <?php if($row_detail['mota'] != '') { ?><li><?=$row_detail['mota']?></li><?php } ?>

        <?php if(count($product_price)>0) { ?>
        <li class="loai">
            <p>Size:</p>
        <?php 
            foreach($product_price as $key=>$value)
            {
                echo '<span data-id="'.$value['id'].'" class="size">'.$value['size'].'</span>';
            }
        ?>
        </li>
        <?php } ?>

        <?php if($row_detail['mausac'] != '') { ?>
        <li class="loai"><p>Màu sắc:</p> 
        <?php $arr_mausac = explode(',',$row_detail['mausac']);
            foreach($arr_mausac as $key=>$value)
            {
              echo '<span class="mausac" style="background:'.$value.'">'.$value.'</span>';
            }
        ?>
        <div class="clear"></div>
        </li>
        <?php } ?>

        <li><b><?=_soluong?>:</b> <input type="number" value="1" class="soluong" /> </li>  
           
        <li><a class="dathang btn_addtocart" data-id="<?=$row_detail['id']?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><?=_datmuasanpham?></a></li>

        <li>
        <div class="addthis_native_toolbox">
            <div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

            <div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
        </li>          
    </ul>
    <div class="clear"></div>  
    </div><!--.wap_pro-->
    
    
    <div class="wap_pro">
   
    <?=$row_detail['noidung']?>   
    
    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
    
    </div>


    <?php if(count($tags_sp)>0) { ?>
    <div class="tag_keywords">

            <p class="title_box_tags">TAGS:</p>
            <div class="box_tags">
                <?php foreach($tags_sp as $k=>$tags_sp_item) { 

                if($k>0) echo "|";
                ?>
                <a href="tags/<?=changeTitle($tags_sp_item['ten'])?>/<?=$tags_sp_item['id']?>" title="<?=$tags_sp_item['ten']?>"><?=$tags_sp_item['ten']?></a>
                <?php } ?>
            </div>

        <div class="clear"></div>
    </div>
    <?php } ?>
            
            <!---END #tabs-->   
    <div class="clear"></div>
</div><!--.box_containerlienhe-->

<?php if(count($product)>0) { ?>
<div class="tieude_giua"><span><?=$title_other?></span></div>
<div class="wap_item">

    <?php foreach($product as $k => $value){    ?>
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
<?php } ?>


<?php /* ?>


<li><b><?=_soluong?>:</b> <input type="number" value="1" class="soluong" /> </li>  

<li><a class="dathang btn_addtocart" data-id="<?=$row_detail['id']?>" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><?=_datmuasanpham?></a></li>


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