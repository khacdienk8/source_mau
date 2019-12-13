<script type="text/javascript">
	$(document).ready(function(e) {
		$('#ok').click(function(){
			$('#load').css({display: "block"});
		});    
    });
</script>
<?php
if(isset($_POST['ok'])){
	
$file_type=$_FILES['linkfile']['type'];


if($file_type=="application/vnd.ms-excel" || $file_type=="application/x-ms-excel" || $file_type=="application/octet-stream")
{			
		$filename=$_FILES["linkfile"]["name"];
		
		move_uploaded_file($_FILES["linkfile"]["tmp_name"],$filename);
			
		
//include the following 2 files
require 'PHPExcel.php';
require_once 'PHPExcel/IOFactory.php';

$objPHPExcel = PHPExcel_IOFactory::load($filename);

	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
	$worksheetTitle = $worksheet->getTitle();
	$highestRow = $worksheet->getHighestRow(); // e.g. 10
	$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
	
	$nrColumns = ord($highestColumn) - 64;
	
	
	for ($row = 4; $row <= $highestRow; ++ $row) {
		
		
		$cell = $worksheet->getCellByColumnAndRow(0, $row);
		$id = $cell->getValue();	
		
		$cell = $worksheet->getCellByColumnAndRow(1, $row);
		$masp = $cell->getValue();
		
		$cell = $worksheet->getCellByColumnAndRow(2, $row);
		$ten = $cell->getValue();
		
		$cell = $worksheet->getCellByColumnAndRow(3, $row);
		$xuatxu = $cell->getValue();
		
		$cell = $worksheet->getCellByColumnAndRow(4, $row);
		$gia = $cell->getValue();

		$cell = $worksheet->getCellByColumnAndRow(5, $row);
		$quycach = $cell->getValue();
	
		//die($id.'-'.$masp.'-'.$ten.'-'.$xuatxu.'-'.$quycach);
	
			
		if($id>0)
		{
			$sql_capnhat = "UPDATE #_product SET ten='$ten',masp='$masp',nhasanxuat='$xuatxu',gia='$gia' , quycach='$quycach' , title='$ten'  WHERE id ='".$id."'";
			$d->query($sql_capnhat);
		}
		else
		{
			$sql_add = "INSERT INTO table_product (ten, masp, nhasanxuat, gia , quycach , title,type)
VALUES ('$ten', '$masp', '$xuatxu', '$gia','$quycach' , '$ten','sanpham');";
			$d->query($sql_add);
		}
		
		}
		
	}
	echo "<b class='thongbao_inport'>Import thành công!</b>";
	unlink($filename) or DIE("couldn't delete $dir$file<br />");
}else
		{
	?>
	<script type="text/javascript">
		alert("Không hỗ trợ kiểu file này");
	</script>
	<?php
	}
}
?>



<form name="form1" id="from1" action="" method="post" enctype="multipart/form-data" class="form" >

	<div class="widget">

    <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
    <h6>IMPORT DANH SÁCH SẢN PHẨM TỪ FILE EXCEL</h6>
    </div>
    	
    <div class="formRow">
        <label>File:</label>
        <div class="formRight">
        <input type="file" name="linkfile"  size="25" maxlength="255"  /> 
        </div>
        <div class="clear"></div>

        <div class="formRight">
        <br />
        (Định dạng theo file mẫu khi xuất danh sách sản phẩm từ website)
        <br /><br />
        <span style="color:#F00;">*** Chú ý khi nhập file: Dùng file mẫu khi EXPORT, những thay đổi trên FILE khi upload sẽ được cập nhật trên cơ sở dữ liệu website, vui lòng chú ý kiểm tra kĩ</span>
        <br />
        <img id="load" src="images/loader.gif" style="display:none" />
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="formRow">

        <div class="formRight">
        <input type="submit" name="ok" id="ok" value="Upload" class="blueB"  value="Hoàn tất" onclick="return confirm('Xác nhận cập nhật File')" />

        </div>
        <div class="clear"></div>
    </div>
    

    </div>
</form>
