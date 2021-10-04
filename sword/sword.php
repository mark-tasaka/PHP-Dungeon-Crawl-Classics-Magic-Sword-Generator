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

$swordToHit0 = getToHitBonus($dieRoll0);
$swordToHit1 = getToHitBonus($dieRoll1);
$swordToHit2 = getToHitBonus($dieRoll2);
$swordToHit3 = getToHitBonus($dieRoll3);

$swordType0 = getSwordType();
$swordType1 = getSwordType();
$swordType2 = getSwordType();
$swordType3 = getSwordType();

$swordAlignment0 = getSwordAlignment();
$swordAlignment1 = getSwordAlignment();
$swordAlignment2 = getSwordAlignment();
$swordAlignment3 = getSwordAlignment();

$swordIntArray0 = array();
$swordIntArray1 = array();
$swordIntArray2 = array();
$swordIntArray3 = array();

$swordIntArray0 = getSwordIntelligence($dieRoll0);
$swordIntArray1 = getSwordIntelligence($dieRoll1);
$swordIntArray2 = getSwordIntelligence($dieRoll2);
$swordIntArray3 = getSwordIntelligence($dieRoll3);

$swordCommunication0 = getSwordCommunication($dieRoll0);
$swordCommunication1 = getSwordCommunication($dieRoll1);
$swordCommunication2 = getSwordCommunication($dieRoll2);
$swordCommunication3 = getSwordCommunication($dieRoll3);


?>



<img id="sheet"/>

   
<aside id="topleft">


<span id="swordType0">
        <?php
            echo $swordToHit0 . ' ' . $swordType0;
            ?>
    </span>

    
<span id="swordAlignment0">
        <?php
            echo $swordAlignment0;
            ?>
    </span>

        
    <span id="swordIntelligence0">
        <?php
        foreach($swordIntArray0 as $int)
        {
            echo $int;
        }
            ?>
    </span>
	
	
	<span id="dieRoll0">
        <?php
            echo 'Die Roll: ' . $dieRoll0;
            ?>
    </span>

</aside>






<aside id="topright">


<span id="swordType1">
        <?php
            echo $swordToHit1 . ' ' . $swordType1;
            ?>
    </span>
    
    
<span id="swordAlignment1">
        <?php
            echo $swordAlignment1;
            ?>
    </span>

            
    <span id="swordIntelligence1">
        <?php
        foreach($swordIntArray1 as $int)
        {
            echo $int;
        }
            ?>
    </span>
		
	<span id="dieRoll1">
        <?php
            echo 'Die Roll: ' . $dieRoll1;
            ?>
    </span>

</aside>








<aside id="bottomleft">



<span id="swordType2">
        <?php
            echo $swordToHit2 . ' ' . $swordType2;
            ?>
    </span>
    
    
<span id="swordAlignment2">
        <?php
            echo $swordAlignment2;
            ?>
    </span>

            
    <span id="swordIntelligence2">
        <?php
        foreach($swordIntArray2 as $int)
        {
            echo $int;
        }
            ?>
    </span>
		
			
	<span id="dieRoll2">
        <?php
            echo 'Die Roll: ' . $dieRoll2;
            ?>
    </span>

</aside>




<aside id="bottomright">



<span id="swordType3">
        <?php
            echo $swordToHit3 . ' ' . $swordType3;
            ?>
    </span>
    
    
<span id="swordAlignment3">
        <?php
            echo $swordAlignment3;
            ?>
    </span>

            
    <span id="swordIntelligence3">
        <?php
        foreach($swordIntArray3 as $int)
        {
            echo $int;
        }
            ?>
    </span>
		
				
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