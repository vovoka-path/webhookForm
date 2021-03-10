<?php

require 'Medoo.php';

// Using Medoo namespace
use Medoo\Medoo;

$db = new Medoo([
 
 'database_type'=>'mysql',
 'database_name'=>'vh131491_clientscyp',
 'server'=>'185.154.54.6',
 'username'=>'vh131491_vovoka',
 'password'=>'tK8kS9dY5jcM4t',
 'charset'=>'utf8',
 
]);

// Форматирование данных для БД

$request_date = date('Y-m-d');
$time = date('H:i:s');
$page = $_SERVER['HTTP_HOST'];

$itinerary = htmlspecialchars($_POST['Фото-маршрут']);
$package1 = htmlspecialchars($_POST['Пакет']);
$email = htmlspecialchars($_POST['Email']);
$message = htmlspecialchars($_POST['Сообщение']);

// Запись в mySQL

$table = 'php';

$result = $db->insert(
 $table,
 [
 
 "id"=>"NULL",
 "request_date"=>$request_date,
 "time"=>$time,
 "itinerary"=>$itinerary,
 "package1"=>$package1,
 "message"=>$message,
 "email"=>$email,
 "page"=>$page,
 
 ]
 );

?>
