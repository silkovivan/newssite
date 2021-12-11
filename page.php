<?php require 'db.php' ?>
<?php
$singles = get_single_by_id($_GET['id']);
?>

<?php $category_eng = get_category_by_id_eng($singles["category_id"]); ?>


<?php $category_name = get_category_by_id($singles["category_id"]); ?>


<?php require 'header-page.php' ?>

<?php require 'top-line.php' ?>

	<header class="page-header overlay" style="background-image: url(<?php echo $singles["thumbnail"] ?>)">

		<div class="page-header-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 col-md-8">

						<div class="page-header-meta">


							<a href="/blog/<?php echo $category_eng ?>" class="page-category-link"><?php echo $category_name ?></a> <span class="date"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>

							<h1><?php echo $singles["title"] ?></h1>

							<div class="item-social">
								
								<div class="fa fa-share-alt" title="Поделиться в соц. сетях"></div>
								<div class="likely likely-custom" data-media="<?php echo $singles["thumbnail"] ?>" data-title="<?php echo $singles["title"] ?>">
									<div class="vkontakte" title="Поделиться Вконтакте">Вконтакте</div>
									<div class="facebook" title="Поделиться в Facebook">Facebook</div>
									<div class="twitter" title="Поделиться в Twitter">Twitter</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="article-content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-8">

					<article class="main-article">

						<nav class="breadcrumbs">
							<ul>
								<li><a href="/">Главная</a></li>
								<li><a href="/blog/<?php echo $category_eng ?>"><?php echo $category_name ?></a></li>
								<li class="active"><?php echo $singles["title"] ?></li>
							</ul>
						</nav>

						<div class="article-body">

							
							<!--   PHP CONTENT HERE -->
							<?php require 'content.php' ?>

						</div>

						<div class="read-more">
							<div class="read-more-header">ЧИТАТЬ ЕЩЕ:</div>

							<?php
								$single = get_single_random();
								foreach ($single as $singles): ?>
							<ul>
								<li><a href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a></li>
							</ul>
							
							
							<?php endforeach; ?>


						</div>
			
					</article>

				</div> 

				<div class="col-md-4">

				<?php include_once("$_SERVER[DOCUMENT_ROOT]/main-side-page.php"); ?>

				</div>

			</div>
		</div>
	</div>


<?php require 'footer.php' ?>