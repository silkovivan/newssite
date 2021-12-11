<?php include("$_SERVER[DOCUMENT_ROOT]/blog/videocards/includes/header-category-videocards.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/includes/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">
		<div class="cat-header overlay" style="background-image: url(https://www.cnet.com/a/img/PKoFTX1jrGrSjWhWFhOycCST2zo=/2021/03/09/e01a6eb0-dcae-4dd2-b692-78b67a4898a3/amd-radeon-rx-6700-xt-dsc01520.jpg)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="cat-header-block">
							<h1>Видеокарты</h1>
							<p>Обзор самых известных видеокат. Также новости, слухи и тесты.</p>
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
                   
                    <?php include("$_SERVER[DOCUMENT_ROOT]/blog/videocards/includes/category-list-item-videocards.php"); ?>
                    
                    
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