<html>
    
    <head>
        <title>User Area</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <style>
            html,
            body {
             height: 100%;
             background-color: #333;
                background-image: url(1018.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
        
        <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">  --> 
    </head>
    <body>
            
    <form action="get_request.php" method="POST" name="ripmed320"><br>    
     <center>
            <h3 style="margin-top:100;"><font color="white">Enter the plaintext:</font></h3> 
            <textarea name="plaintext" rows="3" style="width:500;height:100;"></textarea><br><br>
            <input value="Hash this!" type="submit" name="submit" style="margin-left:-30;" />
        </center>
     <br><br>

        <?php
        session_start();
        $_SESSION['algo'] =  "ripemd320";
        ?>
        
        
        </form>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
    </body>
</html>