<?php
// Получение данных из HTML формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Токен вашего Telegram бота
$token = '@SereginMishelle';
// ID вашего чата или канала в Telegram
$chat_id = '@SereginMishelle';

// Формирование текста сообщения
$text = "Имя: $namenEmail: $emailnСообщение: $message";

// Отправка сообщения в Telegram
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text";
file_get_contents($url);

// Перенаправление пользователя после отправки
header('Location: index.html');
