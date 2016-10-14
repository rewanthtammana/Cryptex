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
        
        <center><h4><font color="white"><i>Escape characters or strings<br>Converts a string to its escaped representation.</i></font></h4></center>
        
<form role="form">
  <div class="form-group" style="margin-top:50;margin-left:300;">
    <label for="input_string"><h4><font color="white">Type or paste text to escape:</font></h4>
        <textarea class="form-control" rows="3" style="height:150;width:700;" name="text" onkeyup="this.form.code.value = escape(this.form.text.value)" ></textarea></label>
  </div>
  <br /><br />  
    <div class="form-group" style="margin-top:5;margin-left:300;">
       <label for="input_string"><h4><font color="white">Select all the text that appears in the box below.</font></h4>
        <textarea class="form-control" rows="3" style="height:150;width:700;" readonly="readonly" name="code"></textarea></label> 
    </div>
</form>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   -->
    </body>
</html>