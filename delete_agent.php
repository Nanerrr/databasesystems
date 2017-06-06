<?php
include("config.php");

//delete agent from table
$agent_id = $_GET['agent_id'];
$result = mysqli_query($mysqli, "DELETE FROM agent WHERE agent_id=$agent_id");

//redirecting back to agent page
header("Location:agent.php");
?>

