<?php 

$dbhost = "localhost";
$dbname = "news";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


//получение всех статей
function get_single_all(){
    global $db;
    $single = $db->query("SELECT * FROM single");
    return $single;
}

