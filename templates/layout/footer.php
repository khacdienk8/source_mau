<?php	

$d->reset();
$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
$d->query($sql_contact);
$company_contact = $d->fetch_array();

$d->reset();
$sql_banner = "select photo$lang as photo from #_background where type='logo_ft' limit 0,1";
$d->query($sql_banner);
$logo_ft = $d->fetch_array();


$d->reset();
$sql2="select ten$lang as ten,tenkhongdau,id from #_news where type='chinhsach' and hienthi=1 order by stt asc,id desc";
$d->query($sql2);
$chinhsach_ft=$d->result_array();


$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='icon_mxh' and hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$icon_mxh=$d->result_array();


?>

<div id="wap_footer" >


<div id="main_footer">
    
     <div class="col_w40">
        <?=$company_contact['noidung']?>

        <div class="icon_mxh_top">
        <?php  for($i=0;$i<count($icon_mxh);$i++){ ?>
        <a target="_blank" href="<?=$icon_mxh[$i]['link']?>">
            <img src="thumb/40x40/2/<?=_upload_hinhanh_l.$icon_mxh[$i]['photo']?>" alt="<?=$icon_mxh[$i]['ten']?>" />
        </a>
        <?php } ?>  
        </div>
 
    </div>


    <div class="col_w30">
        <div class="title_ft">CHÍNH SÁCH</div>
        <?php for($i=0;$i<count($chinhsach_ft);$i++) {?>  
        <a class="info_ft" href="<?=$chinhsach_ft[$i]['tenkhongdau']?>" ><?=$chinhsach_ft[$i]['ten']?></a>
        <?php } ?>
    </div>


    <div class="col_w30">
        <div class="title_ft">BẢN ĐỒ</div>
        
        <div class="map_ft"><?=$company['map']?></div>
        
    </div>

    <div class="clear"></div>


</div>



</div>
<div id="copy_right">
    <div class="box_container">

        Copyright © <?=$company['ten']?>

        <div class="clear"></div>
    </div>

</div>






<?php /*?>



<div class="link_lienket2">
    <a class="fb" title="facebook" href="<?=$company['facebook']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a class="gg" title="google+" href="<?=$company['google']?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a>
    <a class="tw" title="twitter" href="<?=$company['twitter']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="yt" title="youtube" href="<?=$company['youtube']?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
</div> 

<div class="thongke_ft">
            <p><span><img src="images/dangonl.png" alt="Online" />Online: <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></p>

            <p><span><img src="images/dangonl.png" alt="Hôm nay" />Hôm nay: <?=$homnay?></span></p>

            <p><span><img src="images/dangonl.png" alt="Tháng này" />Tháng này: <?=$trongthang?></span></p>

            <p><span><img src="images/tong.png" alt="<?=_tongtruycap?>" /><?=_tongtruycap?>: <?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></p>

        </div>

<div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-width="500px"  data-height="220px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['fanpage']?></a></blockquote></div>
        



<div class="col_w20">
        <div class="title_ft">THỐNG KÊ TRUY CẬP</div>

        <div class="thongke_ft">
            <p><span><img src="images/dangonl.png" alt="Online" />Online: <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></p>

            <p><span><img src="images/dangonl.png" alt="Hôm nay" />Hôm nay: <?=$homnay?></span></p>

            <p><span><img src="images/dangonl.png" alt="Tháng này" />Tháng này: <?=$trongthang?></span></p>

            <p><span><img src="images/tong.png" alt="<?=_tongtruycap?>" /><?=_tongtruycap?>: <?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></p>

        </div>

       
    </div>

<div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-width="500px"  data-height="330px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['fanpage']?></a></blockquote></div>





<?php */?>