<?php
include("config.php");

//delete invoice from table
$invoice_id = $_GET['invoice_id'];
$result = mysqli_query($mysqli, "DELETE FROM premium_invoice WHERE invoice_id='$invoice_id'");

//redirecting back to premium invoice page
header("Location:premium_invoice.php");
?>

