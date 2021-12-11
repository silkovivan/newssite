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

function get_single_random(){
    global $db;
    $single = $db->query("SELECT * FROM single ORDER BY RAND(FLOOR(UNIX_TIMESTAMP()/2592000)) LIMIT 5");
    return $single;
}

//$sqlrandom = "SELECT * FROM single ORDER BY RAND(FLOOR(UNIX_TIMESTAMP()/2592000)) LIMIT 5";


//получения статьи по по ее id

function get_single_by_id($id){
    global $db;
  $single = $db->query("SELECT * FROM single WHERE id = $id");
    foreach ($single as $singles){
        return $singles;
    }
}

//получения названия категории по ее id

function get_category_by_id($id) {
    global $db;
  $categories = $db->query("SELECT * FROM categories WHERE id = $id");
    foreach ($categories as $category);{
        return $category["category_name"];
    }
}

function get_category_by_id_eng($id) {
    global $db;
  $categories = $db->query("SELECT * FROM categorieseng WHERE id = $id");
    foreach ($categories as $category);{
        return $category["category_eng"];
    }
}


////// HOME PAGE

function get_single_all_electronics_1(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 1 LIMIT 2 OFFSET 0");
    return $single;
}

function get_single_all_electronics_2(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 1 LIMIT 3 OFFSET 2");
    return $single;
}

function get_single_all_electronics_last_articles(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 1 LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_itnews(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 2 LIMIT 4 OFFSET 0");
    return $single;
}

function get_single_all_reviews(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 3 LIMIT 4 OFFSET 0");
    return $single;
}

function get_single_all_videocards(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 4 LIMIT 4 OFFSET 0");
    return $single;
}

function get_single_all_bitcoin_1(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 5 LIMIT 1 OFFSET 0");
    return $single;
}

function get_single_all_bitcoin_2(){
    global $db;
    $single = $db->query("SELECT * FROM single WHERE category_id = 5 LIMIT 2 OFFSET 1");
    return $single;
}

