<?php
include("config.php");

//delete client from table
$ssn = $_GET['ssn'];
$result = mysqli_query($mysqli, "DELETE FROM client WHERE ssn='$ssn'");

//redirecting back to client page
header("Location:client.php");
?>

