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
        
        <form name="codForm">
            
        <center><font color="white"><h1><i>Go Ahead !!</i></h1></font></center>
        
        <center><h4><font color="white"><i>Unescape special characters to ascii text.<br>The unescape() function decodes an encoded string.</i></font></h4></center>
        
<form role="form">
  <div class="form-group" style="margin-top:10;margin-left:300;">
    <label for="input_string"><h4><font color="white">Type or paste text to unescape.:</font></h4>
        <textarea class="form-control" rows="3" style="height:120;width:700;" onkeyup="this.form.code.value = unescape(this.form.text.value)" name="text" ></textarea></label>
  </div>
  <br /><br />  
    <div class="form-group" style="margin-top:1;margin-left:300;">
       <label for="input_string"><h4><font color="white">Select all the text that appears in the box below.</font></h4>
        <textarea class="form-control" rows="3" style="height:120;width:700;" readonly="readonly" name="code"></textarea></label> 
    </div>
</form>
        </form>
        
         <center><h5><font color="white"><i>The unescape() function is supported in all
 major browsers. Use unescape to decode strings. The Unescape script has
 been used quite a bit to obscure links and code injected in to websites
 when they have been hacked. The unescape() functions should not be used
 to decode URIs. Use decodeURI() functions instead.</i></font></h5></center>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   
    </body>
</html>