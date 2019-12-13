<?php
session_start();
$session=session_id();

@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './admin/lib/');

include_once _lib."Mobile_Detect.php";
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

$lang="";

require_once _source."lang$lang.php";	
include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."class.database.php";
include_once _lib."functions_user.php";
include_once _lib."functions_giohang.php";
include_once _lib."file_requick.php";
include_once _source."counter.php";	

if($type_web=='')
    $type_web = "website";

?>


<!doctype html>
<html lang="vi">

<head itemscope itemtype="http://schema.org/WebSite" >
    
<base href="http://<?=$config_url?>/" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0, user-scalable=yes">

<link rel="canonical" href="<?=getCurrentPageURL()?>" />
  
<?php include _template."layout/seoweb.php";?>
<?php include _template."layout/main_css.php";?> 

<?=$company['codethem']?>  
     
</head>

<?php //include _template."layout/background.php";?>

<body >
 
<div id="pre-loader"><div class="loader"></div></div>

<address class="vcard nodisplay">
    <span class="org"><?=$company['ten']?></span>,
    <span class="adr"></span>
    <span class="street-address"><?=$company['diachi']?></span>,
    <span class="locality">Ho Chi Minh</span>,
    <span class="postal-code">70000</span>,
    <span class="country-name">VN</span>.
    <span class="tel"><?=$company['dienthoai']?></span>
</address>

<div id="wapper">

    <div id="header" >
        <?php include _template."layout/header.php";?>
    </div><!---END #header-->

    <div class="wap_menu">
            <div class="menu">
            <?php include _template."layout/menu_top.php";?>
            </div><!---END .menu-->
        </div><!---END .wap_menu--> 
    
    <?php if($template=='index') { ?>
    <div id="slider">
        <?php include _template."layout/slider.php";?>
    </div><!---END #slider--> 
    <?php } ?>

    <div id="main_content">
        <?php include _template.$template."_tpl.php"; ?>
        
        <div class="clear"></div>
    </div><!---END #main_content-->  
	
	<?php if($template=='index') 
    {
       include _template."layout/slide_qc.php"; 
       include _template."layout/dmsp_index.php";
       include _template."layout/dichvu_index.php";
       include _template."layout/tintuc_index.php";
    }
    ?>

    
    <?php include _template."layout/footer.php";?>
    
</div><!---END #wapper-->


<?php include _template."layout/main_js.php";?>
<?php include _template."layout/giohang_ajax.php";?>
<?php include _template."layout/phone2.php";?>


<?php if($deviceType=='computer') { include _template."layout/chat_facebook.php"; } ?>


</body>
</html>
