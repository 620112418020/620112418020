<?php

$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->set_charset("utf8");
    //$mysqli->query("SET NAMES utf8");
} catch (Exeeption $e){
    echo $e->getMessage();
    echo $e->getCode();
}
?>