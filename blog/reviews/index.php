<?php include("$_SERVER[DOCUMENT_ROOT]/blog/reviews/includes/header-category-reviews.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">
		<div class="cat-header overlay" style="background-image: url(img/blog/reviews/watch/1.jpg)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="cat-header-block">
							<h1>Обзоры</h1>
							<p>Все статьи и новости по теме: Обзоры</p>
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
                   
                    <?php include("$_SERVER[DOCUMENT_ROOT]/blog/reviews/includes/category-list-item-reviews.php"); ?>
                    
                    
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