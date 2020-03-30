<?php

$name = $_POST['user_name'];
$message = $_POST['user_message'];
$token = "1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4";
$chat_id = "1149295077";
$arr = array(
	'Имя отправителя' => $name, 
	'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>