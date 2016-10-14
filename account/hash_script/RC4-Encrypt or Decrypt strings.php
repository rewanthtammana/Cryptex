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
        
        <form name="rc4">
        
            <script type="text/javascript">
var dg='';function makeArray(n){for(var i=1;i<=n;i++){this[i]=0}return this}function rc4(a,b){var i,x,y,t,x2;status("rc4");s=makeArray(0);for(i=0;i<256;i++){s[i]=i}y=0;for(x=0;x<256;x++){y=(a.charCodeAt(x%a.length)+s[x]+y)%256;t=s[x];s[x]=s[y];s[y]=t}x=0;y=0;var z="";for(x=0;x<b.length;x++){x2=x%256;y=(s[x2]+y)%256;t=s[x2];s[x2]=s[y];s[y]=t;z+=String.fromCharCode((b.charCodeAt(x)^s[(s[x2]+s[y])%256]))}return z}function badd(a,b){var r='';var c=0;while(a||b){c=chop(a)+chop(b)+c;a=a.slice(0,-1);b=b.slice(0,-1);if(c&1){r="1"+r}else{r="0"+r}c>>=1}if(c){r="1"+r}return r}function chop(a){if(a.length){return parseInt(a.charAt(a.length-1))}else{return 0}}function bsub(a,b){var r='';var c=0;while(a){c=chop(a)-chop(b)-c;a=a.slice(0,-1);b=b.slice(0,-1);if(c==0){r="0"+r}if(c==1){r="1"+r;c=0}if(c==-1){r="1"+r;c=1}if(c==-2){r="0"+r;c=1}}if(b||c){return''}return bnorm(r)}function bnorm(r){var i=r.indexOf('1');if(i==-1){return'0'}else{return r.substr(i)}}function bmul(a,b){var r='';var p='';while(a){if(chop(a)=='1'){r=badd(r,b+p)}a=a.slice(0,-1);p+='0'}return r}function bmod(a,m){return bdiv(a,m).mod}function bdiv(a,m){var b=m.length,al=a.length;var p='',d;this.q='';for(n=0;n<al;n++){p=p+a.charAt(n);if(p.length<b||(d=bsub(p,m))==''){this.q+='0'}else{if(this.q.charAt(0)=='0'){this.q='1'}else{this.q+="1"}p=d}}this.mod=bnorm(p);return this}function bmodexp(x,y,m){var r='1';status("bmodexp "+x+" "+y+" "+m);while(y){if(chop(y)==1){r=bmod(bmul(r,x),m)}y=y.slice(0,y.length-1);x=bmod(bmul(x,x),m)}return bnorm(r)}function modexp(x,y,m){return b2t(bmodexp(t2b(x),t2b(y),t2b(m)))}function i2b(i){var r='';while(i){if(i&1){r="1"+r}else{r="0"+r}i>>=1}return r?r:'0'}function t2b(s){var r='';if(s==''){return'0'}while(s.length){var i=s.charCodeAt(0);s=s.substr(1);for(n=0;n<8;n++){r=((i&1)?'1':'0')+r;i>>=1}}return bnorm(r)}function b2t(b){var r='';var v=0;var m=1;while(b.length){v|=chop(b)*m;b=b.slice(0,-1);m<<=1;if(m==256||b==''){r+=String.fromCharCode(v);v=0;m=1}}return r}b64s='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_"';function textToBase64(t){status("t 2 b64");var r='';var m=0;var a=0;var b=t.length-1;var c;for(n=0;n<=b;n++){c=t.charCodeAt(n);r+=b64s.charAt((c<<m|a)&63);a=c>>(6-m);m+=2;if(m==6||n==b){r+=b64s.charAt(a);if((n%45)==44){r+="\n"}m=0;a=0}}return r}function base64ToText(t){status("b64 2 t");var r='';var m=0;var a=0;var c;for(n=0;n<t.length;n++){c=b64s.indexOf(t.charAt(n));if(c>=0){if(m){r+=String.fromCharCode((c<<(8-m))&255|a)}a=c>>m;m+=2;if(m==8){m=0}}}return r}function rand(n){return Math.floor(Math.random()*n)}function rstring(s,l){var r="";var a=s.length;while(l>0){r+=s.charAt(rand(a))}return r}function key2(k){var l=k.length;var a=l;var r='';while(l--){r+=k.charAt((l*3)%a)}return r}function rsaEncrypt(a,b,c,d){status("encrypt");if(d.length>=a){var e=rc4(rstring(d,a),rstring(d,a));e=b2t(bmod(t2b(e),t2b(c)));alert("sessionkey="+e);return modexp(e,b,c)+rc4(key2(e),rc4(e,d))}else{return modexp(d,b,c)}}function rsaDecrypt(a,b,c,d){status("decrypt");if(d.length<=a){return modexp(d,b,c)}else{var e=d.substr(0,a);d=d.substr(a);e=modexp(e,b,c);alert("sessionkey="+e);return rc4(e,rc4(key2(e,d),d))}}function trim2(d){return d.substr(0,d.lastIndexOf('1')+1)}function bgcd(u,v){var d,t;while(1){d=bsub(v,u);if(d=='0'){return u}if(d){if(d.substr(-1)=='0'){v=d.substr(0,d.lastIndexOf('1')+1)}else v=d}else{t=v;v=u;u=t}}}function isPrime(p){var n,p1,p12,t;p1=bsub(p,'1');t=p1.length-p1.lastIndexOf('1');p12=trim2(p1);for(n=0;n<2;n+=mrtest(p,p1,p12,t)){if(n<0)return 0}return 1}function mrtest(p,b,c,t){var n,a,u;a='1'+rstring('01',Math.floor(p.length/2));u=bmodexp(a,c,p);if(u=='1'){return 1}for(n=0;n<t;n++){u=bmod(bmul(u,u),p);if(u=='1')return-100;if(u==b)return 1}return-100}pfactors='11100011001110101111000110001101';function prime(a){var p='1'+rstring('001',a-2)+'1';while(!isPrime(p)){p=badd(p,'10')}alert("p is "+p);return p}function genkey(a){q=prime(a);do{p=q;q=prime(a)}while(bgcd(p,q)!='1')p1q1=bmul(bsub(p,'1'),bsub(q,'1'));n='1'+rstring('001',Math.floor(a/3)+2);alert('n is '+n);factorMe=badd(bmul(p1q1,n),'1');alert('factor is '+factorMe);e='1';d=bgcd(factorMe,'11100011001110101111000110001101');alert('d='+d);if(d=='1'&&e=='1'){alert('Factoring failed '+factorMe+' p='+p+' q='+q)}e=bmul(e,d);r=bdiv(factorMe,d);d=r.q;if(r.mod!='0'){alert('Mod Error 2!')}this.mod=b2t(bmul(p,q));this.pub=b2t(e);this.priv=b2t(d)}function status(a){}function rc4encrypt(){document.rc4.text.value=textToBase64(rc4(document.rc4.key.value,document.rc4.text.value))}function rc4decrypt(){document.rc4.text.value=(rc4(document.rc4.key.value,base64ToText(document.rc4.text.value)))}
</script>
            
        <center><font color="white"><h1><i>Go Ahead !!</i></h1></font></center>
            
            <center><h4><font color="white"><i>RC4 algorithm works on an array of 256 bytes to generate a pseudo random number sequence which is used as keystream to encrypt data.</i></font></h4></center>
        
<form role="form">
  <div class="form-group" style="margin-top:50;margin-left:300;">
    <label for="input_string"><h4><font color="white">Type or paste in the text you want to encrypt or decrypt :</font></h4>
        <textarea class="form-control" rows="3" style="height:150;width:700;" name="text" ></textarea></label>
  </div>
  <br /><br />
  <div class="form-group" style="margin-top:1;margin-left:300;">
      <label for="input_string"><h4><font color="white">Enter KeyPass (1-200) maxlength = 200 symbols</font></h4>
          <input name="key" maxlength="200" value="" type="text">
      </label>
    </div> 
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td width="15%"><input name="B1" class="button" value="encrypt" onclick="rc4.value=rc4encrypt(text.value,key.value);" type="button" style="margin-left:300;"></td><td width="15%"><input name="B2" class="button" value="decrypt" onclick="rc4.value=rc4decrypt(text.value,key.value);" type="button" style="margin-left:100;"></td><td width="15%"><input class="button" value="clear" name="clear" type="reset"></td></tr></table>
    
</form>
        </form>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>   -->
    </body>
</html>