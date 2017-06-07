<div>
	<a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a>
</div>
<br>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM insurance_company");
?>

<html>
<body>
	<h1>Insurance Company Table</h1>
	<table width='80%' border=2>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Address</td>
		<td>Phone</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td><a href=\"delete_insurance_company.php?name=$res[name]\" onClick=\"return confirm('Do you want to delete this insurance company?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_insurance_company.html"><button><b>Add an Insurance Company</b></button></a>
</body>
</html>