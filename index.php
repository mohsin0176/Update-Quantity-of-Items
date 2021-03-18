<?php 

include "connect.php";
$result=mysqli_query($con,"SELECT *FROM product");
?>
<table cellpadding="2" cellspacing="2" border="0">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>PRICE</th>
		<th>BUY</th>
	</tr>
	<?php 
	while ($product=mysqli_fetch_object($result)) 
	{ ?>
    <tr>
    	<td><?php echo $product->id ?> </td>
    	<td><?php echo $product->name ?> </td>
    	<td><?php echo $product->price ?> </td>
    	<td><a href="cart.php?id=<?php echo $product->id; ?>">Order Now</a></td>
    </tr>
	<?php } ?>
</table>