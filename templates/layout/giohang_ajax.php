
<!--Mua hàng-->
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.size').click(function(){
			$('.size').removeClass('active_size');
			$(this).addClass('active_size');
		});
		$('.mausac').click(function(){
			$('.mausac').removeClass('active_mausac');
			$(this).addClass('active_mausac');
		});
		
		$('.btn_addtocart').click(function(){
			
				var id_sp = $(this).attr('data-id');

			
				<?php if(count($product_price)>0) { ?>
					if($('.size').length && $('.active_size').length==false)
					{
						alert('Bạn chưa chọn SIZE');
						return false;
					}
					if($('.active_size').length)
					{

						var size = $('.active_size').attr('data-id');
					}
					else
					{
						var size = '';
					}
				<?php } else { ?> 
					var size = ''; 
				<?php } ?>

				if($('.mausac').length && $('.active_mausac').length==false)
				{
					alert('Bạn chưa chọn MÀU');
					return false;
				}
				if($('.active_mausac').length)
				{
					var mausac = $('.active_mausac').html();
				}
				else
				{
					var mausac = '';
				}
				
				
					var act = "dathang";
					var id = id_sp;
					
					var soluong = $('.soluong').val();
					
					
					if(soluong>0)
					{
						$.ajax({
							type:'post',
							url:'ajax/cart.php',
							dataType:'json',
							data:{id:id,size:size,mausac:mausac,soluong:soluong,act:act},
							beforeSend: function() {
								$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
							},
							error: function(){
								add_popup('<?=_hethongloi?>');
							},
							success:function(kq){
								add_popup(kq.thongbao);
								$('.sp_cart_top span').html(kq.sl);
								console.log(kq);
							}
						});
					}
					else
					{
						alert('<?=_nhapsoluong?>');
					}
			return false;
		});
	});
</script>
<!--Mua hàng-->