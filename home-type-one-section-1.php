
<?php
       $single = get_single_all_bitcoin_1();
       foreach ($single as $singles): ?>


<div class="col-md-7">
<div class="type-one-first">
    <a href="page.php?id=<?php echo $singles["id"] ?>" title="<?php echo $singles["title"] ?> " >
        <img src="<?php echo $singles["thumbnail"] ?>" alt="alt" class="img-responsive img-width">
    </a>
    <span class="date"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
    <h3><a href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a></h3>
</div>
</div>

<?php endforeach; ?>
