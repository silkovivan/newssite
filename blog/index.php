<?php include("$_SERVER[DOCUMENT_ROOT]/includes/header-category-blog.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">
		<div class="cat-header overlay" style="background-image: url(https://www.notebookcheck-ru.com/fileadmin/Notebooks/Apple/iPhone_13_Pro/Produktfotos_Apple_iPhone_13_Pro_1448.jpg)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="cat-header-block">
							<h1>Все статьи на сайте TECHWARS</h1>
							<p>На данной странице расположены все статьи из всех категорий сайта.</p>
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
                   
                    <?php include("$_SERVER[DOCUMENT_ROOT]/includes/category-list-item-blog.php"); ?>
                    
                    
                    </div>


    <?php include_once("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-desktop.php"); ?>


    </div>


        
<div class="col-md-4">

<?php include_once("$_SERVER[DOCUMENT_ROOT]/main-side.php"); ?>



</div>

</div>


<?php include("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-mobile.php"); ?>

</div>

<?php include("$_SERVER[DOCUMENT_ROOT]/footer.php"); ?>