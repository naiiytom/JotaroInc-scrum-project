<?php
function selectTBDevice() {
	require("connectDB.php");
    $sql = "SELECT DId, DName, DBrand, DModel, DStatus, DAddress FROM device";
	$result = $conn->prepare($sql);
	$result->execute();
	return $result;
}
?>