<?php require("../connectDB/insertTBMaintenance.php"); ?>
<?php require("../connectDB/updateStatus.php"); ?>
<?php require("../connectDB/selectTBMaintenance.php"); ?>
<?php
	if($_POST["InputDeviceID"]!= null){
		$DId = $_POST["InputDeviceID"];
		$Descript = $_POST["textInput"];
	}
	$target_dir = "../../image/uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "<script type='text/javascript'>";
			echo "File is not an image.";
			echo "window.location = '../../maintenanceForm.php';";
			echo "</script>";
			//echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		//echo "Sorry, file already exists.";
		echo "<script type='text/javascript'>";
        echo "Sorry, file already exists.";
        echo "window.location = '../../maintenanceForm.php';";
        echo "</script>";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
		//echo "Sorry, your file is too large.";
		echo "<script type='text/javascript'>";
        echo "Sorry, your file is too large.";
        echo "window.location = '../../maintenanceForm.php';";
        echo "</script>";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		echo "<script type='text/javascript'>";
        echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');";
        echo "window.location = '../../maintenanceForm.php';";
        echo "</script>";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded.";
		echo "<script type='text/javascript'>";
        echo "alert('Sorry, your file was not uploaded.');";
        echo "window.location = '../../maintenanceForm.php';";
        echo "</script>";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//ส่วนบอกว่า upload สำเร็จ
			$MId = 1;
			$stmt = selectTBMaintenance();
			while ($row = $stmt->fetch()) {
				$MId = $row ["MId"];
				$MId = $MId + 1;
			}
			$MDate = date('d-m-y h:i:s');
			$status = "Wait for reparation";
			insertTBMaintenance($MId, $DId, $Descript, $MDate, $_FILES["fileToUpload"]["name"], "1022262628", "6030217093");
			updateStatus($DId, $status);
			//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			echo "<script type='text/javascript'>";
            echo "alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.');";
            echo "window.location = '../../devicelist.php';";
            echo "</script>";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
?>
