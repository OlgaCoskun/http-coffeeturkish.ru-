<?php

$recepient = "zakaz@coffeeturkish.ru, ovin999@gmail.com, kitaigorod7@yandex.ru";
$sitename = "Кофе";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone \n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
if($name != "" && $phone != "")
{

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");	
}

