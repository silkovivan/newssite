<?php
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $text = $_POST['text'];
    $thumbnail = $_POST['thumbnail'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    

   // UPDATE single SET title='$title' WHERE id='$id' 
    //database connection
    $conn = new mysqli('localhost', 'root', '','news');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("UPDATE single SET title='$title', category_id='$category_id', text='$text', thumbnail='$thumbnail', date='$date', content='$content' WHERE id='$id'");
        $stmt->execute();
        echo "ITS OK, PO IDEE VSE WORK";
        $stmt->close();
		$conn->close();
    }
?>