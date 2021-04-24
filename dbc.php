<?php

$server="localhost";
$dbname="laravel";
$user="root";
$pass="";

$conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
if($conn){
     //echo "Connected";
}else{echo "Disconnected";}




?>