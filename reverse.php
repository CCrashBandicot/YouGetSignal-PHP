<html>
<head><style>
.btn-6d {
    border: 2px dashed #226fbe;
}
 
.btn-6d:hover {
    background: transparent;
    color: #226fbe;
}</style>
<SCRIPT LANGUAGE="JavaScript">

var rev = "fwd";
function titlebar(val)
{
var msg = "./Reverse Domain";
var res = " ";
var speed = 100;
var pos = val;
msg = "./Reverse Domain";
var le = msg.length;
if(rev == "fwd"){
if(pos < le){
pos = pos+1;
scroll = msg.substr(0,pos);
document.title = scroll;
timer = window.setTimeout("titlebar("+pos+")",speed);}
else{
rev = "bwd";
timer = window.setTimeout("titlebar("+pos+")",speed);}}
else{
if(pos > 0){
pos = pos-1;
var ale = le-pos;
scrol = msg.substr(ale,le);
document.title = scrol;
timer = window.setTimeout("titlebar("+pos+")",speed);}
else{
rev = "fwd";
timer = window.setTimeout("titlebar("+pos+")",speed);
}}}
titlebar(0);
</script></head><body background="http://s.ytimg.com/yt/imgbin/www-refreshbg-vflC3wnbM.png">
<center><h1><font style="text-shadow: 0px 0px 1px rgb(255, 0, 0);" face="tahoma">Reverse Domain via YouGetSignal</font></h1>
	<form action="" method="POST">
	<strong>IP/Host :</strong> <input size='60' value='' name='url' /> <button class="btn btn-6 btn-6d" name="submit"> Submit</button>
    </form>
</center>


</body>
</html>

<?php
if($_POST){
$uri = $_POST['url'];
echo "<br><center><strong>Host IP :</strong>".gethostbyname($uri)."</center>";

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "http://domains.yougetsignal.com/domains.php");
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, "remoteAddress={$uri}");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $postResult = curl_exec($ch);
 curl_close($ch);
 if(preg_match_all("#\"domainCount\":\"(.*?)\"#",$postResult,$domain)) {
    $nigga = $domain[1];
}
foreach ($nigga as $domains) { echo "<center><strong>  [+] Total Websites:</strong> ".$domains."<br></center><br>"; echo "<center>===================</center><br>";    }
   if(preg_match_all("#\[([^\]]*)\]#",$postResult,$fuck)){
 $zebi = $fuck[1];
}
foreach ($zebi as $fucck) {  

if(preg_match_all("#\"(.*?)\", \"\"#",$fucck,$matches)) {  
        $klawi = $matches[1];
foreach ($klawi as $fuckaa)  { 

	echo "<center><strong>http://".$fuckaa."/</strong><br>";
 
  $save = fopen('Log.txt','ab');
  fwrite($save,"http://".$fuckaa."/\r\n");
  fclose($save);
} }} 
}


?>
