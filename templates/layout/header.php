<?php

$d->reset();
$sql_banner = "select photo from #_background where type='logo' limit 0,1";
$d->query($sql_banner);
$row_logo = $d->fetch_array();

$d->reset();
$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
$d->query($sql_banner);
$row_banner = $d->fetch_array();


?>

<a href="gio-hang.html">
    <div class="sp_cart_top">
        <span><?=count($_SESSION['cart'])?></span>
    </div>
</a>

<div class="top_header">

    <div class="content">

        <p class="diachi"><?=$company['diachi']?></p>

        <p class="email"><?=$company['email']?></p>
        
        <div class="link_lienket">
        <a class="fb" title="facebook" href="<?=$company['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="gg" title="google+" href="<?=$company['google']?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
        <a class="tw" title="twitter" href="<?=$company['twitter']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a class="yt" title="youtube" href="<?=$company['youtube']?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div> 
        <div class="clear"></div>
    </div>
</div>

<div class="content_bn">

    <a href="index.html"><img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
    <a href="index.html"><img class="banner" src="<?=_upload_hinhanh_l.$row_banner['photo']?>" /></a>



    <div class="hotline_top">
        HOTLINE:<br>
        <span><?=$company['dienthoai']?></span><br>
        <span><?=$company['dienthoai2']?></span>
    </div>
    
    
    

    <div class="clear"></div>
</div>
<div class="clear"></div>





<?php /*?>

<div class="search">
<input type="text" name="keyword" id="keyword" placeholder="Nhập từ khóa..." value="<?=@$tukhoa?>" onkeyup="doEnter(event);"  >
<p class="btn_search" aria-hidden="true" 
title="<?=_search?>" onclick="onSearch(event,'keyword');" ></p>
</div>




<div class="link_lienket">
<a class="fb" title="facebook" href="<?=$company['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a class="gg" title="google+" href="<?=$company['google']?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
<a class="tw" title="twitter" href="<?=$company['twitter']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a class="yt" title="youtube" href="<?=$company['youtube']?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
</div>  

<div class="icon_mxh_top">
        <?php  for($i=0;$i<count($icon_mxh);$i++){ ?>
        <a target="_blank" href="<?=$icon_mxh[$i]['link']?>">
            <img src="thumb/30x30/2/<?=_upload_hinhanh_l.$icon_mxh[$i]['photo']?>" alt="<?=$icon_mxh[$i]['ten']?>" />
        </a>
        <?php } ?>  
    </div>

<div class="hotline_top">
        <span><?=$company['dienthoai']?></span>
    </div>







<div class="diachi_top">
	Địa chỉ:<br />
	<span><?=$company['diachi']?></span>
    
    </div><?php */?>

<?php /*?> <?php */?>


<?php /*?>

<div class="col_h">
        
        	
        

        
        </div>

<?php */?>




<?php /*?><ul class="menu_login">
<?php if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false)){?>
    <li><a href="dang-ky.html"><?=_dangky?></a></li>
    <li><a href="dang-nhap.html"><?=_dangnhap?></a></li>
    <li><a style="border:none;" href="quen-mat-khau.html"><?=_quenmatkhau?></a></li>
<?php } else { ?>
	<li><a>Xin chào <span style="color:#FFFF00;">(
	<?php $info_user=info_user($_SESSION['login']['id']);echo $info_user['username']?>)</span></a></li>
    <li><a href="dang-xuat.html"><?=_dangxuat?></a></li>
    <li><a style="border:none;" href="thay-doi-thong-tin.html"><?=_thaydoithongtin?></a></li>
<?php } ?>
</ul>
<?php */?>
