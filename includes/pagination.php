<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'news');

$results_per_page = 10;

$sql = "SELECT * FROM single ";

// $sql = "SELECT * FROM single WHERE category_id = 4";

$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

$pagLink = "";   

$number_of_pages = ceil($number_of_results/$results_per_page);

for ($page=1; $page<=$number_of_pages;$page++) {
    '<a href="?page=' . $page . '" >' . $page . '</a> ';

}

if (!isset($_GET['page'])){
    $page = 1;
    } else {
        $page = $_GET['page'];
    }

$this_page_first_result = ($page-1)*$results_per_page;


$sql = "SELECT * FROM single ORDER BY date DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;

// $sql = "SELECT * FROM single WHERE category_id = 4 LIMIT " . $this_page_first_result . ',' . $results_per_page;


$category = 1;
$sqlс = "SELECT * FROM single  LIMIT  " . $this_page_first_result . ',' . $results_per_page;


$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $row['id'] . ' ' . $row['title'] . '<br>';
    $data[]=$row;
}

?>