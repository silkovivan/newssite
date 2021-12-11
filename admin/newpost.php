<?php include("$_SERVER[DOCUMENT_ROOT]/admin/header-editing.php"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<base href="/">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
	
	<link rel="stylesheet" href="css/main1.css">
	<link rel="stylesheet" href="css/text2html.css">
	<script type="text/javascript" src="js/text2html.js"></script>


</head>

<body>

	<header class="top-line">

		<a href="/admin" class="logo logo-litera">создание поста</a>

	</header>



	<div class="article-content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md">

					<article class="main-article">

						<div class="article-body">


							<form method="POST" action="admin/connect2.php" >

								<div class="form-group">
								  <label for="ID">ID Статьи</label>
								  <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ID Статьи" value="">
								  
								 
								  <small id="emailHelp" class="form-text text-muted">Лучше не изменять</small>
								</div>
   		
								<div class="form-group">
								  <label for="Title">Название статьи</label>
								  
								  <input type="text" name="title" id="title" class="form-control"  value="" placeholder="Название статьи">

								</div>

				
								
								<div class="form-group">
									<label for="exampleFormControlSelect1">Категория</label>
									<select  class="custom-select mr-sm-2" id="category_id" name="category_id">
										<option>Выбери категорию</option>
										<option value="1">Электроника</option>
										<option value="2">Новости IT</option>
										<option value="3">Обзоры</option>
										<option value="4">Видеокарты</option>
										<option value="5">Биткоин</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleFormControlTextarea1">Введите описание статьи</label>
									<textarea class="form-control" id="text" name="text" rows="3"></textarea>
								</div>

								<div class="form-group">
								  <label for="Title">Ссылка на Thumbnail (Главная картинка на главной странице и в статье)</label>
								  
								  <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="" placeholder="https://">
								</div>

								<div class="form-group">
									<label for="start">Дата статьи</label>

									<input type="date" name="date" id="start" name="trip-start"
										value=""
										min="2021-09-01" max="2023-12-31">


								</div>	

								<div ng-app="textAngularTest" ng-init="anime" class="container app">
								<div ng-init="test='Введите текст'">
								<text-angular ng-model="test"></text-angular>

								<p>   </p>

						

								<h3>Исходный текст в HTML</h3>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Введите описание статьи</label>
									<textarea class="form-control" name="content" ng-model="test" style="width: 100%" rows="15"></textarea>
								</div>
 								</div>

								</div>

								<button type="submit" name="update" class="btn btn-primary" onClick="update()">Создать статью</button>
								<p>  </p>

					
								</div>
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