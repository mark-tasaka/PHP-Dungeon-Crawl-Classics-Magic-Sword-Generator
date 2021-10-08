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

/*
$dieRoll0 = getDieRoll();
$dieRoll1 = getDieRoll();
$dieRoll2 = getDieRoll();
$dieRoll3 = getDieRoll();
*/

$dieRoll0 = 99;
$dieRoll1 = 100;
$dieRoll2 = 95;
$dieRoll3 = 95;

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

$swordSpecialPurposeNumber0 = array();
$swordSpecialPurposeNumber1 = array();
$swordSpecialPurposeNumber2 = array();
$swordSpecialPurposeNumber3 = array();

$swordSpecialPurposeNumber0 = getSwordSpecialPurposeNumber($dieRoll0);
$swordSpecialPurposeNumber1 = getSwordSpecialPurposeNumber($dieRoll1);
$swordSpecialPurposeNumber2 = getSwordSpecialPurposeNumber($dieRoll2);
$swordSpecialPurposeNumber3 = getSwordSpecialPurposeNumber($dieRoll3);

$swordSpecialPurpose0 = array();
$swordSpecialPurpose1 = array();
$swordSpecialPurpose2 = array();
$swordSpecialPurpose3 = array();

$swordSpecialPurpose0 = getSwordSpecialPurpose($swordSpecialPurposeNumber0, $swordAlignment0);
$swordSpecialPurpose1 = getSwordSpecialPurpose($swordSpecialPurposeNumber1, $swordAlignment1);
$swordSpecialPurpose2 = getSwordSpecialPurpose($swordSpecialPurposeNumber2, $swordAlignment2);
$swordSpecialPurpose3 = getSwordSpecialPurpose($swordSpecialPurposeNumber3, $swordAlignment3);

$swordSpecialPurposeCount0 = getSpecialPowerCount($swordSpecialPurpose0[0]);
$swordSpecialPurposeCount1 = getSpecialPowerCount($swordSpecialPurpose1[0]);
$swordSpecialPurposeCount2 = getSpecialPowerCount($swordSpecialPurpose2[0]);
$swordSpecialPurposeCount3 = getSpecialPowerCount($swordSpecialPurpose3[0]);

$swordNumberBanes0 = getNumberOfBanes($dieRoll0);
$swordNumberBanes1 = getNumberOfBanes($dieRoll1);
$swordNumberBanes2 = getNumberOfBanes($dieRoll2);
$swordNumberBanes3 = getNumberOfBanes($dieRoll3);

$swordBaneTypes0 = array();
$swordBaneTypes1 = array();
$swordBaneTypes2 = array();
$swordBaneTypes3 = array();

$swordBaneTypes0 = getBaneType($swordNumberBanes0);
$swordBaneTypes1 = getBaneType($swordNumberBanes1);
$swordBaneTypes2 = getBaneType($swordNumberBanes2);
$swordBaneTypes3 = getBaneType($swordNumberBanes3);

$swordBaneEffect0 = array();
$swordBaneEffect1 = array();
$swordBaneEffect2 = array();
$swordBaneEffect3 = array();

$swordBaneEffect0 = getBaneEffect($swordNumberBanes0);
$swordBaneEffect1 = getBaneEffect($swordNumberBanes1);
$swordBaneEffect2 = getBaneEffect($swordNumberBanes2);
$swordBaneEffect3 = getBaneEffect($swordNumberBanes3);

$swordPowerNumber0 = array();
$swordPowerNumber1 = array();
$swordPowerNumber2 = array();
$swordPowerNumber3 = array();

$swordPowerNumber0 = getSwordPowerCount($dieRoll0);
$swordPowerNumber1 = getSwordPowerCount($dieRoll1);
$swordPowerNumber2 = getSwordPowerCount($dieRoll2);
$swordPowerNumber3 = getSwordPowerCount($dieRoll3);

$swordIPower0 = $swordPowerNumber0[0];
$swordIPower1 = $swordPowerNumber1[0];
$swordIPower2 = $swordPowerNumber2[0];
$swordIPower3 = $swordPowerNumber3[0];

$swordIPowerArray0 = array();
$swordIPowerArray1 = array();
$swordIPowerArray2 = array();
$swordIPowerArray3 = array();

$swordIPowerArray0 = getPowerTypeI($swordIPower0);
$swordIPowerArray1 = getPowerTypeI($swordIPower1);
$swordIPowerArray2 = getPowerTypeI($swordIPower2);
$swordIPowerArray3 = getPowerTypeI($swordIPower3);

$swordIIPower0 = $swordPowerNumber0[1];
$swordIIPower1 = $swordPowerNumber1[1];
$swordIIPower2 = $swordPowerNumber2[1];
$swordIIPower3 = $swordPowerNumber3[1];

$swordIIIPower0 = $swordPowerNumber0[2];
$swordIIIPower1 = $swordPowerNumber1[2];
$swordIIIPower2 = $swordPowerNumber2[2];
$swordIIIPower3 = $swordPowerNumber3[2];


