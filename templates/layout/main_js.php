



<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/my_script.js"></script>
<link href="fontawesome/css/font-awesome.css" type="text/css" rel="stylesheet" />


<!--Menu mobile-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {

		$m = $('nav#menu').html();
		$('nav#menu_mobi').append($m);
		
		$('.hien_menu').click(function(){
			$('nav#menu_mobi').css({height: "auto"});
		});
		$('.user .fa-user-plus').toggle(function(){
			$('.user ul').slideDown(300);
		},function(){
			$('.user ul').slideUp(300);
		});
		
		$('nav#menu_mobi').mmenu({
				extensions	: [ 'effect-slide-menu', 'pageshadow' ],
				searchfield	: true,
				counters	: true,
				navbar 		: {
					title		: 'Menu'
				},
				navbars		: [
					{
						position	: 'top',
						content		: [ 'searchfield' ]
					}, {
						position	: 'top',
						content		: [
							'prev',
							'title',
							'close'
						]
					}, {
						position	: 'bottom',
						content		: [
							'<a>Online : <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></a>',
							'<a><?=_tong?> : <?php $count=count_online();echo $tong_xem=$count['daxem'];?></a>'
						]
					}
				]
			});
	});
</script>
<!--Menu mobile-->


<!--Hover menu-->
<script language="javascript" type="text/javascript">
	$(document).ready(function() { 
		//Hover vào menu xổ xuống
		$(".menu ul li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
			},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"});
			}); 
		$(".menu ul li").hover(function(){
				$(this).find('>a').addClass('active2'); 
			},function(){ 
				$(this).find('>a').removeClass('active2'); 
		}); 
		
	});  
</script>
<!--Hover menu-->


<script type="text/javascript" src="js/slick.min.js"></script>


<!--Thêm alt cho hình ảnh-->
<script type="text/javascript">
	$(document).ready(function(e) {
        $('img').each(function(index, element) {
			if(!$(this).attr('alt') || $(this).attr('alt')=='')
			{
				$(this).attr('alt','<?=$company['ten']?>');
			}
        });
    });
</script>
<!--Thêm alt cho hình ảnh-->

<!--Tim kiem-->
<script type="text/javascript"> 
    function doEnter(evt){
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) {			
	
			var keyword = document.getElementById("keyword").value;
			if(keyword=='' || keyword=='<?=_nhaptukhoatimkiem?>...')
			{
				alert('<?=_chuanhaptukhoa?>');
			}
			else{
				location.href = "tim-kiem.html&keyword="+keyword;
				loadPage(document.location);			
			}
		}		
</script>   
<!--Tim kiem-->

<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_tintuc_i').slick({
        	infinite: true,//Lặp lại
			vertical:true,//Chay dọc
			accessibility:true,
			slidesToShow: 3,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:4000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			
      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_noibat <?php for($i=0;$i<count($danhmuc_nb);$i++) echo " , #slick_spnb".$i; ?>').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint:920,
				  settings: {
					slidesToShow: 3,
				  }
				},
				{
				  breakpoint:720,
				  settings: {
					slidesToShow: 2,
				  }
				},
				{
				  breakpoint:320,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_slide_index , #slick_dichvu').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
			slidesToShow: 1,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:4000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,

      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
      $('#slick_doitac').slick({
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
			responsive: [
				{
				  breakpoint:1200,
				  settings: {
					slidesToShow: 6,
				  }
				},
				{
				  breakpoint:1020,
				  settings: {
					slidesToShow:4,
				  }
				},
				{
				  breakpoint:820,
				  settings: {
					slidesToShow:3,
				  }
				},
				{
				  breakpoint:320,
				  settings: {
					slidesToShow: 2,
				  }
				}
			  ]
      });
    });
</script>


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





<?php if($template=='index') { ?>
<script  type="text/javascript" src="engine1/wowslider.js"></script>
<script  type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<?php } ?>

<?php if($template=='news_detail') { ?>
<script src="js/fotorama.js" type="text/javascript" async="async"></script>
<?php } ?>


