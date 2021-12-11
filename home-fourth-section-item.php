
<?php
       $single = get_single_all_videocards();
       foreach ($single as $singles): ?>

<div class="col-md-6">
	<div class="pattern">
		<div class="overlay item-title" style="background-image: url(<?php echo $singles["thumbnail"] ?>)">
			<div class="item-title-content">
				<h3><a href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a></h3>
                <div class="item-social">
				<span class="date" style="margin-left: 0px;" ><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
                    <div class="fa fa-share-alt" title="Поделиться в соц. сетях"></div>
                    <div class="likely likely-custom" data-url="path" data-media="<?php echo $singles["thumbnail"] ?>" data-title="<?php echo $singles["title"] ?>">
                        <div class="vkontakte" title="Поделиться Вконтакте">Вконтакте</div>
                        <div class="facebook" title="Поделиться в Facebook">Facebook</div>
                        <div class="twitter" title="Поделиться в Twitter">Twitter</div>
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
