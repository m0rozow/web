<?php

$title = "Главная страница";

require "template/header.php";
require "template/sidebar.php";

$url = explode("?", $_SERVER["REQUEST_URI"]);
$url = urldecode($url[0]);
$url = explode("/", $url);
$url = array_pop($url);

$pagelink = $url == "" ? "index" : $url;

if (!file_exists("contents/$pagelink.php"));
$pagelink = "404";

switch($pagelink)
{
    case "index":
        $title = "Главная страница";
        break;
    case "login":
        $title = "Вход";
        break;
    case "registration":
        $title = "Регистрация";
        break; 
    default:
        $title = "Ошибка";
}

$title = "Главная страница";

require "template/header.php";
require "template/sidebar.php";
require "contents/$pagelink.php";
require "template/footer.php";