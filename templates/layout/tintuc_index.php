<?php


$d->reset();
$sql_tt = "select id,ten$lang as ten,tenkhongdau,thumb,photo,mota$lang as mota,ngaytao FROM #_news where type='tintuc' and noibat>0 and hienthi=1 order by stt asc limit 0,20";		
$d->query($sql_tt);
$tintuc_i = $d->result_array();


?>

 

<div id="tintuc_index">

	<div class="content_noidung">

        <div class="col_w33">
            <div class="title_tintuc"><span>TIN TỨC</span></div>
        

            <div id="slick_tintuc_i"  >

            <?php foreach($tintuc_i as $k => $value){  ?>

            <div class="box_news_index">
 
                <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
                    <img class="news_img" src="<?=_upload_tintuc_l.$value['thumb']?>" alt="<?=$value['ten']?>" /></a>

                <h3 class="ten">
                    <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>"><?=$value['ten']?></a>
                </h3>
                <div class="mota"><?=catchuoi($value['mota'],70)?></div>  
                
            </div><!---END .box_new-->
              
            <?php } ?> 

            </div>
        
        </div>
        <div class="col_w33">
            <div class="title_tintuc"><span>FANPAGE</span></div>
            <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-width="500px"  data-height="360px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['fanpage']?></a></blockquote></div>
            

        </div>

        <div class="col_w33">
            <div class="title_tintuc"><span>VIDEO</span></div>
            <div class="load_video">
                
            </div><!---END .box_new-->
            

        </div>

    
    <div class="clear"></div>
    </div>
    

</div>







