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
	<title>special name</title>
</head>
<body>
<?=$content?>
</body>
</html>