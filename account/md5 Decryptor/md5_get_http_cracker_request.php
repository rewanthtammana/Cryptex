<html>
    <head>
        <title>User Area</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->
            
        <style>
            html, body {
                height: 100%;
                background-color: #333;
                background-image: url(1018.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
            
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>

    <body>
        <?php
            error_reporting(0);
            $i=0;
            //$hash = "94b7a03b54bbd6db884af7ed99ee5719";
            $hash = $_POST['md5_hash'];
            if(strlen($hash)!=32){
                echo "Invalid hash";
                exit(1);
            }

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=9961&database=i337.net&hash=".$hash);
            //echo $response;
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=1726&database=md5cracker.org&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=9194&database=md5.net&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=2756&database=md5online.net&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=5678&database=md5.my-addr.com&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=405&database=md5decryption.com&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=1633&database=md5crack&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=1688&database=authsecu&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=2121&database=netmd5crack&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=8744&database=md5pass&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $response = file_get_contents("http://md5cracker.org/api/api.cracker.php?r=7109&database=i337.net&hash=".$hash);
            $result = json_decode($response, true);
            $list[$i++] = $result['result'];

            $l =0 ;
            $newlist[0] = $list[0];

            for($j=1;$j<$i;$j++)
            {
                
            	if($newlist[0] != $list[$j])
            		$newlist[$l++] = $list[$j];
               
            }

            $newlist = array_unique($newlist);
            $k = 0;

            for($j=0;$j<=$l;$j++)
            {
            	if( $newlist[$j] ){
            		echo "<center><h3><font color='white'>The possible value of hash can be : ".$newlist[$j]."</font></h3></center><br>";
            		$k = 1;	
            	}

            }

            if( $k == 0 )
            	echo "<center><h3><font color='white'>Hash not found in our database.";
    ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
