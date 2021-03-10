<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
//(инструкция: https://junnot.info/otpravka-dannyih-v-telegram/)
$token = "token";

//Сюда вставляем chat_id
$chat_id = "-chat_id";

/* Поля формы на сайте:

1. Фото-маршрут
2. Пакет
3. Email
4. Сообщение

*/

//Формируем сообщение для Telegram в переменной $txt:

$txt = htmlspecialchars($_POST['Фото-маршрут']) . "%0A";
$txt .= "%0A" . htmlspecialchars($_POST['Пакет']) . "%0A";
$txt .= "%0A" . htmlspecialchars($_POST['Email']) . "%0A";
$txt .= "%0A" . "<b>" . "Сообщение: ". "%0A %0A" . "</b>" . htmlspecialchars($_POST['Сообщение']) . "%0A";
$txt .= "%0A" . "cyp.photo" . "%0A" . " · · · · · · · · · · · · · · · · · ·" . "%0A" . "CRM: linkCRM"; // linkCRM - ссылка для быстрого перехода на карточку заказа в CRM

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    
?>
