<div>
	<a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a>
</div>
<br>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM agent");
?>

<html>
<body>
	<table width='80%' border=2>

	<tr bgcolor='#CCCCCC'>
		<td>ID</td>
		<td>Name</td>
		<td>Total Auto Premium</td>
		<td>Total Home Premium</td>
		<td>Total Life Premium</td>
		<td>Auto Insurance Sold</td>
		<td>Home Insurance Sold</td>
		<td>Life Insurance Sold</td>
	</tr>
	<?php
	while($result = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$result['agent_id']."</td>";
		echo "<td>".$result['name']."</td>";
		echo "<td>".$result['total_auto_prem']."</td>";
		echo "<td>".$result['total_home_prem']."</td>";
		echo "<td>".$result['total_life_prem']."</td>";
		echo "<td>".$result['auto_insur_sold']."</td>";
		echo "<td>".$result['home_insur_sold']."</td>";
		echo "<td>".$result['life_insur_sold']."</td>";
		echo "<td><a href=\"delete_agent.php?agent_id=$res[agent_id]\" onClick=\"return confirm('Are you sure you want to delete this agent?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_agent.html"><button><b>Add an Agent</b></button></a>
</body>
</html>