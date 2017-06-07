<div>
	<a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a>
</div>
<br>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM insurance_policy");
?>

<html>
<body>
	<h1>Insurance Policy Table</h1>
	<table width='80%' border=2>

	<tr bgcolor='#CCCCCC'>
		<td>Policy ID</td>
		<td>Name</td>
		<td>Phone</td>
		<td>Policy Type</td>
		<td>Policy Coverage</td>
		<td>Premium</td>
		<td>Start Date</td>
		<td>Expiration Date</td>
		<td>Company Name</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['policy_id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['policy_type']."</td>";
		echo "<td>".$res['policy_coverage']."</td>";
		echo "<td>".$res['premium']."</td>";
		echo "<td>".$res['start_date']."</td>";
		echo "<td>".$res['expiration_date']."</td>";
		echo "<td>".$res['company_name']."</td>";
		echo "<td><a href=\"delete_insurance_policy.php?policy_id=$res[policy_id]\" onClick=\"return confirm('Do you want to delete this insurance policy?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_insurance_policy.html"><button><b>Add an Insurance Policy</b></button></a>
</body>
</html>