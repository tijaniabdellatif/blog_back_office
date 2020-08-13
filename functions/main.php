<?php 

$db_host = "localhost";
$db_name = "my_blog";
$db_user = "sore";
$db_pass = "secret";

try
{
 
    $con = new PDO("mysql:host=".$db_host.";dbname=".$db_name,$db_user,$db_pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
     
}catch(PDOException $e)


{
    // var_dump($e);
    die("Error in database :" . '<pre >'.utf8_encode($e).'<pre/>');
}