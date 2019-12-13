
<?php 

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where type='slide2' and hienthi=1  order by stt,id desc";
$d->query($sql_slider);
$slide2=$d->result_array();

?>




<div id="slick_slide_index" >

<?php for($i=0;$i<count($slide2);$i++){ ?>
<a href="<?=$slide2[$i]['url']?>">
<img src="<?=_upload_hinhanh_l.$slide2[$i]['photo']?>" alt="<?=$slide2[$i]['ten']?>" />
</a>
<?php } ?>    

</div>