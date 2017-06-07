<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$insured_name = mysqli_real_escape_string($mysqli, $_POST['insured_name']);
	$date_due = mysqli_real_escape_string($mysqli, $_POST['date_due']);
	$amount_due = mysqli_real_escape_string($mysqli, $_POST['amount_due']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$invoice_id = mysqli_real_escape_string($mysqli, $_POST['invoice_id']);

	//insert invoice to database	
	$result = mysqli_query($mysqli, "INSERT INTO insurance_company (insured_name, date_due, amount_due, address, invoice_id) VALUES('$insured_name', '$date_due', '$amount_due', '$address', '$invoice_id')");
		
		
	//display success insert message
	echo "<font color='green'>Premium invoice added successfully.";
	echo "<br/><a href='premium_invoice.php'>View Result</a>";
}
?>
</body>
</html>
