<?php

$d->reset();
$sql_hotro = "select ten$lang as ten,dienthoai,email,yahoo,skype from #_yahoo where hienthi=1 and type='yahoo' order by stt,id desc";
$d->query($sql_hotro);
$hotro = $d->result_array();


$d->reset();
$sql_tt = "select id,ten$lang as ten,tenkhongdau,thumb,photo,mota$lang as mota,ngaytao FROM #_news where type='album' and hienthi=1 order by stt asc";      
$d->query($sql_tt);
$album_left = $d->result_array();


$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt asc,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();
	
?>

<div id="danhmuc_left">

<div class="tieude">DANH MỤC SẢN PHẨM</div>


<ul class="list_news_r">

    <?php for($i=0;$i<count($p_danhmuc);$i++) { ?>

    <li class="dmc1"><a href="<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a>
        <?php   
        $d->reset();
        $sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
        $d->query($sql_dvquan);
        $list_dmsp=$d->result_array();  
                                                
        ?>
        <ul>    
        <?php for($j=0; $j < count($list_dmsp); $j++){ 

        ?>
        <li><a href="<?=$list_dmsp[$j]['tenkhongdau']?>/"><?=$list_dmsp[$j]['ten']?></a>
            
        </li>
        <?php } ?>
        </ul>
              

    </li>

    <?php } ?>

</ul>


</div><!---END #danhmuc-->





