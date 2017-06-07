<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$policy_id = mysqli_real_escape_string($mysqli, $_POST['policy_id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$policy_type = mysqli_real_escape_string($mysqli, $_POST['policy_type']);
	$policy_coverage = mysqli_real_escape_string($mysqli, $_POST['policy_coverage']);
	$premium = mysqli_real_escape_string($mysqli, $_POST['premium']);
	$start_date = mysqli_real_escape_string($mysqli, $_POST['start_date']);
	$expiration_date = mysqli_real_escape_string($mysqli, $_POST['expiration_date']);
	$company_name = mysqli_real_escape_string($mysqli, $_POST['company_name']);
		
	//insert policy to database	
	$result = mysqli_query($mysqli, "INSERT INTO insurance_policy(policy_id, name, phone, policy_type, policy_coverage, premium, start_date, expiration_date, company_name) VALUES('$policy_id', '$name', '$phone', '$policy_type', '$policy_coverage', '$premium', '$start_date', '$expiration_date', '$company_name')");
		
	//display success insert message
	echo "<font color='green'>Insurance policy added successfully.";
	echo "<br/><a href='insurance_policy.php'>View Result</a>";
}
?>
</body>
</html>
