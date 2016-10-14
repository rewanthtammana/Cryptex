<?php
                
    //Start the Session
    session_start();
	
	require('../connection.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
		
		$query = "SELECT * FROM `user` WHERE username='$myusername' and password=password('$mypassword')";
		$result = mysqli_query($db,$query) or die(mysqli_error());
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $active = $row['active'];
		$count = mysqli_num_rows($result);
		
		echo $count;
        if ($count == 1){
			$_SESSION['username'] = $myusername;
            header("location: welcome.php");
     	}else{
			echo "Invalid Login Credentials.";
		}
	}
 ?>

<html>
	<head>
		<title>Store Files</title>	
		<link rel="stylesheet" href="animate.css">
		<link href="bootstrap.min.css"/>
		<style>
			.myButton {
			-moz-box-shadow:inset 0px 34px 0px -15px #b54b3a;
			-webkit-box-shadow:inset 0px 34px 0px -15px #b54b3a;
			box-shadow:inset 0px 34px 0px -15px #b54b3a;
			background-color:#a73f2d;
			border:1px solid #241d13;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:9px 23px;
			text-decoration:none;
			text-shadow:0px -1px 0px #7a2a1d;
			}
			.myButton:hover {
			background-color:#b34332;
			}
			.myButton:active {
			position:relative;
			top:1px;
			}

		</style>
	</head>
	<body style="background:url(wall.jpg);  background-repeat: no-repeat; background-size:100% 100%; height: 100%">
	<br><br><br><br>	
		<center><img class="animated bounceIn" src="logo.png" height="20%" width="11%"/></center>	<br><br><br><br><br>
		<div style="text-align: center;">
			<a href="../PRO/PRO.html" class="myButton">Upload</a>
		</div>
		<br><br><br><br><br>
		<div style="text-align: center;">
			<a href="../PRO/PRO.html" class="myButton">View your files</a>
		</div>
		<div style="text-align: center;">
		<br><br><br><br><br>
			<a href="logout.php" class="myButton">LOGOUT</a>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
		<h3 align="center"><a href="../Updating/Update.htm"><i><font color="yellow">Upgrade to</font> <font color="red">PRO</font> <font color="yellow">version</font></i></a></h3>
	</body>
</html>