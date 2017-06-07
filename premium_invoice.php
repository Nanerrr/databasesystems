<div>
	<a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a>
</div>
<br>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM premium_invoice");
?>

<html>
<body>
	<h1>Premium Invoice Table</h1>
	<table width='80%' border=2>

	<tr bgcolor='#CCCCCC'>
		<td>Invoice ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Date Due</td>
		<td>Amount Due</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['invoice_id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['date_due']."</td>";
		echo "<td>".$res['amount_due']."</td>";
		echo "<td><a href=\"delete_agent.php?invoice_id=$res[invoice_id]\" onClick=\"return confirm('Do you want to delete this invoice?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_premium_invoice.html"><button><b>Add a Premium Invoice</b></button></a>
</body>
</html>