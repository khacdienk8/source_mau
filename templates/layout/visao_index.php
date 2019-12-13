
<?php 
$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,photo,thumb,noidung$lang as noidung from #_news where  type='visao' and hienthi=1 order by stt asc,id desc";
$d->query($sql);
$visao_i=$d->result_array();



?>

<div id="visao_index">

	<div class="box_container">

		<ul id="slick_visao">
		<?php foreach($visao_i as $k => $value){	?>

		<li class="item_visao">

			<a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>">
			    <img class="img" src="thumb/290x90/1/<?=_upload_tintuc_l.$value['photo']?>" alt="<?=$value['ten']?>" />                 
			</a>
				
		</li><!---END .box_new--> 

		<?php } ?>
		</ul>
		<div class="clear"></div>
	</div>

</div>


