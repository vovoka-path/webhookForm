<?php

// In the $token variable, you need to insert the token that @botFather sent us

$token = "token";

// Insert chat_id here (with "-")

$chat_id = "chat_id";

// Forming a message for Telegram in a variable $txt:

$txt = htmlspecialchars($_POST['Itinerary']) . "%0A";
$txt .= "%0A" . htmlspecialchars($_POST['Package']) . "%0A";
$txt .= "%0A" . htmlspecialchars($_POST['Email']) . "%0A";
$txt .= "%0A" . "<b>" . "Сообщение: ". "%0A %0A" . "</b>" . htmlspecialchars($_POST['Message']) . "%0A";
$txt .= "%0A" . "cyp.photo" . "%0A" . " · · · · · · · · · · · · · · · · · ·" . "%0A" . "CRM: linkCRM"; // linkCRM - link for quick transition to the order card in CRM

// Send data to the telegram bot
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    
/* Form fields on the site:

1. Itinerary
2. Package
3. Email
4. Message

*/

?>
