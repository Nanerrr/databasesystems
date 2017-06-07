<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
		
	//insert insurance company to database	
	$result = mysqli_query($mysqli, "INSERT INTO insurance_company (name, address, phone) VALUES('$name', '$address', '$phone')");
		
	//display success insert message
	echo "<font color='green'>Insurance company added successfully.";
	echo "<br/><a href='insurance_company.php'>View Result</a>";
}
?>
</body>
</html>
