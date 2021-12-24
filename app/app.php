<?php

$title = "Главная страница";

require_once "router.php";
require_once "base.php";
$url = Router::parse();

$pagelink = $url == "" ? "index" : $url;

if (!file_exists("contents/$pagelink.php"))
$pagelink = "404";

$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
    


$connection = [
    "dsn" => "mysql: host=localhost; dbname=web; charset=utf8",
    "user" => "root",
    "password" => "root",
    "options" => $options
];

unset ($options);

$base = new Base ($connection);

unset ($connection);

if(isset($_POST["send"]))
{
    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $password2 = $_POST["one_more_pass"];
  
    if($password != $password2)
        $info = "Пароли не совпали!";
    else
    {
        $userData = $base->saveUser($name, $login, $password);
        if($userData == false)
            $info = "Не зарегистрирован";
        else
            $info = "Зарегистрирован";
    }

  
}

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