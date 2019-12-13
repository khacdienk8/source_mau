<?php

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider' and hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$slider=$d->result_array();


?>


<link rel="stylesheet" type="text/css" href="engine1/style.css" />



	
<div id="wowslider-container1" >
    <div class="ws_images">
    <ul>
    
    <?php  for($i=0;$i<count($slider);$i++){ ?>
    <li>
    <a target="_blank" href="<?=$slider[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" id="wows1_<?=$i+1?>" /></a>
    </li>
    <?php } ?>  
    
    </ul>

</div>
</div>



    
 