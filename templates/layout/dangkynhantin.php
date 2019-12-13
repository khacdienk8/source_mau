<script type="text/javascript" language="javascript">
	function nhantin(){
		if(isEmpty($('#email_nhantin').val(), "<?=_nhapemailcuaban?>"))
			{
				$('#email_nhantin').focus();
				return false;
			}
			if(isEmail($('#email_nhantin').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_nhantin').focus();
				return false;
			}	
		document.frm_dknt.submit();
	}
</script>
<?php
	if(isset($_POST['email_nhantin']))
	{		


		$secretKey = $secret_key;

		$recaptcha = $_POST['g-recaptcha-response'];
		$ip = $_SERVER['REMOTE_ADDR'];  
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$recaptcha."&remoteip=".$ip);
		$responseKeys = json_decode($response,true);

		if(intval($responseKeys["success"]) !== 1) 
		{
			alert("Vui lòng check chọn CaptCha !!!");
		}
		else
		{
			$email_nhantin = mysql_real_escape_string($_POST['email_nhantin']);
			$ten_nhantin = mysql_real_escape_string($_POST['ten_nhantin']);
			$dienthoai_nhantin = mysql_real_escape_string($_POST['dienthoai_nhantin']);	
			$noidung_nhantin = mysql_real_escape_string($_POST['noidung_nhantin']);	

			$d->reset();
			$sql_kt_mail="SELECT email FROM table_newsletter WHERE email='".$email_nhantin."' and ten='".$ten_nhantin."' and dienthoai='".$dienthoai_nhantin."' and noidung='".$noidung_nhantin."'";
			$d->query($sql_kt_mail);
			$kt_mail=$d->result_array();
			if(count($kt_mail)>0)
				alert("_emaildadangky");
			else
			{
			
				$data['ten'] = $ten_nhantin;
				$data['email'] = $email_nhantin;
				$data['dienthoai'] = $dienthoai_nhantin;
				$data['noidung'] = $noidung_nhantin;
				
				$d->setTable('newsletter');
				
				if($d->insert($data))	
					alert("Thông tin của bạn đã được gửi!");
				else
					alert("Lỗi hệ thống...");
			}		
		}

		
	}
?>
<div id="div_dangkynhantin">

		<div class="title_dknt">
			<span>ĐĂNG KÝ NHẬN TIN</span><br>
		</div>

	    <div id="dknt">

	        <form name="frm_dknt" id="frm_dknt" method="post" action="" >
	        	<input class="txt_input" type="text" name="ten_nhantin" id="ten_nhantin" placeholder="Họ & Tên" />
				<input class="txt_input" type="text" name="email_nhantin" id="email_nhantin" placeholder="Email" />
				
				<div class="gg_capchar"><div class="g-recaptcha" data-sitekey="<?=$site_key?>"></div></div>

				<input type="button" name="submit_nhantin" id="submit_nhantin" onclick="nhantin()" value="ĐĂNG KÝ" />

		
	        </form>
	    </div>

	<div class="clear"></div>


</div>





