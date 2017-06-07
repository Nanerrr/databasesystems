<?php
include("config.php");

//delete insurance company from table
$name = $_GET['name'];
$result = mysqli_query($mysqli, "DELETE FROM insurance_company WHERE name='$name'");

//redirecting back to insurance company page
header("Location:insurance_company.php");
?>

