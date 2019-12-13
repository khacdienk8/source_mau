<div class="logo"><a href="index.php"><img src="images/logo.png" /></a></div>
<div class="sidebarSep mt0"></div>

<!-- Left navigation -->
<ul id="menu" class="nav">
<li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>



<li class="categories_li <?php if($_GET['com']=='product' && $_GET['type']=='sanpham') echo ' activemenu' ?>" id="menu_"><a href="" title="" class="exp"><span>SẢN PHẨM</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Danh mục cấp 1','product','man_danhmuc','sanpham'); ?>
        <?php phanquyen_menu('Danh mục cấp 2','product','man_list','sanpham'); ?>
        <?php phanquyen_menu('SẢN PHẨM','product','man','sanpham'); ?>
        <?php phanquyen_menu('Quản lý đơn hàng','order','man',''); ?>
    </ul>
</li>



<li class="categories_li <?php if($_GET['com']=='news' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>BÀI VIẾT</span><strong></strong></a>
    <ul class="sub">
        <?php //phanquyen_menu('Quản lý danh mục 1','news','man_danhmuc','tintuc'); ?>
        <?php //phanquyen_menu('Quản lý danh mục 2','news','man_list','tintuc'); ?>
        <?php phanquyen_menu('DỊCH VỤ','news','man','dichvu'); ?>
        <?php phanquyen_menu('BẢNG GIÁ SỈ','news','man','banggiasi'); ?>

        <?php phanquyen_menu('TIN TỨC','news','man','tintuc'); ?> 
        <?php phanquyen_menu('HƯỚNG DẪN ĐẶT HÀNG','news','man','huongdan'); ?>
        <?php phanquyen_menu('THANH TOÁN & GIAO NHẬN','news','man','thanhtoan'); ?>
        
        <?php phanquyen_menu('CHÍNH SÁCH (footer)','news','man','chinhsach'); ?>
        <?php phanquyen_menu('VIDEO','video','man','video'); ?>

  
    </ul>
</li>

  
<li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='lkweb' ) echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>BÀI VIẾT CHI TIẾT</span><strong></strong></a>
    <ul class="sub">
    	
        <?php phanquyen_menu('Cập nhật giới thiệu','about','capnhat','about'); ?>
        <?php phanquyen_menu('Cập nhật liên hệ','about','capnhat','lienhe'); ?>
        <?php phanquyen_menu('Nội dung footer','about','capnhat','footer'); ?>

        <?php //phanquyen_menu('Tags / Liên kết','lkweb','man','tags'); ?>
        
    </ul>
</li>
   

      
<?php /*?>

   
<li class="categories_li <?php if($_GET['com']=='newsletter' || $_GET['com']=='lkweb' || $_GET['com']=='yahoo') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" class="exp"><span>Marketing Online</span><strong></strong></a>
        <ul class="sub">
            <?php //phanquyen_menu('Quản lý liên kết web','lkweb','man','lkweb'); ?>
            <?php //phanquyen_menu('Hotline banner','yahoo','man','yahoo'); ?>
            <?php phanquyen_menu('Quản lý Đăng ký nhận tin','newsletter','man',''); ?>      
        </ul>
</li>


<li class="categories_li <?php if($_GET['com']=='product' && $_GET['type']=='sanpham') echo ' activemenu' ?>" id="menu_"><a href="" title="" class="exp"><span>XUẤT / NHẬP EXCEL</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('XUẤT DANH SÁCH','export','man',''); ?>
        <?php phanquyen_menu('NHẬP DANH SÁCH','import','capnhat',''); ?>
    </ul>
</li>

<li class="categories_li <?php if($_GET['com']=='database' || $_GET['com']=='backup') echo ' activemenu' ?>" id="menu_ntt"><a href="" title="" class="exp"><span>Database</span><strong></strong></a>
      	<ul class="sub">
        	<?php phanquyen_menu('Quản lý database','database','man',''); ?>
            <?php phanquyen_menu('Backup database','backup','backup_database',''); ?>
            <?php phanquyen_menu('Backup file','backup','backup_file',''); ?>    	
        </ul>
</li><?php */?>
   
   
<li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Hình ảnh</span><strong></strong></a>
     <ul class="sub">
		<?php //phanquyen_menu('Cập nhật background top','anhnen','capnhat','background'); ?>
        <?php phanquyen_menu('Cập nhật LOGO','background','capnhat','logo'); ?>
        <?php phanquyen_menu('Cập nhật BANNER','background','capnhat','banner'); ?>
        <?php //phanquyen_menu('Hình đóng dấu','background','capnhat','watermark'); ?>
        
        <?php phanquyen_menu('Hình slide chính','slider','man_photo','slider'); ?>
        <?php phanquyen_menu('Hình slide quảng cáo','slider','man_photo','slide2'); ?>

        <?php phanquyen_menu('ICON mạng xã hội','slider','man_photo','icon_mxh'); ?>
        <?php //phanquyen_menu('Đối Tác','slider','man_photo','doitac'); ?>
    
     </ul>
</li>
     

<?php /*?><li class="categories_li <?php if($_GET['com']=='place') echo ' activemenu' ?>" id="menu_pl"><a href="" title="" class="exp"><span>Địa điểm</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Quản lý Tỉnh thành','place','man_city',''); ?>
        <?php phanquyen_menu('Quản lý Quận huyện','place','man_dist',''); ?>
        <?php phanquyen_menu('Quản lý Phường xã','place','man_ward',''); ?>
        <?php phanquyen_menu('Quản lý Đường','place','man_street',''); ?>
    </ul>
</li>
<li class="categories_li setting_li <?php if($_GET['com']=='user' && $_GET['type']=='user') echo ' activemenu' ?>" ><a href="" title="" class="exp"><span>TÀI KHOẢN THÀNH VIÊN</span><strong></strong></a>
    <ul class="sub">
        <?php phanquyen_menu('Mức điểm tích lũy','user_score','man',''); ?>
        <?php phanquyen_menu('Quản lý tài khoản thành viên','user','man','user'); ?>
    </ul>
</li>

<li class="categories_li setting_li <?php if($_GET['com']=='about' ) echo ' activemenu' ?>" ><a href="" title="" class="exp"><span>GHI CHÚ ĐĂNG KÝ/ĐĂNG NHẬP</span><strong></strong></a>
    <ul class="sub">
            <?php phanquyen_menu('Ghi chú đăng ký','about','capnhat','dangky'); ?>
            <?php phanquyen_menu('Ghi chú đăng nhập','about','capnhat','dangnhap'); ?>
            <?php phanquyen_menu('Ghi chú  quên mật khẩu','about','capnhat','quenmatkhau'); ?>
            <?php phanquyen_menu('Ghi chú thay đổi thông tin','about','capnhat','thaydoithongtin'); ?>
    </ul>
</li>

<?php */?>

  
<li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<?php phanquyen_menu('Cấu hình thông tin Website','company','capnhat',''); ?>
         <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
</li>

</ul>
