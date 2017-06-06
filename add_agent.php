<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$total_auto_prem = mysqli_real_escape_string($mysqli, $_POST['total_auto_prem']);
	$total_home_prem = mysqli_real_escape_string($mysqli, $_POST['total_home_prem']);
	$total_life_prem = mysqli_real_escape_string($mysqli, $_POST['total_life_prem']);
	$auto_insur_sold = mysqli_real_escape_string($mysqli, $_POST['auto_insur_sold']);
	$home_insur_sold = mysqli_real_escape_string($mysqli, $_POST['home_insur_sold']);
	$life_insur_sold = mysqli_real_escape_string($mysqli, $_POST['life_insur_sold']);
		
	//insert data to database	
	$result = mysqli_query($mysqli, "INSERT INTO agent(name, total_auto_prem, total_home_prem, total_life_prem, auto_insur_sold, home_insur_sold, life_insur_sold) VALUES('$name','$total_auto_prem','$total_home_prem', '$total_life_prem', '$auto_insur_sold', '$home_insur_sold', '$life_insur_sold')");
		
	//display success insert message
	echo "<font color='green'>Agent added successfully.";
	echo "<br/><a href='agent.php'>View Result</a>";
}
?>
</body>
</html>
