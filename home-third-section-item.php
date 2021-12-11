
 <?php
       $single = get_single_all_reviews();
       foreach ($single as $singles): ?>
<div class="col-md-3">
<div class="col-item col-item-dark">
    <a href="page.php?id=<?php echo $singles["id"] ?>">
        <img src="<?php echo $singles["thumbnail"] ?>" alt="<?php echo $singles["title"] ?>" class="img-responsive img-width overlay" title="<?php echo $singles["title"] ?>">
    </a>
    <div class="col-item-meta">
        <div class="item-comments" title="Количество комментариев">
            <span class="date"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
        </div>
    </div>
    <h4><a href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $string = mb_substr($singles["text"], 0, 150); ?>...</a></h4>
</div>
</div>

<?php endforeach; ?>
