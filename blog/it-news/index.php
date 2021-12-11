<?php include("$_SERVER[DOCUMENT_ROOT]/blog/it-news/includes/header-category-it-news.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">
		<div class="cat-header overlay" style="background-image: url(https://images.wallpaperscraft.ru/image/single/kod_programmirovanie_it_152538_1920x1080.jpg)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="cat-header-block">
							<h1>Новости IT | techwars</h1>
							<p>Самое важное из ИТ мира на сегодня: новости науки и высоких технологий, разработки, гаджетов, игр, бизнеса и другие.</p>
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
                   
                    <?php include("$_SERVER[DOCUMENT_ROOT]/blog/it-news/includes/category-list-item-it-news.php"); ?>
                    
                    
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