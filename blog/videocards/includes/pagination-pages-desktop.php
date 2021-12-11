<section class="pagination-section text-center d-none d-md-block">

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

		$pagLink .= "<span class = 'active' onclick='?page=".$i."'>".$i."</span>";   
    }               
    else  {   
        $pagLink .= "<a class = 'active' href='?page=".$i."'>   
                                          ".$i." </a>";     
    }   
  };     
  echo $pagLink;   

  if($page<$number_of_pages){   
      echo "<a class = 'pagination-right' class = 'active' href='?page=".($page+1)." '>&raquo</a>";   
  }   

  
?>

</div>

</section>