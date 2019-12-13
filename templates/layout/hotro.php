
<?php
$d->reset();
$sql_support="select * from #_yahoo where hienthi= 1 order by stt,id desc";
$d->query($sql_support);
$result_support=$d->result_array();

?>

<script language="javascript" type="text/javascript">
$(document).ready(function(){
	var	d=false;
	$("#footerSlideButton").click(function(){
		var h=$("#footerSlideText").outerHeight()+20;
		if(d===false){
			$("#footerSlideContent").animate({height:h});
			$(this).css("backgroundPosition","bottom left");
			d=true
		}else{
			$("#footerSlideContent").animate({height:"0px"});
			$(this).css("backgroundPosition","top left");
			d=false}
	});
}
)
</script>

<style type="text/css">
/**************************************/
#footerSlideContainer {
    bottom: 0;
    position: fixed;
    right: 0;
    width: 300px;
    z-index: 9999999999999;
}
#footerSlideButton {
    background: url(images/hotro.png) no-repeat left top;
    border: medium none;
    cursor: pointer;
    height: 51px;
    position: absolute;
    right: 0;
    top: -46px;
    width: 194px;
}
#footerSlideContent {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #EFEFEF;
    border-color: #006795 -moz-use-text-color -moz-use-text-color #006795;
    border-image: none;
    border-style: solid none none solid;
    border-width: 5px medium medium 5px;
    bottom: -5px;
    color: #CCCCCC;
    font-family: DejaVuSansBook,Sans-Serif;
    font-size: 0.8em;
    height: 0;
    position: relative;
    width: 100%;
}
#footerSlideContent h3 {
    color: #9AC941;
    font-size: 36px;
    margin: 10px 0;
}
#footerSlideContent ul {
    color: #EE8D40;
    line-height: 2em;
    list-style-type: none;
}
#footerSlideText {
    color: #065F92;
    font-size: 14px;
    text-shadow: 1px 1px #FFFFFF;
	width:100%;
	padding:10px;
	box-sizing:border-box;
	text-align:center;
}

#footerSlideText .div_hotro
{
	width:100%;display:inline-block;
	vertical-align:top;
	margin-bottom:10px;
}

#footerSlideText .img
{
	width:40px;
	height:40px;
}

#footerSlideText .note {
    color: red;
    left: 20px;
    position: relative;
}
#footerSlideText .line {
    background: url(images/line.gif) repeat-x center top;
    height: 2px;
    margin: 12px auto;
    width: 95%;
}
#footerSlideText .titles {
    color: #006795;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}

</style>

<div id="footerSlideContainer">
    <div id="footerSlideButton"></div>
    <div id="footerSlideContent">
        <div id="footerSlideText"><span class="titles">Tư vấn trực tuyến</span>
		
		<?php  for($i=0,$count_hotro=count($result_support);$i<$count_hotro;$i++){ ?>
        
        <div class="div_hotro">
        <p><?=$result_support[$i]['ten']?></p>
        <p><?=$result_support[$i]['dienthoai']?></p>
        <p><a href="mailto:<?=$result_support[$i]['email']?>"><?=$result_support[$i]['email']?></a></p>
        <a href="skype:<?=$result_support[$i]['skype']?>?chat"><img src="images/skype.png" class="img" /></a>
        
        </div>
        
        <?php } ?>
        
	<div class="line"></div>
</div>