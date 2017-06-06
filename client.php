<div>
	<a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a>
</div>
<br>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM client");
?>

<html>
<body>
	<h1>Client Table</h1>
	<table width='80%' border=2>

	<tr bgcolor='#CCCCCC'>
		<td>SSN</td>
		<td>SEX</td>
		<td>Name</td>
		<td># of Children</td>
		<td>Martial Status</td>
		<td>Height</td>
		<td>Weight</td>
		<td>Date of Birth</td>
		<td>Address<td>
		<td>Employer</td>
		<td>Policy ID</td>
		<td>Phone</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['ssn']."</td>";
		echo "<td>".$res['sex']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['num_of_children']."</td>";
		echo "<td>".$res['martial_status']."</td>";
		echo "<td>".$res['height']."</td>";
		echo "<td>".$res['weight']."</td>";
		echo "<td>".$res['date_of_birth']."</td>";
		echo "<td>".$res['current_address']."</td>";
		echo "<td>".$res['current_employer']."</td>";
		echo "<td>".$res['policy_id']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td><a href=\"delete_client.php?ssn=$res[ssn]\" onClick=\"return confirm('Do you want to delete this client?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_client.html"><button><b>Add a Client</b></button></a>
</body>
</html>