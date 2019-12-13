

<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
   <div class="content">
   		<div class="dangnhap">      
                <div class="tieude_dangnhap"><?=_khachhangdadangky?></div>
                <?=$tintuc_detail['noidung']?>
                <div class="item_lienhe">
                    <a href="dang-xuat.html" class="btn_dangnhap"><?=_dangxuat?></a>
                </div>
                <div class="clear"></div>
        </div><!--.dangnhap--> 
   		<div class="dangky">
        	<div class="dangky_frm">
        	<div class="tieude_dangky"><?=_thongtindangky?></div>
            <div class="frm_lienhe">       	
                <form method="post" name="frm" class="frm" action="ajax/user.php" enctype="multipart/form-data">
                	<input name="act" type="hidden" id="act" value="thaydoithongtin" />
                    <div class="loicapcha thongbao"></div>
                    <div class="item_lienhe"><p><?=_tendangnhap?>:<span>*</span></p><input name="tendangnhap" type="text" id="tendangnhap" readonly="readonly" value="<?=$info_user['username']?>" /></div>
                    <div class="item_lienhe"><p><?=_matkhaucu?>:<span>*</span></p><input name="matkhaucu" type="password" id="matkhaucu" placeholder="**********" /></div>
                    
                    <div class="item_lienhe"><p><?=_matkhaumoi?>:<span>*</span></p><input name="matkhau" type="password" id="matkhau" placeholder="**********" /></div>
                    
                    <div class="item_lienhe"><p><?=_nhaplaimatkhaumoi?>:<span>*</span></p><input name="nhaplaimatkhau" type="password" id="nhaplaimatkhau" placeholder="**********" /></div>
                    
                    <div class="item_lienhe"><p><?=_hovaten?>:<span>*</span></p><input name="ten_lienhe" type="text" id="ten_lienhe" value="<?=$info_user['ten']?>" /></div>

                    <div class="item_lienhe"><p><?=_dienthoai?>:<span>*</span></p>
                    <input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="<?=$info_user['dienthoai']?>" /></div>
                    
                    <div class="item_lienhe"><p>Email:<span>*</span></p><input name="email_lienhe" type="text" id="email_lienhe" value="<?=$info_user['email']?>" /></div>
                    
                    <div class="item_lienhe"><p><?=_diachi?>:</p><input name="diachi_lienhe" type="text" id="diachi_lienhe" value="<?=$info_user['diachi']?>" /></div>
                    
                    <div class="item_lienhe"><p><?=_gioitinh?>:</p>
                    <select name="gioitinh_lienhe" id="gioitinh_lienhe">
                    	<option value=""><?=_luachon?></option>
                        <option value="Nam" <?php if($info_user['gioitinh']=='Nam')echo 'selected="selected"'?>><?=_nam2?></option>
                        <option value="Nữ" <?php if($info_user['gioitinh']=='Nữ')echo 'selected="selected"'?>><?=_nu?></option>
                    </select>
                    </div>
                    <div class="item_lienhe"><p><?=_ngaysinh?>:</p><input name="ngaysinh_lienhe" type="text" id="ngaysinh_lienhe" class="date" readonly="readonly" value="<?=date('d/m/y',$info_user['ngaysinh'])?>" /></div>

					<div class="item_lienhe"><p>Điểm tích lũy mua hàng:</p><span><?=$info_user['score']?></span></div>

                    <div class="item_lienhe"><p class="baove"><?=_mabaove?>:<span>*</span></p>
                    <img src="sources/captcha.php" id="hinh_captcha" style="float:left;">
                            <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><img src="images/refresh.png" alt="reset_capcha" /></a><input style="width:100px;" name="capcha" type="text" id="capcha" /></div>
    
                 
                    <div class="item_lienhe">
                        <input type="button" value="<?=_capnhat?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                </form>
            </div><!--.frm_lienhe--> 
            </div><!--.dangky_frm--> 
        </div>  <!--.dangky-->              
   </div><!--.content--> 
</div><!--.box_container--> 