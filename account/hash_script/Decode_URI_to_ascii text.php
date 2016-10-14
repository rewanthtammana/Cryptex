<html>
    <head>
        <title>User Area</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        
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
        
        <center><font color="white"><h1><i>Go Ahead !!</i></h1></font></center>
        
        <center><p><font color="white" size="3"><i>Decode URI to ascii text.<br>Determine True Host URL link.</i></font></p></center>
        
<form role="form">
  <div class="form-group" style="margin-top:10;margin-left:300;">
    <label for="input_string"><h4><font color="white">Enter String:</font></h4>
        <textarea class="form-control" rows="3" style="height:100;width:700;" onkeyup="this.form.code.value = decodeURI(this.form.text.value)" name="text" ></textarea></label>
  </div>
  <br /><br />  
    <div class="form-group" style="margin-top:20;margin-left:300;">
       <label for="input_string"><h4><font color="white">Result</font></h4>
        <textarea class="form-control" rows="3" style="height:100;width:700;" readonly="readonly" name="code"></textarea></label> 
    </div>
</form>
        
        <center><p><font color="white" size="3"><i>The decodeURI() function is used to decode a
 URI. Uri Decoding is the action of decoding the hex values of a url. 
The hexadecimal values start with '%' and are followed by 2 characters. 
Simply decode one by one to get the decoded url. Use the encodeURI() 
function to encode a URI. The decodeURI() function is supported in all 
major browsers. Use our Uri Decoder to decode any url online. Our url 
decoding online tool is easy to use. Uri Decoding is the action of 
decoding the hex value of a url. URL-encoding is also known as 
Percent-encoding, and is a mechanism for encoding information in a URI 
(Uniform Resource Identifier).</i></font></p></center>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   -->
    </body>
</html>