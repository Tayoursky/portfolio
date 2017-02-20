<?php

$recepient = "youmail@test.loc";
$sitename = "www.yousite.test";


$name = substr(htmlspecialchars(trim($_POST["name"])), 0, 100);
$email = substr(htmlspecialchars(trim($_POST["email"])), 0, 100);
$text = substr(htmlspecialchars(trim($_POST["text"])), 0, 100000); 


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nE-mail: $email \nСообщение: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>