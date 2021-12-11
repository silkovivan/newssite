<?php include("$_SERVER[DOCUMENT_ROOT]/blog/electronics/includes/header-category-electronics.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">
		<div class="cat-header overlay" style="background-image: url(img/blog/electronics/autow/1.jpeg)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="cat-header-block">
							<h1>Электроника</h1>
							<p>Здесь собраны статьи категории Электроника</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="cat-list-first">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">

					<div class="all-posts-header">ВСЕ СТАТЬИ</div>


					<div class="cat-list-wrap">
					
					<?php include("$_SERVER[DOCUMENT_ROOT]/blog/electronics/includes/category-list-item-electronics.php"); ?>
					
					
                </div>


    <?php include("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-desktop.php"); ?>


    </div>


        
<div class="col-md-4">

<?php include_once("$_SERVER[DOCUMENT_ROOT]/main-side.php"); ?>



</div>

</div>


<?php include("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-mobile.php"); ?>

</div>

<?php include("$_SERVER[DOCUMENT_ROOT]/footer.php"); ?>