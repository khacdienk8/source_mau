

<?php if($com=='thay-doi-thong-tin') { ?>
<link href="css/datepicker.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='js/jquery.ui.datepicker.js'></script>
<script type='text/javascript' src='js/jquery-ui.custom.js'></script>
<script language="javascript">	
  $(function() {
	$( ".date" ).datepicker({
		dateFormat: "dd/mm/yy",
		changeMonth: true,
		changeYear: true,
		dayNamesMin: [ "T2", "T3", "T4", "T5", "T6", "T7", "CN" ],
		monthNamesShort: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
		yearRange: "1900:now"
	});
  });
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('#matkhau').blur(function(){
			if(isSpace($('#matkhau').val(), "<?=_matkhaukhongduocchuakhoangtrang?>"))
			{
				$('#matkhau').focus();
				return false;
			}
			if(isCharacterlimit($('#matkhau').val(), "<?=_matkhautu6den30kitu?>",6,30))
			{
				$('#matkhau').focus();
				return false;
			}
		});
		$('#nhaplaimatkhau').blur(function(){
			if(isRepassword($('#matkhau').val(),$('#nhaplaimatkhau').val(), "<?=_matkhaunhaplaikhongdung?>"))
			{
				$('#nhaplaimatkhau').val('');
				$('#nhaplaimatkhau').focus();
				return false;
			}
		});
		$('.click_ajax').click(function(){
			if(isEmpty($('#tendangnhap').val(), "<?=_nhaptendangnhap?>"))
			{
				$('#tendangnhap').focus();
				return false;
			}
			if($('#matkhaucu').val()!='')
			{
				$('#matkhaucu').blur(function(){
					if(isSpace($('#matkhaucu').val(), "<?=_matkhaucukhongduocchuakhoangtrang?>"))
					{
						$('#matkhaucu').focus();
						return false;
					}
					if(isCharacterlimit($('#matkhaucu').val(), "<?=_matkhaucutu6den30kitu?>",6,30))
					{
						$('#matkhaucu').focus();
						return false;
					}
				});
				if(isEmpty($('#matkhau').val(), "<?=_nhapmatkhaumoi?>"))
				{
					$('#matkhau').focus();
					return false;
				}
				if(isEmpty($('#nhaplaimatkhau').val(), "<?=_nhapnhaplaimatkhaumoi?>"))
				{
					$('#nhaplaimatkhau').focus();
					return false;
				}
			}
			
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
			if(isPhone($('#dienthoai_lienhe').val(), "<?=_sodienthoaikhongdung?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isEmpty($('#email_lienhe').val(), "<?=_nhapemail?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
			{
				$('#capcha').focus();
				return false;
			}
			$.ajax({
				type:'post',
				url:$(".frm").attr('action'),
				data:$(".frm").serialize(),
				dataType:'json',
				beforeSend: function() {
					$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
				},
				error: function(){
					add_popup('<?=_hethongloi?>');
				},
				success:function(kq){
					add_popup(kq.thongbao);
					$('#capcha').val('');
					if(kq.nhaplai=='nhaplai')
					{
						$(".frm")[0].reset();
					}
					if(kq.chuyentrang=='chuyentrang')
					{
						setTimeout(function(){location.href="index.html"},2000);
					}
				}
			});
		});    
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#reset_capcha").click(function() {
			$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
			return false;
		});
	});
</script>
<?php } ?>


<?php if($com=='dang-nhap') { ?>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.click_ajax').click(function(){
			if(isEmpty($('#tendangnhap').val(), "<?=_nhaptendangnhap?>"))
			{
				$('#tendangnhap').focus();
				return false;
			}
			if(isEmpty($('#matkhau').val(), "<?=_nhapmatkhau?>"))
			{
				$('#matkhau').focus();
				return false;
			}
			if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
			{
				$('#capcha').focus();
				return false;
			}
			$.ajax({
				type:'post',
				url:$(".frm").attr('action'),
				data:$(".frm").serialize(),
				dataType:'json',
				beforeSend: function() {
					$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
				},
				error: function(){
					add_popup('<?=_hethongloi?>');
					$(".frm")[0].reset();
				},
				success:function(kq){

					alert(kq.thongbao);

					location.href="thay-doi-thong-tin.html";


					
				}
			});
		});    
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#reset_capcha").click(function() {
			$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
			return false;
		});
	});
