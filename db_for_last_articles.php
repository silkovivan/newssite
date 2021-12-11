<?php 

$dbhost = "localhost";
$dbname = "news";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);



function get_single_all_electronics_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 1  ORDER BY date DESC LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_itnews_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 2 ORDER BY date DESC  LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_reviews_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 3 ORDER BY date DESC  LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_videocards_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 4 ORDER BY date DESC  LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_bitcoin_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 5 ORDER BY date DESC  LIMIT 1 OFFSET 0");
    return $single;
}


