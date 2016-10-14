<!DOCTYPE html>


 <head>
     
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Shubham Singhal" >
     
     
     
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




  <body class="center Site">
      
      
    <div class="flash alert alert-dismissable" style="display: none;"></div>
      
      
    <header>
        
        
    <ul id="welcome" class="dropdown-content" style="min-width: 180px; color: #000000;">
        
            <li><a href="STORAGE/welcome.php">Login</a></li>
            <!--li><a href="/default/user/register">Register</a></li-->
            <li><a href="RESGISTERATION.html">Register</a></li>
    </ul>
    <nav style="background-color: #000000">
        
    <div class="nav-wrapper">
        
        
        <a href="/">
            <img src="cryptex.png" style="position: absolute; left: 0px; height: 60px; width: 60px; padding: 5px;"/>
        </a>
        
        <div class="right">
            
            <span class="left">
                
                    <ul class="nav navbar-nav"><li class="web2py-menu-first"><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 1"></i></a></li><li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 2"></i></a></li><li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 2"></i></a></li><li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 3"></i></a></li><li><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 3"></i></a></li><li class="web2py-menu-last"><a href="notfound.html"><i class="fa fa-trophy" title="Whatever 4"></i></a></li></ul>
                
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
                
 <?php
  session_start();
//Start the Session
require('connection.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']);
	
	$query = "SELECT * FROM `user` WHERE username='$myusername' and password=password('$mypassword')";
	$result = mysqli_query($db,$query) or die(mysqli_error());
        $row = mysqli_fetch_array($result,MYSQLI_NUM);
        $active = $row['active'];
	$count = mysqli_num_rows($result);
	
	echo $count;
        if ($count == 0){
            //session_register("myusername");
	$_SESSION['login_user'] = $myusername;
          header("location: STORAGE/welcome.php");
        }
        else{
		
echo "Invalid Login Credentials.";
	}
	}
 ?>
    
                <div class="row">
        
                    <div id="web2py_user_form" class="col-lg-6">
                            <form action="" class="form-horizontal center" enctype="multipart/form-data" method="post">
                                <div class="center">
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="string" id="auth_username_" name="username" type="text" value="" />
                                            <label for="auth_user_username" id="auth_user_username__label">Username</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="password" id="auth_user_password" name="password" type="password" value="" />
                                            <label for="auth_user_password" id="auth_user_password__label">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                            <input class="boolean" id="auth_user_remember_me" name="remember_me" type="checkbox" value="on" />
                                            <label for="auth_user_remember_me" id="auth_user_remember_me__label">Remember credentials</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col offset-s3 s6">
                                                <input type="submit" value="Log In" />
                                            <a href="RESGISTERATION.php">
                                                <input type="button" class="btn btn-default w2p-form-button" value="Sign Up" />
                                            </a>
                                            <a href="forgotpassword.php">
                                                <input type="button" class="btn btn-default w2p-form-button" value="Lost Password" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div style="display:none;">
                                    <input name="_next" type="hidden" value="/" />
                                    <input name="_formkey" type="hidden" value="b273c371-d269-43ec-bce8-a6a83bcb6b03" />
                                    <input name="_formname" type="hidden" value="login" />
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
               <span>Created by: <a href="https://facebook.com/ShubhamSinghal14497" style="color: white;" target="_blank">XeqtrS</a></span>
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
