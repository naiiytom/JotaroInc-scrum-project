<?php
function updateStatus($DId, $status) {
	require("connectDB.php");
	$stmt = $conn->prepare("UPDATE device SET DStatus=? WHERE DId=?"); 
	$stmt->bindParam(1, $status); 
	$stmt->bindParam(2, $DId); 
	$stmt->execute();
}
?>