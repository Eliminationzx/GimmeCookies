<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

$site['titl'] .= ' :: Control panel';

if ($_POST['login'] == $cp['login'] && 
    $_POST['password'] == $cp['password']) {
  $content = $storage;
} else {
  $content = '<p>Log in to continue</p>
<form name="connexion" action="'.echo ($_SERVER['PHP_SELF']).'" method="post">
  <table width="298" border="1">
<tr>
        <td width="102">Login :</td>
      <td width="180"><input name="login" type="text" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input name="password" type="text" size="30" maxlength="30" /></td>
      </tr>
    </table>
  <table width="298" border="0">
    <tr>
      <td><div align="center">
        <input name="enter" type="submit" value="Sign in" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>';
}
?>