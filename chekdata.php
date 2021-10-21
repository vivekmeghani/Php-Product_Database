<?php
	function getdata($id){
				include 'cannection.php';
				$selectsql=mysqli_query($con,"SELECT * FROM info WHERE p_id='$id';");
				$result=mysqli_fetch_assoc($selectsql); 
				return $result;
	}
?>

<?php
$value=getdata(1);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];	
	$image="tshirt.jpeg";
	
if(isset($_POST['getdata1'])){
	
	$value=getdata(1);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];	
	$image="tshirt.jpeg";
}

if(isset($_POST['getdata2'])){
	$value=getdata(2);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="jeans.jpeg";	
}
if(isset($_POST['getdata3'])){
	$value=getdata(3);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="lycra tshirt.jpeg";
}
if(isset($_POST['getdata4'])){
	$value=getdata(4);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="lycra pant.jpeg";
}
if(isset($_POST['getdata5'])){
	$value=getdata(5);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="cotten jeans.jpeg";
}
if(isset($_POST['getdata6'])){
	$value=getdata(6);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="cotten shirt.jpeg";
}
if(isset($_POST['getdata7'])){
	$value=getdata(7);
	$valuename=$value['p_name'];
	$valuesize=$value['p_size'];
	$valuemrp=$value['p_mrp'];
	$valuesellingprice=$value['p_sellingprice'];
	$valueunit=$value['p_unit'];
	$image="linen shirt.jpeg";
}

?>


