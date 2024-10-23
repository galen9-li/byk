<?php
// Получение данных из HTML формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Токен вашего Telegram бота
$token = '7203448824:AAHx0A4eKQecKI3Kq1QKcEyeqMz62PQ_I9M';
// ID вашего чата или канала в Telegram
$chat_id = '1918137787';

// Формирование текста сообщения
$text = "Имя: $name Email: $email Сообщение: $message";

// Отправка сообщения в Telegram
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text";
file_get_contents($url);

// Перенаправление пользователя после отправки
header('Location: index.html');
