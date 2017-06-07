<?php
include("config.php");

//delete policy from table
$policy_id = $_GET['policy_id'];
$result = mysqli_query($mysqli, "DELETE FROM insurance_policy WHERE policy_id='$policy_id'");

//redirecting back to policy page
header("Location:insurance_policy.php");
?>

