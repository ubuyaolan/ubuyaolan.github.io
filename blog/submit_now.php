<?PHP 
$to = "549765558@qq.com"; 
$subject = "信息来自作品集网站";
$headers = "Name: Form Coyier";
$forward = 1;
$location = "result.php";

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 



$msg = "Message sent from website on date  $date, hour: $time.\n\n\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n\n"; 
	}
}

mail($to, $subject, $msg); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "你的消息我已收到，我会尽快联系你."; 
} 

?>