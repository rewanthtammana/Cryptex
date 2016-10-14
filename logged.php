<html>
    <head>
        <title>
            User Area
        </title>
        <link rel="stylesheet" href="materialize.css"/>
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="modernizr-2.8.3.min.js"></script>
    <script src="jquery.js" type="text/javascript"></script>
    <link href="calendar.css" rel="stylesheet" type="text/css" />
    <script src="calendar.js" type="text/javascript"></script>
    <script src="web2py.js" type="text/javascript"></script>

    <script src="particles.js"></script>
        <link rel="stylesheet" href="main.css" />
        <style>
            body 
        {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
        }
     .iframe-wrapper
     {
        align:center;
         border-width: 2px;
        margin-left: 340px ;
        margin-top: 50px;
        border-width:thick;
     }
        </style>
    </head>
    <body>
        <?php
session_write_close();
//Start the Session
require('connection.php');

	if (isset($_POST['username']) and isset($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM `user` WHERE username='$username' and password=password('$password')";
	$result = mysqli_query($connection,$query) or die(mysqli_error());
	$count = mysqli_num_rows($result);
	
	echo $count;
        if ($count == 1){
	$_SESSION['username'] = $username;
	}else{
		
echo "Invalid Login Credentials.";
	}
	}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	echo "<br />Hai " . $username . "<br />";
	echo "This is the Members Area<br />";
	echo "<a href='login.php'>Logout</a>";
	}else{
	
	
    }  ?>
        
    
     <br />
        
            <div class="ask-hack-method">
                <form action="" method="post">
                    What Do You Want :    
                    <a href="hello.html" target="iframe"><input type="radio" name="method_hacking" value="encryption"  />Encryption</a>
                    <a href="decryption.php" target="iframe"><input type="radio" name="method_hacking" value="decryption"  />Decryption</a>
                </form>
            </div>
            <div class="iframe-wrapper">
                <iframe name="iframe" width="650" height="300" id="iframe" src="hello.html"></iframe>
            </div>
       
    </body>
    
</html>
