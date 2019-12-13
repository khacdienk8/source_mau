<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="<?=_upload_hinhanh_l.$company['faviconthumb']?>" type="image/x-icon" />
<META NAME="ROBOTS" CONTENT="<?=$meta_robots?>" />
<meta name="author" content="<?=$company['ten']?>" />
<meta name="copyright" content="<?=$company['ten']?> [<?=$company['email']?>]" />
<!--Meta seo web-->
<title><?php if($title!='')echo $title;else echo $company['title'];?></title>
<meta name="keywords" content="<?php if($keywords!='')echo $keywords;else echo $company['keywords'];?>" />
<meta name="description" content="<?php if($description!='')echo $description;else echo $company['description'];?>" />
<!--Meta seo web-->
<!--Meta Geo-->
<meta name="DC.title" content="<?php if($title!='')echo $title;else echo $company['title'];?>" />
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="<?=$company['diachi']?>" />
<meta name="geo.position" content="<?=str_replace(',',':',$company['toado'])?>" />
<meta name="ICBM" content="<?=$company['toado']?>" />
<meta name="DC.identifier" content="http://<?=$config_url?>/" />
<!--Meta Geo-->
<!--Meta Ngôn ngữ-->
<meta name="language" content="Việt Nam">
<meta http-equiv="content-language" content="vi" />
<meta content="VN" name="geo.region" />
<meta name="DC.language" scheme="utf-8" content="vi" />
<meta property="og:locale" content="vi_VN" />
<!--Meta Ngôn ngữ-->
<!--Meta facebook-->
<meta property="og:image" content="<?=$images_facebook?>" />
<meta property="og:title" content="<?=$title_facebook?>" />
<meta property="og:url" content="<?=$url_facebook?>" />
<meta property="og:site_name" content="http://<?=$config_url?>/" />
<meta property="og:description" content="<?=$description_facebook?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?=$company['ten']?>" /> 
<!--Meta facebook-->


     
