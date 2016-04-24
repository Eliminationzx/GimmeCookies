<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

date_default_timezone_set('UTC');

require DIR . DS.'inc'.DS.'conf.php';
require DIR . DS.'inc'.DS.'functions.php';
require DIR . DS.'inc'.DS.'page.php';