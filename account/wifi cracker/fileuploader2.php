<html>
	<head>
		<title>Wi-Fi Cracker</title>
	</head>
	<body style="background:url(wall.jpg);  background-repeat: no-repeat; background-size:100% 100%; height: 100%">
		
	</body>
</html>

<?php
	$target_dir = "./";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    $check = 0;
		$uploaded_name = $_FILES['fileToUpload']['name'];
		$uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
		
	    if($check !== false) {
			echo "<br><br><h2> File Info:</h2><br><br>";
			echo "Sent file: ".$_FILES['fileToUpload']['name']."<br><br><br>";
			echo "File size: ".$_FILES['fileToUpload']['size']." bytes<br><br><br>";
			echo "File type: ".$_FILES['fileToUpload']['type']."<br>";	
		    $uploadOk = 1;
	    } 

		if($uploaded_ext != "cap" && $uploaded_ext != "CAP" && $uploaded_ext != "pcap"){
			echo '<title>Uploading Not Complete</title><h3>Not a cap file . Retry using the correct file</h3>';
			$uploadOk = 0;
		}

		if($uploadOk == 1){
		echo "<br><br>Your file cracking is under process. You will be notified on your email once the password gets cracked<br><br>";

			include 'test.html';
		}

	    echo '<br><br><a href="index2.html"><input type="submit" value="Back" name="Back"/></a>&nbsp&nbsp';
	    echo '<a href="../../FRONTPAGE/frontpage.html"><input type="submit" value="Home" name="Home"/></a><br><br>';

	}
	else{
		echo "<h3>YoU DonT havE enoUGh PermiSSIonS To accESS thIS paGE</h3>";
	}
?> 
