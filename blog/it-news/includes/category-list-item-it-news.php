<?php require("$_SERVER[DOCUMENT_ROOT]/blog/it-news/includes/pagination-it-news.php"); ?>


<?php
        
       foreach ($data as $results): 
    
       ?>

<a href="page.php?id=<?php echo $results["id"] ?>" class="cat-list-item">
    <div class="row">
        <div class="col-sm-6">
            <div class="pattern">
                <img src="<?php echo $results["thumbnail"] ?>" alt="<?php echo $results["title"] ?>" class="img-responsive img-width overlay">
            </div>
        </div>
        <div class="col-sm-6">
            <h3><?php echo $results["title"] ?></h3>
            <div class="date"><?php echo date("d/m/Y", strtotime($results["date"])); ?></div>
            <p><?php echo $string = mb_substr($results["text"], 0, 150); ?>...</p>
        </div>
    </div>
</a>
 

<?php endforeach; ?>
