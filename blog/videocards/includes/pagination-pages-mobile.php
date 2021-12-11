<section class="pagination-section pagination-section-first text-center d-md-none">

<?php  if($page<$number_of_pages){   
	echo "<a class = 'button' href='?page=".($page+1)." '>Следующая страница</a>";   
}   ?>

	<div class="pagination">
		
    <?php  



if($page>=2){   
    echo "<a class = 'pagination-left'  class = 'active' href='?page=".($page-1)."'>&laquo </a>";   
}       

for ($i=1; $i<=$number_of_pages; $i++) {   
    if ($i == $page) {   
        //$pagLink .= "<span><a class = 'active' href='?page=".$i."'>".$i." </a> </span>";   

		//$pagLink .= "<span class = 'active' onclick='?page=".$i."'>".$i."</span>";   
    }               
  };     
  echo $pagLink;   

  if($page<$number_of_pages){   
      echo "<a class = 'pagination-right' class = 'active' href='?page=".($page+1)." '>&raquo</a>";   
  }   

  
?>

</div>

</section>