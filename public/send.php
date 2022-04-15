<?php
$my_email = 'marcel@lonsmin.cz';

$header = "From: admin@lonsmin.cz\r\n"; 
$header.= "Reply-To: ".$_POST["e-mail"]."\r\n";
$header.= "CC: marcel@lonsmin.cz";
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<!DOCTYPE html>
		<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		</head>			
		<body>';

$message = '<strong>Vaše stránka získala tyto údaje: <strong>';

$alertDone = "OK";
$alertError = "Error";

if($_POST['e-mail'] != "" || $_POST['telefon'] !="") {

	foreach ($_POST as $key => $value) {
		
		if ($value == 'true') {
			$value = 'Ano';
		}
		elseif($value == 'false'){
			$value = 'Ne';
		}
		elseif($value == 'undefined'){
			$value = 'Nevyplněno';
		}

		$message = $message.'<br>'.$key.': '.$value;
	}
	
	$message.='
	</body>
	</html>';
	mail($my_email,'lonsmin.cz',$message, $header);
	echo $alertDone;

}
else {
	echo $alertError;
}

