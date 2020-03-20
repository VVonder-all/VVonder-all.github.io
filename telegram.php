<?php

/* https://api.telegram.org/bot1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4/getUpdates,
где , ХХХХХХХХХХХХХХХХХХХХХХХХХХ - токен вашего бота,полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email']
$token = "1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4";
$chat_id = "-404497460";
$arr = array(
	'Имя отправителя' => $name, 
	'Телефон' => $phone
	'Email' => $email
);

foreach ($arr as $key => $value) {
	$txt .= "<br>" .$kay. "</br>" .$value. "%0A";
};

$sendToTeelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id} $parse_mode=html&text={$txt}","r");

if ($sendToTeelegram) {
	header('Location: index.html');
} else {
	echo "Error";
}
?>

