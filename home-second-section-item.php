
 <?php
       $single = get_single_all_itnews();
       foreach ($single as $singles): ?>

<div class="col-md-6">
    <div class="pattern">
        <a href="page.php?id=<?php echo $singles["id"] ?>" class="overlay item-news" style="background-image: url(<?php echo $singles["thumbnail"] ?>)">
            <div class="item-news-content">
                <h3><?php echo $singles["title"]; ?></h3>
                <span class="date"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
            </div>
        </a>
    </div>
</div>

<?php endforeach; ?>
