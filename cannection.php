<?php 

	$con=mysqli_connect("localhost","root","","productinfo");

if($con){
	//echo "cannected....!!";
}
else 
{
	die('cannection lost').mysqli_connect_error();
}

?>