<html>
    <head>
        <title>User Area</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <style>
            body {
             height: 100%;
             background-color: #333;
                background-image: url(1018.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
        
        <!-- Bootstrap -->
<!--    <link href="css/bootstrap.css" rel="stylesheet">   -->
    </head>
    <body>
        <?php
session_start();
//include 'online_hash_craker.php';
//$type = $_POST['algo'];
$name = $_POST['plaintext'];
//$type = $algo;
//$type = $_POST['name'];
$type = $_SESSION['algo'];
//echo "type = ".$type;
//echo "name = ".$name;

if($type=="" || $name=="")
exit('Invalid input<br><br><a href="../../FRONTPAGE/selectionmenu.html"><input value="Back" type="submit" name="back" /></a>');
//$type='sha224';
$i=0;
$params = array ('action'=>'ajax_hash', 'text'=>$name, 'algo'=>$type);
 
// Build Http query using params
$query = http_build_query ($params);
 
// Create Http context details
$contextData = array ( 
                'method' => 'POST',
		            
		'header' => "Connection: close\r\n".
                            "Content-Length: ".strlen($query)."\r\n".
			    "Content-Type: application/x-www-form-urlencoded",
                'content'=> $query );
 
// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
 
// Read page rendered as result of your POST request
$result =  file_get_contents (
                  'https://www.tools4noobs.com/',  // page url
                  false,
                  $context);

echo "<div style='margin-top:100;'><center><h3><font color='white'>The following is a ".$type." hash<br><br>".$result."</font><br></h3>";        
        
echo '<a href="../../FRONTPAGE/selectionmenu.html"><input value="Back" type="submit" name="back" /></a></center></div>';
/*$list[$i++] = $result;
//------------------------------------------------------------------------------------------------------------------------------------------------
$params = array ('action'=>'ajax_hash', 'text'=>'ajslfd', 'algo'=>'sha256');
 
// Build Http query using params
$query = http_build_query ($params);
 
// Create Http context details
$contextData = array ( 
                'method' => 'POST',
		            
		'header' => "Connection: close\r\n".
                            "Content-Length: ".strlen($query)."\r\n".
			    "Content-Type: application/x-www-form-urlencoded",
                'content'=> $query );
 
// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
 
// Read page rendered as result of your POST request
$result =  file_get_contents (
                  'https://www.tools4noobs.com/',  // page url
                  false,
                  $context);

$list[$i++] = $result;
//------------------------------------------------------------------------------------------------------------------------------------------------
var_dump($list);*/
//echo $result;
// Server response is now stored in $result variable so you can process it
?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

    </body>
</html>