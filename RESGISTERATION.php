<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="materialize.css"/>
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="modernizr-2.8.3.min.js"></script>
    <script src="jquery.js" type="text/javascript"></script>
    <link href="calendar.css" rel="stylesheet" type="text/css" />
    <script src="calendar.js" type="text/javascript"></script>
    <script src="web2py.js" type="text/javascript"></script> 
    <script src="particles.js"></script>
     
    <style>
        .Erroror
        {
            color: #FF0000; 
        }
        input.form-control
        {
            width: 50%;
            text-align:  center;
        }
        .pagination li.active
        {
            background-color: #259b24;
        }
        #welcome 
        {
            min-width: 180px;
        }
        #welcome > li > a 
        {
            color: #000000;
        }
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
        .Site 
        {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .Site-content 
        {
            flex: 1;
        }
        iframe 
        {
            visibility: block;
        }
    </style>
     
</head>

<?php
require('connection.php');
// Initialize variables to null.
$usernameError ="";
$emailError ="";
$passwordError ="";
$confirm_passwordError ="";
$mobile_numError =""; 

$username=$email=$password=$confirm_password=$mobile_num="";
$w=$x=$y=$z=0;

//On submitting form below function will execute

if(isset($_POST['submit'])){
    if (empty($_POST["username"])) {
     $usernameError = "Username is required";
   } else  {
     $username = /*test_input*/($_POST["username"]);
     // check name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z 0-9 _]*$/",$username)) {
       $usernameError = "Special characters are not allowed."; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else  {
     $email = /*test_input*/($_POST["email"]);
     // check if e-mail address syntax is valid or not
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailError = "Invalid email format";
     }
   }
     
  if (empty($_POST["password"]))
	 {
     $passwordError = "Password is required";
	 $y = 1;
	 }
     else 
     {
     $password = /*test_input*/($_POST["password"]);
     // check if name only contains letters and whitespace
		 if (preg_match("/^[a-zA-Z0-9]*$/",$password))
		 {
		   $passwordError = "Weak password.Try adding special characters.";
		   $y = 1;
		 }
	 }
	 if($y == 0)
	 {
		 if(strlen($password)<8)
		 {
		 $passwordError = "Your password is less than 8 characters.Make it long.";
		 $y = 1;
		 }
		 if(strlen($password)>20)
		 {
		 $passwordError = "Your password is exceeding the maximum limit. Make it less than 20 characters.";
		 $y = 1;
		 }
	 }
    
   if($_POST['password']!==$_POST['confirm_password'])
    {
        $confirm_passwordError = "Confirm Password not matched.";
    }
    
    if (empty($_POST["mobile_num"]))
	   {
       $mobile_numError = "Mobile number is required";
	   $z = 1;
	   }
	   else
	   {
		 $mobile_num = /*test_input*/($_POST["mobile_num"]);
		 // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		 if (!preg_match("/^[0-9]/",$mobile_num))
		 {
		   $mobile_numError = "Must contain only numbers";
		   $z = 1;
		 }
		 if( $z == 0)
		 {
			 if(strlen($mobile_num)!=10)
			 {
			 $mobile_numError ="Enter a valid mobile number";
			 $z = 1;
			 }
		 }
	   }
    $username = $_POST['username'];
	$email = $_POST['email'];
	
	$query1 = "SELECT * FROM `user` WHERE username='$username'";
	$result1 = mysqli_query($db,$query1) or die(mysqli_error());
	$count1 = mysqli_num_rows($result1);
	
        if ($count1 == 1){
	$x=1;
        }
    
    if($x==1)
    {
        echo "User with the same username is already registered.";
    }
    
    $query2 = "SELECT * FROM `user` WHERE email='$email'";
	$result2 = mysqli_query($db,$query2) or die(mysqli_error());
	$count2 = mysqli_num_rows($result2);
	
        if ($count2 == 1){
	$w=1;
        }
    
    if($w==1)
    {
        echo "User with the same email is already registered.";
    }
    
    if($x==0 && $y==0 && $z==0 && $w==0 )
    {
       $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        $mobile_num = $_POST['mobile_num'];
 
        $query = "INSERT INTO `user` (username, password, email,mobile_num) VALUES ('$username', password('$password'), '$email','$mobile_num')";
        $result = mysqli_query($db,$query);
        if($result){
            $msg = "<p text-color='black'>User Created Successfully.</p>";
            print($msg);
            
        }  
    }

}
?>




  <body class="center Site">
      
      
    <div class="flash alert alert-dismissable" style="display: none;"></div>
      
      
    <header>
        
        
    <ul id="welcome" class="dropdown-content" style="min-width: 180px; color: #000000;">
        
            <li><a href="/default/user/login">Login</a></li>
            <li><a href="/default/user/register">Register</a></li>
        
    </ul>
    <nav style="background-color: #000000">
        
    <div class="nav-wrapper">
        
        
        <a href="/">
            <img src="cryptex.png" style="position: absolute; left: 0px; height: 60px; width: 60px; padding: 5px;"/>
        </a>
        
        <div class="right">
            
            <span class="left">
                
                    <ul class="nav navbar-nav">
                        <li class="web2py-menu-first"><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 1"></i></a></li>
                        <li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 2"></i></a></li>
                        <li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 2"></i></a></li>
                        <li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 3"></i></a></li>
                        <li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 3"></i></a></li>
                        <li class="web2py-menu-last"><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 4"></i></a></li>
                   </ul>
                
            </span>
            
            <ul class="right hide-on-med-and-down" style="float: left;">
                <li><a class="dropdown-button left" href="" data-activates="welcome"><i class="fa fa-sort-down"></i></a></li>
            </ul>
            
        </div>
        
        
    </div>
        
    </nav>
        
    </header>
      
      
<main class="Site-content">
        
    <div class="container-fluid">
      

      <div class="col-md-12">
        
        
            <head><title>Cryptex</title></head>
                <h2>
                    Get Inside
                </h2>

            <div class="container">
                <p><span class="Erroror">*Required Field</span></p>
    
                <div class="row">
        
                    <div id="web2py_user_form" class="col-lg-6">
                            <form action="#" class="form-horizontal center" enctype="multipart/form-data" method="post">
                                <div class="center">
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="string" id="auth_user_username" name="username" type="text" value="" />
                                            <label for="auth_user_username" id="auth_user_username__label">User name *</label>
                                            <span class="Erroror"> <?php echo $usernameError;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="string" id="auth_user_email" name="email" type="text" value="" />
                                            <label for="auth_user_email" id="auth_user_email__label">E-mail *</label>
                                            <span class="Erroror"> <?php echo $emailError;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="password" id="auth_user_password" name="password" type="password" value="" />
                                            <label for="auth_user_password" id="auth_user_password__label">Password *</label>
                                            <span class="Erroror"> <?php echo $passwordError;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="password" id="auth_user_confirm_password" name="confirm_password" type="password" value="" />
                                            <label for="auth_user_confirm_password" id="auth_user_confirm_password__label">Confirm Password *</label>
                                            <span class="Erroror"> <?php echo $confirm_passwordError;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="mobile_num" id="auth_user_mobile_num" name="mobile_num" type="text" value="" />
                                            <label for="auth_user_mobile_num" id="auth_user_mobile_num">Mobile No. *</label>
                                            <span class="Erroror"> <?php echo $mobile_numError;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input type="submit" value="Register" name="submit"/>
                                            <a href="LOGIN.php">
                                                <input type="button" value="Log In" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div style="display:none;">
                                    <input name="_next" type="hidden" value="/" />
                                    <input name="_formkey" type="hidden" value="2e93d135-8ea5-4f0b-a0db-1334e7c4da88" />
                                    <input name="_formname" type="hidden" value="register" />
                                </div>
                        </form>
                    </div>
        
                </div>
    
           </div>

        
     </div>

      

 </div>
        
</main>
      
    <footer class="page-footer" style="background-color: #000000;">
        
          <div class="footer-copyright">
              
            <div class="container">
            <div class="left">© 2016-2017 Cryptex </div>
            <div class="right">
               <span>Created by: Cryptx Team</span>
            </div>
            </div>
          </div>
        
    </footer>
      
      
    <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large pink accent-3">
            <i class="fa fa-heart"></i>
        </a>
        <ul style="pointer-events: none;">
            <li>
                <a class="btn-floating indigo darken-4" style="pointer-events: all; transform: scaleY(0.4) scaleX(0.4) translateY(0px) translateX(40px); opacity: 0;" target="_blank" href="https://www.facebook.com/ShubhamSinghal14497/"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a class="btn-floating blue lighten-1" style="pointer-events: all; transform: scaleY(0.4) scaleX(0.4) translateY(0px) translateX(40px); opacity: 0;" target="_blank" href="https://www.facebook.com/ShubhamSinghal14497/"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a class="btn-floating red darken-4"  style="pointer-events: all; transform: scaleY(0.4) scaleX(0.4) translateY(0px) translateX(40px); opacity: 0;" target="_blank" href="https://www.facebook.com/ShubhamSinghal14497/"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
                <a class="btn-floating black"  style="pointer-events: all; transform: scaleY(0.4) scaleX(0.4) translateY(0px) translateX(40px); opacity: 0;" target="_blank" href="https://www.facebook.com/ShubhamSinghal14497/"><i class="fa fa-github"></i></a>
            </li>
            </ul>
    </div>
      
      
    <script src="materialize.js"></script>
    <script src="web2py-bootstrap3.js"></script>
    
    <script>
        jQuery("#web2py_user_form input:visible:enabled:first").focus();

    </script>

    <script>
        
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
             })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71263752-1', 'auto');
      ga('send', 'pageview');

    </script>
      
      
    <script type="text/javascript">
    $(document).ready(function() {
        $('.collapsible').collapsible({
            accordion : false
        });
        $('select').material_select();
        $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });
        if (document.activeElement) {
            document.activeElement.blur();
        }
    });
    </script>
      
  </body>


</html>
