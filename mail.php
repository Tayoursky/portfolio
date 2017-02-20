<?php

$recepient = "youmail@test.loc";
$sitename = "www.yousite.test";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$text = trim($_GET["text"]);

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);

$name = trim($name);
$email = trim($email);
$text = trim($text);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nE-mail: $email \nСообщение: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");