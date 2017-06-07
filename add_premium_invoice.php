<html>
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {
	//list of parameters
	$date_due = mysqli_real_escape_string($mysqli, $_POST['date_due']);
	$amount_due = mysqli_real_escape_string($mysqli, $_POST['amount_due']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$invoice_id = mysqli_real_escape_string($mysqli, $_POST['invoice_id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);

	//insert invoice to database	
	$result = mysqli_query($mysqli, "INSERT INTO premium_invoice (date_due, amount_due, address, invoice_id, name) VALUES('$date_due', '$amount_due', '$address', '$invoice_id', '$name')");
		
		
	//display success insert message
	echo "<font color='green'>Premium invoice added successfully.";
	echo "<br/><a href='premium_invoice.php'>View Result</a>";
}
?>
</body>
</html>