<?php /*?>


<div  id="danhmuc_left">
<div class="tieude"><?=_hotrotructuyen?></div>
    <center>
    <img src="images/hinh-hotro.jpg" alt="Hỗ trợ trực tuyến: <?=$company['dienthoai']?>" />
    </center>
    
    <div class="phone_left">Hotline:<br /><span><?=$company['dienthoai']?></span></div>
    
    <?php for($i = 0, $count_hotro = count($hotro); $i < $count_hotro; $i++){ ?>
    <ul class="hotro_left">
        <li>
        <a href="skype:<?=$hotro[$i]['skype']?>?chat"><img src="images/skype.png" alt="<?=$hotro[$i]['ten']?>" /></a>
        <a href="https://zalo.me//<?=$hotro[$i]['yahoo']?>"><img src="images/zalo.png" alt="<?=$hotro[$i]['ten']?>" /></a><span><?=$hotro[$i]['ten']?></span></li>
        
        <li class="dienthoai"><i class="fa fa-phone" aria-hidden="true"></i> <?=$hotro[$i]['dienthoai']?></li>
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <?=$hotro[$i]['email']?></li>
    </ul>
    <?php } ?>
</div><!---END #danhmuc-->


<div id="slick_quangcao_l">
<?php for($i=0;$i<count($album_left);$i++){   ?>
<a href="album/<?=$album_left[$i]['tenkhongdau']?>.html">
<img class="img" src="thumb/265x395/2/<?=_upload_tintuc_l.$album_left[$i]['photo']?>" alt="<?=$album_left[$i]['ten']?>" /></a>
<?php } ?>
</div>







<div id="video" class="danhmuc">
<div class="tieude">VIDEO CLIP</div>
	<div class="load_video">
	<script type="text/javascript">
		$(document).ready(function(e) {
			$(window).scroll(function(){
				if(!$('.load_video').hasClass('load_video2'))
				{
					$('.load_video').addClass('load_video2');
					$('.load_video').load( "ajax/video.php");
				}
			 });
        });
	</script>
    </div><!---END .load_video-->
</div><!---END #video-->





<div id="tinmoi" class="danhmuc control_slick_doc">
<div class="tieude"><?=_tintucnoibat?></div>
	<ul>
    	<?php for($i = 0, $count_tinmoi = count($tinmoi); $i < $count_tinmoi; $i++){ ?>
    		<li>
            	<a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$tinmoi[$i]['thumb']?>" alt="<?=$tinmoi[$i]['ten']?>" /></a>
                <h4><a href="tin-tuc/<?=$tinmoi[$i]['tenkhongdau']?>-<?=$tinmoi[$i]['id']?>.html"><?=$tinmoi[$i]['ten']?></a></h4>
                <div class="clear"></div>
            </li>
        <?php } ?>
    </ul>
</div>


<div id="quangcao" class="danhmuc">
<div class="tieude"><?=_quangcao?></div>
    <div id="ctsdiv" style="text-align:center; position:relative; height:350px; overflow:hidden">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="ctstbl" style="position:relative; margin:0px">  
         <?php for($i=0,$count_quangcao=count($quangcao);$i<$count_quangcao;$i++){	?>
             <tr>
                 <td valign="top">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                       <tr>
                           <td valign="top">     	  
                          		<a href="<?=$quangcao[$i]['link']?>"><img src="<?php if($quangcao[$i]['photo']!=NULL) echo _upload_hinhanh_l.$quangcao[$i]['photo']; else echo 'images/noimage.gif';?>" alt="<?php if($quangcao[$i]['ten']!='') echo $quangcao[$i]['ten'];else echo $company['ten']?>" /></a></td>
                      </tr>
                   </table>
                </td>      
            </tr>  
        <?php } ?>    
        </table>
     </div>
<script type="text/javascript">createScroller("myScroller", "ctsdiv", "ctstbl",0,70,2,0,1);</script> 
</div><!---END #danhmuc-->


<div id="lkweb" class="danhmuc">
<div class="tieude"><?=_lienketweb?></div>
	<select onchange="window.open(this.value,'_Blank');" style="width:90%; height:27px; line-height:27px; border:1px solid #BBB; border-radius:3px; margin:10px 5%;">
        <option value="">Liên kết Website</option>
        <?php for($i=0,$count_lkweb=count($lkweb);$i<$count_lkweb;$i++) { ?>
             <option value="<?=$lkweb[$i]['link'];?>"><?=$lkweb[$i]['ten'];?></option>
        <?php } ?>
    </select> 
</div><!---END #danhmuc-->



<style type="text/css">



div#tinmoi
{	
}
div#tinmoi ul
{
	list-style:none;
	padding:0 10px;
}
div#tinmoi ul li
{
	border-bottom:1px dashed #DDDDDD;
	padding:10px 0;
}
div#tinmoi ul li a img
{
	width:35%;
	max-width:150px !important;
	border:1px solid #d6d6d6;
	float:left;
	margin-right:10px;
}
div#tinmoi ul li a img:hover
{
	transition:1s;
	border:1px solid red;
}
div#tinmoi ul li h4 a
{
	text-decoration:none;
	color:#111111;
	font-size:12px;
	transition:0.4s;
	font-weight:normal;
}
div#tinmoi ul li h4 a:hover
{
	color:red;
	transition:0.4s;
}
div.load_video
{
	width:95%;
	margin:7px auto;
}
div#hotro
{
	background: url(images/bg_hotro.png) left 40px no-repeat;
}
div#hotro .phone
{
	color: #f10b0b;
    font-size: 24px;
    font-weight: bold;
    padding-top: 62px;
    padding-left: 90px;
    padding-bottom: 10px;
    margin-right: 20px;
    font-style: italic;
}
div#hotro ul
{
	list-style: none;
    border-bottom: 1px dashed #DDDDDD;
    padding: 7px;
    margin: 0px 10px;
    font-size: 13px;
}
div#hotro ul li
{
	clear: both;
    padding: 6px 0;
    color: #555555;
}
div#hotro ul li i
{
	font-size:17px;
	margin-right:8px;
	clear:both;
}
div#hotro ul li span
{
	color: #3853a4;
    font-weight: normal;
    font-size: 14px;
    margin-top: 3px;
    float: left;
}
div#hotro ul li a img
{
	 margin-right: 5px;
    float: left;
}

div#quangcao a img
{
	width:90%;
	max-width:300px !important;	
	border:1px solid #DDD;
	margin:5px auto;
	padding:4px;
	box-sizing:border-box;
}
div#quangcao a img:hover
{
	border:1px solid red;	
}


</style><?php */?>