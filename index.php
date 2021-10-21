
<?php 
include 'chekdata.php';

?>
<html>

<head>

	<title>Product Info.. </title>
	
		<link href="stylesheet.css" rel="stylesheet">
	
</head>

<body>

	<div class="maindiv" > 
		
		<div class="subdiv">
		
		<img src="<?php  echo $image;  ?>" height="100%" width="100%" />
		</div>
		<div class="data">
		
		<table border="1" align="center" 
		cellspacing="5px" cellpadding="2px" >
		<tr>
			<th>NAME</th>
			<th>SIZE</th>
			<th>MRP</th>
			<th>SELL PRICE</th>
			<th>STOCK</th>	
		</tr>
		
	
		<tr>
			<td><?php echo $valuename; ?> </td>
			<td><?php echo $valuesize;?> </td>
			<td><strike><?php  echo $valuemrp; ?></strike></td>
			<td><?php echo $valuesellingprice; ?> </td>
			<td><?php echo $valueunit; ?> </td>	
		</tr>

		</table>
		</div>
		
		<form method="POST" action="">
		<button type="BTN1" name="getdata1" value="1" >1</button>
		<button type="BTN1" name="getdata2">2</button>
		<button type="BTN1" name="getdata3">3</button>
		<button type="BTN1" name="getdata4">4</button>
		<button type="BTN1" name="getdata5">5</button>
		<button type="BTN1" name="getdata6">6</button>
		<button type="BTN1" name="getdata7">7</button>
		</form>
		</div>
	</div>

</body>

</html>
