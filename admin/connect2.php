<?php
    //$id = $_POST['id'];
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

		$stmt = $conn->prepare("INSERT INTO single (id, title, text, thumbnail, date, comments, category_id, content) VALUES (NULL, '$title', '$text', '$thumbnail', '$date', '0', '$category_id', '$content')");


  //  INSERT INTO 'single' ('id', 'title', 'text', 'thumbnail', 'date', 'comments', 'category_id', 'content') VALUES (NULL, '4352345', '23452345', '234523452345', '2021-12-01', '1', 'twertwertwert', 'wretwertwert');

  //INSERT INTO `single` (`id`, `title`, `text`, `thumbnail`, `date`, `comments`, `category_id`, `content`) VALUES (NULL, 'TITLE', 'TEXT', 'THUMBNAIL', '2021-12-01', '0', 'CATEGORY_ID', 'CONTENT');

	//	$stmt = $conn->prepare("INSERT INTO single (title, category_id, text, thumbnail, date, content) values ('$title', '$category_id', '$text', '$thumbnail', '$date', '$content')");
       // $stmt->bind_param("ssssss", $title, $category_id, $text, $thumbnail, $date, $content);
        $stmt->execute();
        echo "ITS OK, PO IDEE VSE WORK";
        $stmt->close();
		$conn->close();
    }
?>