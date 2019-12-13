<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){	
	case "man":		
		$template = "export/item_add";
		break;
	case "save":
		save();
		break;
	default:
		$template = "index";
}
#====================================
function save(){
	global $d;	
	
	$id_cat = $_POST['my-select'];
	if($id_cat!=''){
		$array_idcat=implode(",",$id_cat);	
		$dk_idcat = "where id IN ($array_idcat)";
	}
	
	// Bat dau export excel
	/** PHPExcel */
include 'PHPExcel.php';
/** PHPExcel_Writer_Excel */
include 'PHPExcel/Writer/Excel5.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");


// Add some data
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->setActiveSheetIndex( 0 )->mergeCells( 'A1:H1' );

$objPHPExcel->getActiveSheet()->getRowDimension( '1' )->setRowHeight( 42 );
$objPHPExcel->getActiveSheet()->getStyle( 'A1' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ff8602' ),'name' => 'Tahoma', 'bold' => true, 'italic' => false, 'size' => 18 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );

// Add some data
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->setActiveSheetIndex( 0 )->mergeCells( 'A2:H2' );
$objPHPExcel->getActiveSheet()->getRowDimension( '2' )->setRowHeight( 32 );
$objPHPExcel->getActiveSheet()->getStyle( 'A2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '000000' ),'name' => 'Tahoma', 'bold' => true, 'italic' => false, 'size' => 13 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );

$objPHPExcel->getActiveSheet()->getColumnDimension( 'A' )->setWidth( 10 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'B' )->setWidth( 20 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'C' )->setWidth( 45 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'D' )->setWidth( 20 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'E' )->setWidth( 20 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'F' )->setWidth( 25 );


$objPHPExcel->getActiveSheet()->getRowDimension(3)->setRowHeight(25);
   
$objPHPExcel->setActiveSheetIndex( 0 )->setCellValue( 'A1', 'DANH SÁCH SẢN PHẨM '.date('d/m/Y', time()));
$objPHPExcel->setActiveSheetIndex( 0 )->setCellValue( 'A2', 'Vui lòng KHÔNG nhập thêm hoặc sửa dữ liệu cột ID_data ');

$objPHPExcel->setActiveSheetIndex( 0 )
->setCellValue( 'A3', 'ID_data' )
->setCellValue( 'B3', 'Mã sản phẩm' )
->setCellValue( 'C3', 'Tên sản phẩm' )
->setCellValue( 'D3', 'Xuất xứ' )
->setCellValue( 'E3', 'Giá bán' )
->setCellValue( 'F3', 'Quy cách' )
;


 $objPHPExcel->getActiveSheet()->getStyle( 'A3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
 
   $objPHPExcel->getActiveSheet()->getStyle( 'B3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
   
   $objPHPExcel->getActiveSheet()->getStyle( 'C3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
   
    $objPHPExcel->getActiveSheet()->getStyle( 'D3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
	
	$objPHPExcel->getActiveSheet()->getStyle( 'E3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
	
	$objPHPExcel->getActiveSheet()->getStyle( 'F3' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'ffffff' ), 'name' => 'Tahoma', 'bold' => false, 'italic' => false, 'size' => 12 ), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ),'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb'=>'ff8602'))));
	

	

	//End
	$vitri = 4;	
	$sql = "select * from #_product where type='sanpham'";
	if (isset($_GET['listid'])==true)
	{
		$listid = explode(",",$_GET['listid']); 
		$sql.=" and (";
		for ($k=0 ; $k<count($listid) ; $k++)
		{
			$idTin=$listid[$k]; 
			$id =  themdau($idTin);	
			$sql.=" (id=".$id.")";
			if($k+1 < count($listid))
			{
				$sql.=" or ";
			}	
			else
			{
				$sql.=")";
			}		
		} 
	}	
	

	$sql.=" order by id desc";	
	
	$d->query($sql);
	$product = $d->result_array();	
	
	for($i = 0, $count_donhang = count($product); $i < $count_donhang; $i ++) { 
		
		$sql = "SELECT ten FROM table_product_danhmuc where id='".$product[$i]['id_danhmuc']."' limit 0,1";
		$d->query($sql);
		$pro_danhmuc = $d->fetch_array();
		
		$sql = "SELECT ten FROM table_product_danhmuc where id='".$product[$i]['id_thuonghieu']."' limit 0,1";
		$d->query($sql);
		$pro_thuonghieu = $d->fetch_array();

		
		$objPHPExcel->setActiveSheetIndex( 0 )
		->setCellValue( 'A'.$vitri,$product[$i]['id'] )
		->setCellValue( 'B'.$vitri,$product[$i]['masp'])
		->setCellValue( 'C'.$vitri, $product[$i]['ten'])
		->setCellValue( 'D'.$vitri, $product[$i]['nhasanxuat'] )
		->setCellValue( 'E'.$vitri, $product[$i]['gia'] )
		->setCellValue( 'F'.$vitri, $product[$i]['quycach']);


		$objPHPExcel->getActiveSheet()->getStyle( 'A'.$vitri )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '000000' )), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		
		$objPHPExcel->getActiveSheet()->getStyle( 'B'.$vitri )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '055596' )), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true  ) ) )
		;

		$objPHPExcel->getActiveSheet()
		->getStyle('B'.$vitri)
		->getNumberFormat()
		->setFormatCode(
		PHPExcel_Style_NumberFormat::FORMAT_TEXT
		);
		
		$objPHPExcel->getActiveSheet()->getStyle( 'C'.$vitri )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '990000' )), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		$objPHPExcel->getActiveSheet()->getStyle( 'E'.$vitri )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'FF0000' )), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		
		$objPHPExcel->getActiveSheet()->getStyle( 'F'.$vitri )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '000000' )), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
		
		$objPHPExcel->getActiveSheet()->getStyle('E'.$vitri)->getNumberFormat()->setFormatCode("#,##0 _€");
		$vitri++;	
	}

	
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('MeBauVaBe');

		
// Save Excel 2007 file
//$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
//$objWriter->save(str_replace('.php', '.xls', __FILE__));

//Redirect output to a client’s web browser (Excel5)
      header( 'Content-Type: application/vnd.ms-excel' );
      header( 'Content-Disposition: attachment;filename="MeBauVaBe_'.date('dmY_hm').'.xls"' );
      header( 'Cache-Control: max-age=0' );

      $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
      $objWriter->save( 'php://output' );		
	
}
?>
