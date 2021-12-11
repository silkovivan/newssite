
<?php
       $single = get_single_all_bitcoin_2();
       foreach ($single as $singles): ?>

<div class="overlay item-title" style="background-image: url(<?php echo $singles["thumbnail"] ?>)">
<div class="item-title-content">
    <h3><a href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a></h3>
    <span class="date" style="margin-left: 0px;" ><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>

</div>
</div>

<?php endforeach; ?>
