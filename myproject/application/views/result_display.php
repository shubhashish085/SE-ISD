<!DOCTYPE html>
<link rel="stylesheet"  type="text/css" href="<?php echo LAYOUT_URL;?>form.css">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PlayLanguage Learning System</title>

</head>
<body>

<div id="container">
 <h1 align="center" style="color:yellow;">Your Evaluations Sheet</h1>
    
    <?php $score =0; ?>
    
      <?php $array1= array(); ?>
      <?php $array2= array(); ?>    
      <?php $array3= array(); ?>
      <?php $array4= array(); ?>
      <?php $array5= array(); ?>
      <?php $array6= array(); ?>
      <?php $array7= array(); ?>
      <?php $array8= array(); ?>
      
         <?php foreach($checks as $checkans) { ?>
               <?php array_push($array1, $checkans); } ?>
               
               
        <?php foreach($results as $res) { ?>
               <?php array_push($array2, $res->answer); 
			         array_push($array3, $res->quizid); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3); 
					 array_push($array8, $res->answer); 
			   } ?>
               
               
           <?php 
		       for ($x=0; $x <10; $x++) { ?>
 
    <form method="post" action="<?php echo base_url();?>index.php/welcome/index">  
  
    
     <p style="color:white; margin-left: 20px;"  ><?=$array3[$x]?>.<?=$array4[$x]?></p><br>
    

      <?php if ($array2[$x]!=$array1[$x]) { ?>
       
      
           <p style="margin-left: 40px;" ><span style="background-color:rgb(255,0,0)"><?=$array1[$x]?></span></p>
           <p style="margin-left: 40px;" ><span style="background-color:rgb(0,128,0)"><?=$array2[$x]?></span></p><br>
           
      <?php } else { ?>
      
           
           <p style="margin-left: 40px;" ><span style="background-color:rgb(0,128,0)"><?=$array1[$x]?></span></p><br>
           <?php $score = $score + 1; ?>
           
          
      
    <?php } } ?>
    
    <br><br>
    
    <h1 align="center" style="color:yellow;">Your Score: </h1>
      <h1 align="center" style="color:yellow;"><?=$score?>/10</h1>
    
    <p align="center" style="color:red;"><input type="submit" value="Play Again!" style="color:red ;height:20px; width:70px"></p>
    
    </form>
    
</div>

</body>
</html>