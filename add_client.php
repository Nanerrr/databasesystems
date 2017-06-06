<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$ssn = mysqli_real_escape_string($mysqli, $_POST['ssn']);
	$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
	$num_of_children = mysqli_real_escape_string($mysqli, $_POST['num_of_children']);
	$martial_status = mysqli_real_escape_string($mysqli, $_POST['martial_status']);
	$height = mysqli_real_escape_string($mysqli, $_POST['height']);
	$weight = mysqli_real_escape_string($mysqli, $_POST['weight']);
	$date_of_birth = mysqli_real_escape_string($mysqli, $_POST['date_of_birth']);
	$current_address = mysqli_real_escape_string($mysqli, $_POST['current_address']);
	$current_employer = mysqli_real_escape_string($mysqli, $_POST['current_employer']);
	$policy_id = mysqli_real_escape_string($mysqli, $_POST['policy_id']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
		
	//insert client to database	
	$result = mysqli_query($mysqli, "INSERT INTO client(ssn, sex, num_of_children, martial_status, height, weight, date_of_birth, current_address, current_employer, policy_id, phone) 
	VALUES('$ssn', '$sex', '$num_of_children', '$martial_status', '$height', '$weight', '$date_of_birth', '$current_address', '$current_employer', '$policy_id', '$phone')");
		
	//display success insert message
	echo "<font color='green'>Client added successfully.";
	echo "<br/><a href='client.php'>View Result</a>";
}
?>
</body>
</html>
