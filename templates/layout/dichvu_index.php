<?php


$d->reset();
$sql_tt = "select id,ten$lang as ten,tenkhongdau,thumb,photo,mota$lang as mota,ngaytao FROM #_news where type='dichvu' and noibat>0 and hienthi=1 order by stt asc";		
$d->query($sql_tt);
$dichvu_index = $d->result_array();


?>



<div id="dichvu_index">

<div class="box_container">

    <div id="slick_dichvu">
    <?php foreach($dichvu_index as $k => $value){	?>
		<div>
	    <div class="item_dichvu_i">

            <div class="img">
                <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
                    <img class="img" src="thumb/600x550/1/<?=_upload_tintuc_l.$value['photo']?>" alt="<?=$value['ten']?>" />                 
                </a>
            </div>
            <div class="info">
                <p class="ten">
                    <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>"><?=$value['ten']?></a>
                </p>
                <div><?=nl2br($value['mota'])?></div>

                <a class="link-xemthem2" href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">Xem thêm</a>
            </div>
    			
	    </div><!---END .box_new--> 

        </div>

    <?php } ?>
    </div>

</div>

</div>


