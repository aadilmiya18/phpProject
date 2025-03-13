<?php

$host="localhost";
$username="phpmyadmin";
$password= "aadilmiya";
$db="discuss_project";


$conn = new PDO("mysql:host=$host;dbname=$db",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "database connected";

?>