<?php if($template=='product_detail') { ?>
<!-- slick -->
<script type="text/javascript">
    $(document).ready(function(){
		$('.slick2').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  autoplay:false,  //Tự động chạy
			  autoplaySpeed:5000,  //Tốc độ chạy
			  asNavFor: '.slick'			 
		});
		$('.slick').slick({
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  asNavFor: '.slick2',
			  dots: false,
			  centerMode: false,
			  focusOnSelect: true
		});
		 return false;
    });
</script>
<!-- slick -->

<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
	var mzOptions = {
		zoomMode:true,
		onExpandClose: function(){MagicZoom.refresh();}
	};
</script>


<?php } ?>




<script type="text/javascript">
	$(document).ready(function(e) {
		$('.btn_send_contact').click(function(){
			
			if(isEmpty($('#ten_lienhe').val(), "<?=_nhaphoten?>"))
			{
				$('#ten_lienhe').focus();
				return false;
			}
			
			if(isEmpty($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isPhone($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			
			if(isEmpty($('#noidung_lienhe').val(), "<?=_nhapnoidung?>"))
			{
				$('#noidung_lienhe').focus();
				return false;
			}
			
			frm.submit();
		});    
    });
</script>



<script type="text/javascript">
	$(document).ready(function(e) {
        $('a.btn_xem_video , a.xem_video').click(function(){
			var link_viveo = $(this).attr('href');

			$('#view_video').append('<div class="login-popup"><div class="close-popup">x</div><div class="video_popup"><iframe width="100%" height="400px" src="https://www.youtube.com/embed/'+link_viveo+'?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>');
			$('.login-popup').fadeIn(300);
						
			var chieucao = $('.login-popup').height() / 2;
			var chieurong = $('.login-popup').width() /2;
			$('.login-popup').css({'margin-top':-chieucao,'margin-left':-chieurong});
			$('#view_video').append('<div id="baophu"></div>');
			$('#baophu').fadeIn(300);
			return false;
			
		});
		$('#baophu, .close-popup').click(function(){
			$('#baophu, .login-popup').fadeOut(300, function(){
				$('#baophu').remove();
				$('.login-popup').remove();
			});		
			
		});

    });
</script>








<?php if($com=='gio-hang') { ?>
<script type="text/javascript">
	function del(pid,size,mausac){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.size.value=size;
			document.form1.mausac.value=mausac;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
	function quaylai()
	{
		history.go(-1);
	}
	
	function doEnter_update(evt){
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			update_cart(evt);
		}
	}
</script>


<script type="text/javascript">
	$(document).ready(function(e) {
		
		$('.click_ajax2').click(function(){
			if(isEmpty($('#httt').val(), "<?=_chonhinhthucthanhtoan?>"))
			{
				$('#httt').focus();
				return false;
			}
			if(isEmpty($('#hoten').val(), "<?=_nhaphoten?>"))
			{
				$('#hoten').focus();
				return false;
			}
			if(isEmpty($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai').focus();
				return false;
			}
			if(isPhone($('#dienthoai').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai').focus();
				return false;
			}

			if(isEmpty($('#diachi').val(), "<?=_nhapdiachi?>"))
			{
				$('#diachi').focus();
				return false;
			}
			
			if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmpty($('#noidung').val(), "<?=_nhapnoidung?>"))
			{
				$('#noidung').focus();
				return false;
			}
			frm_order.submit();
		});    
    });
</script>

<?php } ?>





<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			var cach_top = $(window).scrollTop();
			var heaigt_header = $('#header').height();

			if(cach_top >= heaigt_header){
				$('div.wap_menu').css({position: 'fixed', top: '0px', zIndex:9999});
				
			}else{
				$('div.wap_menu').css({position: 'relative' , zIndex:99});
				
			}
		});
	});
 </script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php if($lang=='en')echo 'en_EN';else echo 'vi_VN' ?>/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Meta facebook-->   

<script src="https://sp.zalo.me/plugins/sdk.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>


<?php /*?>


<!--lockfixed
<script type="text/javascript" src="js/jquery.lockfixed.min.js"></script>
<script type="text/javascript">
	$(window).load(function(e) {
		(function($) {
				var left_h=$('#left').height();
				var main_h=$('#main').height();
				if(main_h>left_h) 
				{
					$.lockfixed("#scroll-left",{offset: {top: 10, bottom: 400}});
				}
		})(jQuery);
	});
</script>
<!--lockfixed-->

