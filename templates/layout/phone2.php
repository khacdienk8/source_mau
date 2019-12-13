<?php if($deviceType!='computer') { ?>

<div class="widget-mobile">


        <div class="wcircle-menu-item">
            <a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
                <img src="images/icon-phone-new.gif" alt="Call Us"></a>
        </div>
        <div class="wcircle-menu-item">
            <a href="sms:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><i class="fa fa-comments"></i></a>
        </div>
        <div class="wcircle-menu-item" >
            <a target="_blank" href="lien-he.html"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
        </div>
        <div class="wcircle-menu-item" >
            <a target="_blank" href="<?=$company['fanpage']?>"><img src="images/icon-messenger.png" alt="messenger"></a>
        </div>
        <div class="wcircle-menu-item">
            <a target="_blank" href="https://zalo.me/<?=$company['zalo']?>"><img src="images/zalo.png" alt="Zalo"></a>
        </div>


</div>

<style>

div.widget-mobile { position: fixed;width: 100%;bottom: 0px;background:#0D0C00;height: 45px;
display: flex;flex-wrap: wrap;z-index: 999999; }
.wcircle-menu-item {width: 20%;text-align: center;font-size: 30px;color: #FFF;
padding:0px 3px;border-right: solid 1px #292929;}
.wcircle-menu-item a {color: #FFF;}
.wcircle-menu-item img {height:35px;display: inline-block;vertical-align: top;margin-top:5px;}


</style>



<?php } ?>