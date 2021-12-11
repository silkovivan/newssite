<?php


define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'news');

function db_connect(){

    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
    or die ("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}

?>
<?php  

if(isset($_GET['action']))
{
    $action = $_GET['action'];
} else
$action = "";



if($action == "edit"){
    if(!isset($_GET['id']))
    header("Location: index.php");
    $id = (int)$_GET['id'];
}



?>

<?php 

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];



    $query = "UPDATE single SET title='$title' WHERE id='$id' ";
}


?>

<?php  
/*
function articles_edit($link, $id, $title){

$title = trim($title);
$id = (int)$id;

if ($title == '')
    return false;

    $sql = "UPDATE single SET title='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($link, $title), $id);

    $result = mysqli_query($link, $query);


}
*/
?>