<?php 
#gioi_thieu
$sql = "select ten$lang as ten,mota$lang as mota,title,keywords,description,photo from #_about where type='about' and hienthi=1 limit 0,1";
$d->query($sql);
$about_index = $d->fetch_array();
?>


<div id="gioithieu_index" >


<div class="content_noidung wow fadeInDown" data-wow-delay="300ms">
    

    <div class="col_w50">
        <div class="img_about">
            <img src="<?=_upload_hinhanh_l.$about_index['photo']?>" alt="<?=$about_index['title']?>" />
        </div>
    
    </div>
    
    <div class="col_w50">

        <div class="content_gioithieu">
            
            <div class="title_gioithieu1">WELCOME TO</div>
            <div class="title_gioithieu"><?=$about_index['ten']?></div>
        
            <?=$about_index['mota']?>
            
            <br />
            <a href="gioi-thieu.html" class="link-xemthem2"><?=_xemthem?></a>
            
            <div class="clear"></div>
            <?php  include _template."layout/uytin_index.php"; ?>

        </div>

    </div>
    

    <div class="clear"></div>

</div>
</div>