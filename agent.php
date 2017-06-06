<ul>
  <li><a href="http://webtech.kettering.edu/~zhao8671/databasesystems/homepage.php">Main Page</a></li>
</ul>
<?php
include_once("config.php");
$retrieve_agents = mysqli_query($mysqli, "SELECT * FROM agent");
?>

<html>
<body>
<a href="add_agent.html">Add an Agent</a>

	<table width='80%' border=0>

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
	while($result = mysqli_fetch_array($retrieve_agents)) {
		echo "<tr>";
		echo "<td>".$result['agent_id']."</td>";
		echo "<td>".$result['name']."</td>";
		echo "<td>".$result['total_auto_prem']."</td>";
		echo "<td>".$result['total_home_prem']."</td>";
		echo "<td>".$result['total_life_prem']."</td>";
		echo "<td>".$result['auto_insur_sold']."</td>";
		echo "<td>".$result['home_insur_sold']."</td>";
		echo "<td>".$result['life_insur_sold']."</td>";
		echo "<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>