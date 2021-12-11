<?php include("$_SERVER[DOCUMENT_ROOT]/admin/header-editing.php"); ?>

<?php include("$_SERVER[DOCUMENT_ROOT]/admin/top-line-blog.php"); ?>

<div class="pattern pattern-cat-header">


<form action="/db.php"></form>



</div>

<div class="cat-list-first">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md">

                <a class="btnflat large flat-default" style="text-decoration: none; font-weight: 900; display: flex; align-items: flex-start; justify-content: center; width: 100%; color: white;" href="admin/newpost.php" role="button">СОЗДАТЬ НОВУЮ СТАТЬЮ</a>

                <p> </p>

                    <div class="cat-list-wrap">
                   
                    <?php include("$_SERVER[DOCUMENT_ROOT]/includes/category-list-item-blog-admin.php"); ?>
                    
                    
                    </div>


    <?php include_once("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-desktop.php"); ?>

    </div>
</div>


<?php include("$_SERVER[DOCUMENT_ROOT]/includes/pagination-pages-mobile.php"); ?>

</div>

<?php include("$_SERVER[DOCUMENT_ROOT]/footer.php"); ?>