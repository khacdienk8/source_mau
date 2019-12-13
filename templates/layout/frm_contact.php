



<div class="frm_lienhe_index">

    <form method="post" name="frm" class="frm" action="lien-he.html" enctype="multipart/form-data">
        <div class="loicapcha thongbao"></div>
        
        <input name="ten_lienhe" type="text" id="ten_lienhe" class="input_lh" placeholder="<?=_hovaten?> (*)" />
       
        
        <input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" class="input_lh" placeholder="<?=_dienthoai?> (*)" />
        
        <input name="email_lienhe" type="text" id="email_lienhe" class="input_lh"  placeholder="Email" />
        
        <textarea name="noidung_lienhe" id="noidung_lienhe" class="input_lh"  rows="3" placeholder="<?=_noidung?>"></textarea>
        
       
        <div class="clear"></div>

    	<div class="gg_capchar">
        <div class="g-recaptcha" data-sitekey="<?=$site_key?>"></div>
        </div>

        <input type="button" value="GỬI THÔNG TIN" class="btn_send_contact" />
        
       
    </form>
</div><!--.frm_lienhe--> 