<?php

/* https://api.telegram.org/bot1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4/getUpdates,
где , ХХХХХХХХХХХХХХХХХХХХХХХХХХ - токен вашего бота,полученный ранее */

$name = $_POST['user_name'];
$message = $_POST['user_message'];
$token = "1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4";
$chat_id = "-404497460";
$arr = array(
	'Имя отправителя' => $name, 
	'Сообщение' => $message
);

foreach ($arr as $key => $value) {
	$txt .= "<br>" .$kay. "</br>" .$value. "%0A";
};

$sendToTeelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id} $parse_mode=html&text={$txt}","r");

if ($sendToTeelegram) {
	header('Location: thank-you.html');
} else {
	echo "Error";
}
?>

