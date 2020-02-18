<?php
function insertTBMaintenance($MId, $DId, $MDesc, $MDate, $MImage, $MAppover, $MInfomer) {
	require("connectDB.php");
	$stmt = $conn->prepare("INSERT INTO maintenance VALUES (?, ?, ?, ?, ?, ?, ?)"); 
	$stmt->bindParam(1, $MId); 
	$stmt->bindParam(2, $DId); 
	$stmt->bindParam(3, $MDesc);
	$stmt->bindParam(4, $MDate);
	$stmt->bindParam(5, $MImage);
	$stmt->bindParam(6, $MAppover);
	$stmt->bindParam(7, $MInfomer);
	$stmt->execute();
}
?>