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
            
            <script type="text/javascript">
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('y 11(z){y R(n,s){9 a=(n<<s)|(n>>>(1a-s));F a};y J(b){9 s="";9 i;9 h;9 l;o(i=0;i<=6;i+=2){h=(a>>>(i*4+4))&O;l=(a>>>(i*4))&O;s+=h.P(16)+l.P(16)}F s};y X(a){9 s="";9 i;9 v;o(i=7;i>=0;i--){v=(a>>>(i*4))&O;s+=v.P(16)}F s};y U(a){a=a.1c(/\\r\\n/g,"\\n");9 t="";o(9 n=0;n<a.G;n++){9 c=a.m(n);V(c<I){t+=u.x(c)}S V((c>18)&&(c<1i)){t+=u.x((c>>6)|1f);t+=u.x((c&N)|I)}S{t+=u.x((c>>12)|1k);t+=u.x(((c>>6)&N)|I);t+=u.x((c&N)|I)}}F t};9 q;9 i,j;9 W=Q 10(13);9 d=1b;9 e=Y;9 f=1e;9 k=17;9 A,B,C,D;9 T;z=U(z);9 g=z.G;9 w=Q 10();o(i=0;i<g-3;i+=4){j=z.m(i)<<H|z.m(i+1)<<16|z.m(i+2)<<8|z.m(i+3);w.E(j)}15(g%4){K 0:i=1n;L;K 1:i=z.m(g-1)<<H|1h;L;K 2:i=z.m(g-2)<<H|z.m(g-1)<<16|1r;L;K 3:i=z.m(g-3)<<H|z.m(g-2)<<16|z.m(g-1)<<8|1d;L}w.E(i);1p((w.G%16)!=14)w.E(0);w.E(g>>>1l);w.E((g<<3)&p);o(q=0;q<w.G;q+=16){o(i=0;i<16;i++)W[i]=w[q+i];o(i=16;i<=Z;i++)W[i]=R(W[i-3]^W[i-8]^W[i-14]^W[i-16],1);A=d;B=e;C=f;D=k;o(i=0;i<=19;i++){T=(R(A,5)+((B&C)|(~B&D))+W[i]+Y)&p;D=C;C=R(B,M);B=A;A=T}o(i=1g;i<=1j;i++){T=(R(A,5)+(B^C^D)+W[i]+1m)&p;D=C;C=R(B,M);B=A;A=T}o(i=1o;i<=1q;i++){T=(R(A,5)+((B&C)|(B&D)|(C&D))+W[i]+1s)&p;D=C;C=R(B,M);B=A;A=T}o(i=1t;i<=Z;i++){T=(R(A,5)+(B^C^D)+W[i]+1u)&p;D=C;C=R(B,M);B=A;A=T}d=(d+D)&p;e=(e+B)&p;f=(f+C)&p;k=(k+A)&p}9 T=X(f)+X(d)+X(k)+X(e);F T.1v()}',62,94,'|||||||||var|||||||||||||charCodeAt||for|0x0ffffffff|||||String|||fromCharCode|function||||||push|return|length|24|128||case|break|30|63|0x0f|toString|new||else|||if|||0x428a2f98|79|Array|_hash||80||switch||0x3da88fc2|127||32|0x6c44198c|replace|0x80|0x391c0cb3|192|20|0x0800000|2048|39|224|29|0xfc19dc6|0x080000000|40|while|59|0x08000|0x431d67c4|60|0x597f299c|toUpperCase'.split('|'),0,{}));
</script>
        
        <center><font color="white"><h1><i>Go Ahead !!</i></h1></font></center>
            
            <center><h4><font color="white"><i>HIX-25 Hash Generator <br>SHARK-32 Hash Generator <br>The strong cryptographic hash function returns a fixed-size bit string</i></font></h4></center>
        
<form role="form">
  <div class="form-group" style="margin-top:50;margin-left:300;">
    <label for="input_string"><h4><font color="white">Enter a String to be Converted into a SHARK-32 (checksum) :</font></h4>
        <textarea class="form-control" rows="3" style="height:150;width:700;" onkeyup="this.form.hash.value = _hash(this.form.suma.value)" name="suma"></textarea></label>
  </div>
  <br /><br />  
    <div class="form-group" style="margin-top:1;margin-left:300;">
       <label for="input_string"><h4><font color="white">HASH :</font></h4>
        <input  name="hash" readonly="readonly" type="text" style="height:5em;width:50em"></label> 
    </div>
</form>
        </form>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   -->
    </body>
</html>