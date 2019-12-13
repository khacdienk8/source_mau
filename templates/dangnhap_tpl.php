
<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
   <div class="content">
   		<div class="dangnhap">      
                <div class="tieude_dangnhap"><?=_khachhangchuacotaikhoan?></div>
                <?=$tintuc_detail['noidung']?>
                <div class="item_lienhe">
                    <a href="dang-ky.html" class="btn_dangnhap"><?=_dangky?></a>
                </div>
                <div class="clear"></div>
        </div><!--.dangnhap-->
        
   		<div class="dangky">
        	<div class="dangky_frm">
        	<div class="tieude_dangky"><?=_thongtindangnhap?></div>
            <div class="frm_lienhe">    	
                <form method="post" name="frm" class="frm" action="ajax/user.php" enctype="multipart/form-data">
                	<input name="act" type="hidden" id="act" value="dangnhap" />
                    <div class="loicapcha thongbao"></div>
                    <div class="item_lienhe"><p><?=_tendangnhap?>:<span>*</span></p><input name="tendangnhap" type="text" id="tendangnhap" /></div>
                    
                    <div class="item_lienhe"><p><?=_matkhau?>:<span>*</span></p><input name="matkhau" type="password" id="matkhau" /></div>
                    
                   
                    <div class="item_lienhe"><p class="baove"><?=_mabaove?>:<span>*</span></p>
                    <img src="sources/captcha.php" id="hinh_captcha" style="float:left;">
                            <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><img src="images/refresh.png" alt="reset_capcha" /></a><input style="width:100px;" name="capcha" type="text" id="capcha" /></div>
    
                 
                    <div class="item_lienhe">
                        <input type="button" value="<?=_dangnhap?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                </form>
               
            </div><!--.frm_lienhe--> 
            </div><!--.dangky_frm--> 
        </div>  <!--.dangky-->               
   </div><!--.content--> 
</div><!--.box_container--> 