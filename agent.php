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
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['agent_id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['total_auto_prem']."</td>";
		echo "<td>".$res['total_home_prem']."</td>";
		echo "<td>".$res['total_life_prem']."</td>";
		echo "<td>".$res['auto_insur_sold']."</td>";
		echo "<td>".$res['home_insur_sold']."</td>";
		echo "<td>".$res['life_insur_sold']."</td>";
		echo "<td><a href=\"delete_agent.php?agent_id=$res[agent_id]\" onClick=\"return confirm('Do you want to delete this agent?')\">Delete</a></td>";
	}
	?>
	</table>
	
	<br>
	<a href="add_agent.html"><button><b>Add an Agent</b></button></a>
</body>
</html>