<?php

$d->reset();
$sql="select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='doitac' order by stt,id desc";
$d->query($sql);
$doitac=$d->result_array();


?>


<div id="doitac" class="wow fadeInUp" data-wow-delay="500ms">
	
	<div class="box_container">
    <ul id="slick_doitac">
    
        <?php for($i=0,$count_congtrinh=count($doitac);$i<$count_congtrinh;$i++){ ?>
           <li class="item_doitac">
    <a href="<?=$doitac[$i]['link']?>" title="<?=$doitac[$i]['link']?>" target="_blank"><img src="thumb/200x120/2/<?=_upload_hinhanh_l.$doitac[$i]['photo']?>" alt="<?php if($doitac[$i]['ten']!='') echo $doitac[$i]['ten'];else echo $company['ten']?>" /></a>
          </li> 
         <?php } ?>
    </ul>
	</div>

</div>
