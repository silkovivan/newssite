<?php include_once("$_SERVER[DOCUMENT_ROOT]/db_for_last_articles-page.php"); ?>

<aside class="main-aside" style="height: auto !important;">

	<div class="aside-box">
	</div>

	<div class="aside-box">
		<div class="latest-box">

	<div class="lb-header">Последние статьи:</div>

	<div class="lb-list">

	<?php
       $single = get_page_single_all_electronics_last_articles();
       foreach ($single as $singles): ?>
	   
		<div class="lb-item">
			<a href="blog/electronics/" class="lb-catname">Электроника</a>
			<div class="lb-body">

				
				<a class="lb-item-header" href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a>
				<div class="lb-footer">
				<span class="date" style="margin-left: 0px;"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
				</div>
				

			</div>
		</div>

		<?php endforeach; ?>

		<?php
       $single = get_page_single_all_itnews_last_articles();
       foreach ($single as $singles): ?>

		<div class="lb-item">
			<a href="blog/it-news/" class="lb-catname">Новости IT</a>
			<div class="lb-body">

				
				<a class="lb-item-header" href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a>
				<div class="lb-footer">
				<span class="date" style="margin-left: 0px;"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
				</div>
				

			</div>
		</div>

		<?php endforeach; ?>

		<?php
       $single = get_page_single_all_reviews_last_articles();
       foreach ($single as $singles): ?>

		<div class="lb-item">
			<a href="blog/reviews/" class="lb-catname">Обзоры</a>
			<div class="lb-body">

			<a class="lb-item-header" href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a>
				<div class="lb-footer">
				<span class="date" style="margin-left: 0px;"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
				</div>
				
				

			</div>
		</div>

		<?php endforeach; ?>

		<?php
       $single = get_page_single_all_videocards_last_articles();
       foreach ($single as $singles): ?>


		<div class="lb-item">
			<a href="blog/videocards/" class="lb-catname">Видеокарты</a>
			<div class="lb-body">

				
			<a class="lb-item-header" href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a>
				<div class="lb-footer">
				<span class="date" style="margin-left: 0px;"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
				</div>
				

			</div>
		</div>

		<?php endforeach; ?>

		<?php
       $single = get_page_single_all_bitcoin_last_articles();
       foreach ($single as $singles): ?>

		
		<div class="lb-item">
			<a href="blog/bitcoin/" class="lb-catname">Биткоин</a>
			<div class="lb-body">

				
			<a class="lb-item-header" href="page.php?id=<?php echo $singles["id"] ?>"><?php echo $singles["title"] ?></a>
				<div class="lb-footer">
				<span class="date" style="margin-left: 0px;"><?php echo date("d/m/Y", strtotime($singles["date"])); ?></span>
				</div>

			</div>
		</div>

		<?php endforeach; ?>
		
	</div>

</div>
</div>


</aside>