</script>

<?php } ?>

<?php if($com=='dang-ky') { ?>
<link href="css/datepicker.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='js/jquery.ui.datepicker.js'></script>
<script type='text/javascript' src='js/jquery-ui.custom.js'></script>
<script language="javascript">	
  $(function() {
	$( ".date" ).datepicker({
		dateFormat: "dd/mm/yy",
		changeMonth: true,
		changeYear: true,
		dayNamesMin: [ "T2", "T3", "T4", "T5", "T6", "T7", "CN" ],
		monthNamesShort: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
		yearRange: "1900:now"
	});
  });
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('#tendangnhap').blur(function(){
			if(isSpace($('#tendangnhap').val(), "<?=_tendangnhapkhongduocchuakhoangtrang?>"))
			{
				$('#tendangnhap').focus();
				return false;
			}
			if(isCharacters($('#tendangnhap').val(), "<?=_tendangnhapkhongduocchuakitudatbiethoactiengvietcodau?>"))
			{
				$('#tendangnhap').focus();
				return false;
			}
			if(isCharacterlimit($('#tendangnhap').val(), "<?=_tendangnhaptu6den30kitu?>",6,30))
			{
				$('#tendangnhap').focus();
				return false;
			}
			
		});
		$('#matkhau').blur(function(){
			if(isSpace($('#matkhau').val(), "<?=_matkhaukhongduocchuakhoangtrang?>"))
			{
				$('#matkhau').focus();
				return false;
			}
			if(isCharacterlimit($('#matkhau').val(), "<?=_matkhautu6den30kitu?>",6,30))
			{
				$('#matkhau').focus();
				return false;
			}
		});
		$('#nhaplaimatkhau').blur(function(){
			if(isRepassword($('#matkhau').val(),$('#nhaplaimatkhau').val(), "<?=_matkhaunhaplaikhongdung?>"))
			{
				$('#nhaplaimatkhau').val('');
				$('#nhaplaimatkhau').focus();
				return false;
			}
		});
		$('.click_ajax').click(function(){
			if(isEmpty($('#tendangnhap').val(), "<?=_nhaptendangnhap?>"))
			{
				$('#tendangnhap').focus();
				return false;
			}
			if(isEmpty($('#matkhau').val(), "<?=_nhapmatkhau?>"))
			{
				$('#matkhau').focus();
				return false;
			}
			if(isEmpty($('#nhaplaimatkhau').val(), "<?=_nhapnhaplaimatkhau?>"))
			{
				$('#nhaplaimatkhau').focus();
				return false;
			}
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
			if(isPhone($('#dienthoai_lienhe').val(), "<?=_sodienthoaikhongdung?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isEmpty($('#email_lienhe').val(), "<?=_nhapemail?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
			{
				$('#capcha').focus();
				return false;
			}
			$.ajax({
				type:'post',
				url:$(".frm").attr('action'),
				data:$(".frm").serialize(),
				dataType:'json',
				beforeSend: function() {
					$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
				},
				error: function(){
					add_popup('<?=_hethongloi?>');
				},
				success:function(kq){
					add_popup(kq.thongbao);
					$('#capcha').val('');
					if(kq.nhaplai=='tontai')
					{
						$('#tendangnhap').focus();
					}
					if(kq.nhaplai=='nhaplai')
					{
						$(".frm")[0].reset();
					}
				}
			});
		});    
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#reset_capcha").click(function() {
			$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
			return false;
		});
	});
</script>

<?php } ?>


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

