<?php

require 'Medoo.php';

// Using Medoo namespace
use Medoo\Medoo;

$db = new Medoo([
 
 'database_type'=>'mysql',
 'database_name'=>'database_name',
 'server'=>'server',
 'username'=>'username',
 'password'=>'password',
 'charset'=>'utf8',
 
]);

// Format data for mySQL

$request_date = date('Y-m-d');
$time = date('H:i:s');
$page = $_SERVER['HTTP_HOST'];

$itinerary = htmlspecialchars($_POST['Фото-маршрут']);
$package1 = htmlspecialchars($_POST['Пакет']);
$email = htmlspecialchars($_POST['Email']);
$message = htmlspecialchars($_POST['Сообщение']);

// Make record in mySQL table

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
