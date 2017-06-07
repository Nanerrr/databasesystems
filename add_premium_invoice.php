<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$invoice_id = mysqli_real_escape_string($mysqli, $_POST['invoice_id']);
	$insured_name = mysqli_real_escape_string($mysqli, $_POST['insured_name']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$date_due = mysqli_real_escape_string($mysqli, $_POST['date_due']);
	$amount_due = mysqli_real_escape_string($mysqli, $_POST['amount_due']);
		
	//insert invoice to database	
	$result = mysqli_query($mysqli, "INSERT INTO premium_invoice (invoice_id, insured_name, address, date_due, amount_due) VALUES('$invoice_id', '$insured_name', '$address', '$date_due', '$amount_due');
		
	//display success insert message
	echo "<font color='green'>Premium invoice added successfully.";
	echo "<br/><a href='premium_invoice.php'>View Result</a>";
}
?>
</body>
</html>
