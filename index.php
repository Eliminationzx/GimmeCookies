<?PHP
// Define constants
define('DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('GimmeCookie', true);

// Include initiliziation module
require DIR . DS.'inc'.DS.'init.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="./inc/css/style.css" />
<link type="text/css" rel="stylesheet" href="./inc/css/<?=$css[$page]?>.css" />
	<title><?=$site['titl']?></title>
</head>
<body>
<?=$content?>
</body>
</html>