?>



<img id="sheet"/>

   
<aside id="topleft">


<span id="swordType0">
        <?php
            echo $swordToHit0 . ' ' . $swordType0 . $swordToHit0 . ')';
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
	
        
    <span id="swordCommunication0">
        <?php
            echo $swordCommunication0;
            ?>
    </span>
	
	<span id="dieRoll0">
        <?php
            echo $dieRoll0;
            ?>
    </span>
        
    <span id="swordSpecialPurpose0">
        <?php

        if( $swordSpecialPurposeCount0 > 0 )
        {

            echo 'Sword Special Purpose:';
            echo '<br/>';

            $count = 1;
    
                foreach($swordSpecialPurpose0 as $purpose)
                {
                    echo $count . '. '. $purpose . '<br/>';
    
                    ++$count;
                }
                
            echo '<br/>';

        }



        
        if( $swordNumberBanes0 > 0 )
        {
            echo 'Sword Bane:';
            echo '<br/>';
            
            $count = 1;

            for($i = 0; $i <$swordNumberBanes0; ++$i)
            {
                echo $count . '. ' . $swordBaneTypes0[$i] . ': <span class="baneEffect">' .  $swordBaneEffect0[$i] . '.</span><br/>';
                ++$count;
            }
                
            echo '<br/>';

        }

                
        if( count($swordIPowerArray0)  > 0 )
        {
            echo 'Type I: Natural Powers';
            echo '<br/>';
            
            $count = 1;

            for($i = 0; $i <$swordIPower0; ++$i)
            {
                echo $count . '. ' . $swordIPowerArray0[$i] . '<br/>';
                ++$count;
            }
                
            echo '<br/>';

        }


            ?>
    </span>







</aside>






<aside id="topright">


<span id="swordType1">
        <?php
            echo $swordToHit1 . ' ' . $swordType1 . $swordToHit1 . ')';
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

    	
        
    <span id="swordCommunication1">
        <?php
            echo $swordCommunication1;
            ?>
    </span>

		
	<span id="dieRoll1">
        <?php
            echo $dieRoll1;
            ?>
    </span>

    <span id="swordSpecialPurpose1">
        <?php

            $count = 1;

            foreach($swordSpecialPurpose1 as $purpose)
            {
                echo $count . '. '. $purpose . '<br/>';

                ++$count;
            }
            ?>
    </span>

    <span id="swordBane1">
        <?php

        $count = 1;

        for($i = 0; $i <$swordNumberBanes1; ++$i)
        {
            echo $count . ' ' . $swordBaneTypes1[$i] . ': <span class="baneEffect">' .  $swordBaneEffect1[$i] . '.</span><br/>';
            ++$count;
        }

            ?>
    </span>


</aside>








<aside id="bottomleft">



<span id="swordType2">
        <?php
            echo $swordToHit2 . ' ' . $swordType2 . $swordToHit2 . ')';
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

    	
        
    <span id="swordCommunication2">
        <?php
            echo $swordCommunication2;
            ?>
    </span>
		
			
	<span id="dieRoll2">
        <?php
            echo $dieRoll2;
            ?>
    </span>

    <span id="swordSpecialPurpose2">
        <?php

            $count = 1;

            foreach($swordSpecialPurpose2 as $purpose)
            {
                echo $count . '. '. $purpose . '<br/>';

                ++$count;
            }
            ?>
    </span>

    <span id="swordBane2">
        <?php

        $count = 1;

        for($i = 0; $i <$swordNumberBanes2; ++$i)
        {
            echo $count . ' ' . $swordBaneTypes2[$i] . ': <span class="baneEffect">' .  $swordBaneEffect2[$i] . '.</span><br/>';
            ++$count;
        }

            ?>
    </span>




</aside>




<aside id="bottomright">



<span id="swordType3">
        <?php
            echo $swordToHit3 . ' ' . $swordType3 . $swordToHit3 . ')';
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
    	
        
    <span id="swordCommunication3">
        <?php
            echo $swordCommunication3;
            ?>
    </span>
		
				
	<span id="dieRoll3">
        <?php
            echo $dieRoll3;
            ?>
    </span>

    <span id="swordSpecialPurpose3">
        <?php

        $count = 1;

        foreach($swordSpecialPurpose3 as $purpose)
        {
            echo $count . '. '. $purpose . '<br/>';

            ++$count;
        }
            ?>
    </span>

    
    <span id="swordBane3">
        <?php

        $count = 1;

        for($i = 0; $i <$swordNumberBanes3; ++$i)
        {
            echo $count . ' ' . $swordBaneTypes3[$i] . ': <span class="baneEffect">' .  $swordBaneEffect3[$i] . '.</span><br/>';
            ++$count;
        }

            ?>
    </span>

</aside>



<script>
      
  let imgData = "images/sword.png";
     
       $("#sheet").attr("src", imgData);
       
     

 </script>

</body>
</html>