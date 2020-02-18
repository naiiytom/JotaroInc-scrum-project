<?php
function selectTBMaintenance() {
	require("connectDB.php");
    $sql = "SELECT MId FROM maintenance";
	$result = $conn->prepare($sql);
	$result->execute();
	return $result;
}
?>