<?php if(!defined('_lib')) die("Error");

function phantram_giam($gia,$giacu){
		global $d, $phantram;
		$phantram =  round( (($giacu - $gia) / $giacu) * 100 );

		if($phantram>0)
		{
			return "<span class='icon_giamgia'>-".$phantram."%</span>";
		}
		
	}


	function get_score($price){
			global $d, $row_score;
			$sql = "select score from table_user_score where hienthi=1 order by gia desc";
			$d->query($sql);
			$row_score = $d->result_array();
			for($i=0;$i<count($row_score);$i++)
			{
				if($price>=$row_score[$i]['gia'])
				{
					return $row_score[$i]['score'];
					break;
				}
			}
	
		}
		
	function get_size_name($size){
		global $d, $row;

		if($size>0)
		{
			$sql = "select size from table_product_price where id=$size";
			$d->query($sql);
			$row = $d->fetch_array();
			return $row['size'];
		}
		else
		{
			return "";
		}

		
	}

	function get_code($pid){
			global $d, $row;
			$sql = "select masp from table_product where id=$pid";
			$d->query($sql);
			$row = $d->fetch_array();
			return $row['masp'];
		}
		
	function get_product_name($pid){
		global $d, $row;
		$sql = "select ten from #_product where id=$pid";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten'];
	}
	function get_tong_tien($id=0){
		global $d;
		if($id>0){
			$d->reset();
			$sql="select gia,soluong from #_chitietdonhang where madonhang='".$id."'";
			$d->query($sql);
			$result=$d->result_array();
			$tongtien=0;
			for($i=0,$count=count($result);$i<$count;$i++) { 
			
			$tongtien+=	$result[$i]['gia']*$result[$i]['soluong'];	
			
			}
			return $tongtien;
		}else return 0;
	}
	function get_product_photo($pid){
		global $d, $row;
		$sql = "select thumb from #_product where id=$pid";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['thumb'];
	}
	
	function get_price($pid,$size){
		global $d, $row;

		if($size>0)
		{
			$sql = "select price from table_product_price where id=$size";
			$d->query($sql);
			$row = $d->fetch_array();
			if((int)preg_replace('/[^0-9]/','',$row['price']) > 0)
				return (int)preg_replace('/[^0-9]/','',$row['price']);
		}

		$sql = "select gia from table_product where id=$pid";
		$d->query($sql);
		$row = $d->fetch_array();
		return (int)preg_replace('/[^0-9]/','',$row['gia']);

		
	}
	
	function remove_product($pid,$size,$mausac){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid'] and $mausac==$_SESSION['cart'][$i]['mausac']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$mausac = $_SESSION['cart'][$i]['mausac'];
			$price=get_price($pid,$size);
			$sum+=$price*$q;
		}
		return $sum;
	}
	
	function get_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$sum+=$q;
		}
		return $sum;
	}
		
	function addtocart($pid,$size,$mausac,$q){
		if($pid<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid,$size,$mausac)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
			$_SESSION['cart'][$max]['size']=$size;
			$_SESSION['cart'][$max]['mausac']=$mausac;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
			$_SESSION['cart'][0]['size']=$size;
			$_SESSION['cart'][0]['mausac']=$mausac;
		}
	}
	
	function product_exists($pid,$size,$mausac){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid'] and $size==$_SESSION['cart'][$i]['size'] and $mausac==$_SESSION['cart'][$i]['mausac']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>