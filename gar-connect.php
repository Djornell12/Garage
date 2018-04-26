<?php
$servername ='localhost';
$dbname ="garage";
$username ="root";
$password ='root';


try{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo "connectie mislukt: ". $e->getMessage();
}










/**
 * Created by PhpStorm.
 * User: makamaka
 * Date: 16-04-18
 * Time: 12:25
 */