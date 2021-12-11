<?php include("$_SERVER[DOCUMENT_ROOT]/admin/header-editing.php"); ?>


<!-- Подключение базы данных  -->
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/dbtest.php"); ?>
<?php require_once("$_SERVER[DOCUMENT_ROOT]/admin/dbcon.php"); ?>


<?php
$singles = get_single_by_id($_GET['id']);

?>

<?php $category_name = get_category_by_id($singles["category_id"]); ?>




<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<base href="/">

	<title>TECHWARS</title>
	<meta name="description" content="Новости электроники, технологий, современных гаджетов, и другая актуальная информация современной IT индустрии">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#202222">


	<!-- ANGULAR JS TEXT <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<link rel="stylesheet" href="css/main1.css">
	<link rel="stylesheet" href="css/text2html.css">
	<script type="text/javascript" src="js/text2html.js"></script>
	<script>$('.datepicker').datepicker();</script>
</head>

<body>

	<header class="top-line">

		<a href="/admin" class="logo logo-litera">Админ Панель | Редактирование</a>

		<div class="mobile-menu-button"><i class="fa fa-bars"></i> Меню</div>
		<nav class="main-menu top-menu">
			<ul>
			</ul>
		</nav>

	</header>



	<div class="article-content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md">

					<article class="main-article">

						<div class="article-body">


							<form method="POST" action="admin/connect.php" &id="<?php echo $singles["id"] ?>" >

								<?php

								if(isset($_GET['id'])){
									$id = $_GET['id'];
									$query = "SELECT * FROM single WHERE id=''$id'";
									$query_run = mysqli_query($con, $query);
 								}

								?>

								<div class="form-group">
								  <label for="ID">ID Статьи</label>
								  <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ID Статьи" value="<?php echo $singles["id"] ?>">
								  
								 
								  <small id="emailHelp" class="form-text text-muted">Лучше не изменять</small>
								</div>
   		
								<div class="form-group">
								  <label for="Title">Название статьи</label>
								  
								  <input type="text" name="title" id="title" class="form-control"  value="<?php echo $singles["title"] ?>" placeholder="Название статьи">

								</div>

				
								
								<div class="form-group">
									<label for="exampleFormControlSelect1">Категория</label>
									<select  class="custom-select mr-sm-2" id="category_id" name="category_id">
										<option>Выбери категорию</option>
										<option value="1" <?php if($singles["category_id"]=="1") echo 'selected="selected"'; ?>>Электроника</option>
										<option value="2" <?php if($singles["category_id"]=="2") echo 'selected="selected"'; ?>>Новости IT</option>
										<option value="3" <?php if($singles["category_id"]=="3") echo 'selected="selected"'; ?>>Обзоры</option>
										<option value="4" <?php if($singles["category_id"]=="4") echo 'selected="selected"'; ?>>Видеокарты</option>
										<option value="5" <?php if($singles["category_id"]=="5") echo 'selected="selected"'; ?>>Биткоин</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleFormControlTextarea1">Введите описание статьи</label>
									<textarea class="form-control" id="text" name="text" rows="3"><?php echo $singles["text"] ?></textarea>
								</div>

								<div class="form-group">
								  <label for="Title">Ссылка на Thumbnail (Главная картинка на главной странице и в статье)</label>
								  
								  <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?php echo $singles["thumbnail"] ?>" placeholder="https://">
								</div>

								<div class="form-group">
									<label for="start">Дата статьи</label>

									<input type="date" name="date" id="start" name="trip-start"
										value="<?php echo $singles["date"] ?>"
										min="2021-09-01" max="2023-12-31">


								</div>	

								<div ng-app="textAngularTest" ng-init="anime" class="container app">
								<div ng-init="test='<?php 
								   echo htmlspecialchars($singles["content"])?>'">
								<text-angular ng-model="test"></text-angular>

								<p>   </p>

						

								<h3>Исходный текст в HTML</h3>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Введите описание статьи</label>
									<textarea class="form-control" name="content" ng-model="test" style="width: 100%" rows="15"></textarea>
								</div>
 								</div>

								</div>

								<button type="submit" name="update" class="btnflat large flat-default" style="text-decoration: none; font-weight: 900; display: flex; align-items: flex-start; justify-content: center; width: 100%; color: white;" onClick="update()">Update</button>
								<p>  </p>
							 

								</div>

								
								</div>
								
								</div>
							
							</form>

						</div>

					</article>

				</div>



			</div>
		</div>
	</div>

		<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
		<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
		
	</body>
</html>