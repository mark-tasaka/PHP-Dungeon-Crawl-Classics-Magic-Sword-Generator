<!DOCTYPE html>
<html>
<head>
<title>Magic Sword Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics sword Generator..">
	<meta name="keywords" content="Dungeon Crawl Classics,PHP,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/sword.css">
    
    
    
    
</head>
<body>

<?php

include 'php/magicSword.php';

$dieRoll0 = getDieRoll();
$dieRoll1 = getDieRoll();
$dieRoll2 = getDieRoll();
$dieRoll3 = getDieRoll();


?>



<img id="sheet"/>

   
<aside id="topleft">
	
	<span id="dieRoll0">
        <?php
            echo 'Die Roll: ' . $dieRoll0;
            ?>
    </span>

</aside>






<aside id="topright">
		
	<span id="dieRoll1">
        <?php
            echo 'Die Roll: ' . $dieRoll1;
            ?>
    </span>

</aside>








<aside id="bottomleft">
			
	<span id="dieRoll2">
        <?php
            echo 'Die Roll: ' . $dieRoll2;
            ?>
    </span>

</aside>




<aside id="bottomright">
				
	<span id="dieRoll3">
        <?php
            echo 'Die Roll: ' . $dieRoll3;
            ?>
    </span>

</aside>



<script>
      
  //let imgData = "images/magicSword.png";
     
    //   $("#sheet").attr("src", imgData);
       
     

 </script>

</body>
</html>