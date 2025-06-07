<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if (!isset($update["message"])) {
    exit;
}

$chatId = $update["message"]["chat"]["id"];
$messageText = $update["message"]["text"];

$responseText = "أهلاً بك! لقد أرسلت: $messageText";

file_get_contents("https://api.telegram.org/bot7836576212:AAFThulvyWtygwT8WN6LJ_0-cfmjBB2SdXQ/sendMessage?chat_id=$chatId&text=" . urlencode($responseText));
?>
