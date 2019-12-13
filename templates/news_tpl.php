

<h1 class="tieude_giua"><span><?=$title_cat?></span></h1>
<div class="box_container">
<div class="wap_box_new">
 	<?php foreach($tintuc as $k => $value){ ?>
	        <div class="box_news">
	            <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
	            	<img class="img" src="<?php if($value['thumb']!=NULL)echo _upload_tintuc_l.$value['thumb'];else echo 'images/noimage.png';?>" alt="<?=$value['ten']?>" /></a>      
	            <h3 class="ten"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>"><?=$value['ten']?></a></h3>
	            <div class="mota"><?=catchuoi($value['mota'],220)?></div>  
	            <div class="clear"></div>         
	        </div><!---END .box_new--> 
	    <?php } ?>
</div><!---END .wap_box_new-->
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->