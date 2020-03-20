<?php


if (isset($_POST['form'])) { // Это ид кнопки на которую нажмут и сработает php скрипт - Убрать если просто сообщение при заходе на страницу ( внизу скобку убрать }

$name = $_POST['user_name'];// это что ловим с формы 
$phone = $_POST['user_phone']; // это что ловим с формы
$email = $_POST['user_email']; // это что ловим с формы
// Можно приписывать так если ловить не надо 
// $zakaz = "Заказ с сайты XXX";

$token = "1105355730:AAEY4As7XjWEOOYiJBH4ud_lplib0r_MDL4"; // Это ТОКЕН
$chat_id = "-404497460"; // Это ИД группы

$arr = array(

// 'Заказ с сайты: ' => $zakaz,
  'Телефон: ' => $phone,
  'Имя: ' => $name,
  'Мыло' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// Это условие Если отправлено редирект если нет  ошибка Можно убрать!
if ($sendToTelegram) {
  header('Location: url.html');
} else {
  echo "Error";
}
// ид кнопки
}
?>
