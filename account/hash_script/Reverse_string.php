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
        
        <script type="text/javascript">
function reverse() {
text = "";
str = document.forms[0].elements[0].value=document.forms[0].elements[0].value;
for (i = 0; i <= str.length; i++)
text = str.substring(i, i+1) + text;
document.forms[0].elements[0].value = document.forms[0].elements[0].value = text;
}
</script>
        
        <center><font color="white"><h1><i>Go Ahead !!</i></h1></font></center>
        
        <center><h4><font color="white"><i>REVERSE A STRING <br>This will reverse any text that you enter</i></font></h4></center>
        
<form role="form">
  <div class="form-group" style="margin-top:50;margin-left:300;">
    <label for="input_string"><h4><font color="white">Enter String:</font></h4>
        <textarea class="form-control" rows="3" style="height:300;width:700;" name="text" ></textarea></label>
  </div>
  <br />
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td width="15%"><input name="B1" class="button" value="reverse" onclick="reverse()" type="button" style="margin-left:400;"></td><td width="15%"><input class="button" value="clear" name="clear" type="reset" style="margin-left:300;"></td><td width="70%"></td></tr></tbody></table>
</form>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   -->
    </body>
</html>