<?php  if(!defined('_source')) die("Error");

$d->reset();
$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu,mota$lang as mota FROM #_product where noibat>0 and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,30";        
$d->query($sql);
$product_noibat = $d->result_array();  


?>