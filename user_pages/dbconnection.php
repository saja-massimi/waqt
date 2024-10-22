<?php

$server="localhost";
$username="root";
$password="";
$dbname="tick&style";

$dsn="mysql:host=$server;dbname=$dbname";
try{
$dbconnection=new PDO ($dsn,$username,$password);

// echo "connect";

}catch (PDOException $error){
echo $error;
}


?>

<?php
$file_image=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];








?>