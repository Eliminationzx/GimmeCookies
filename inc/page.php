<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$page = (int)$_GET['page'];

switch($page) {
    case 1:
        require DIR . DS.'modules'.DS.'main.php';
    	break;
    case 2:
    	require DIR . DS.'modules'.DS.'trans.php';
    	break;
     default:
        header('Location: ./main');
        die;
}