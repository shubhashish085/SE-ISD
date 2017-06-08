<!DOCTYPE html>
<link rel="stylesheet"  type="text/css" href="<?php echo LAYOUT_URL;?>form.css">
<html lang="en">
<head>
	<meta charset="utf-8">
	<h1 align="center"  style="color:yellow;"> Welcome to Language Learning System</h1>
	

</head>
<body>

<div id="container">


       <?php $wordarray1= array(); ?>
      <?php $wordarray2= array(); ?>  

        <?php foreach($words as $res) { ?>
               <?php array_push($wordarray1, $res->English); 
			         array_push($wordarray2, $res->German); 

			   } ?>

           <?php 
		       for ($x=0; $x <10; $x++) { ?>
 
    <form method="post" action="<?php echo base_url();?>index.php/welcome/index">  
  
    
   
      <p style="margin-left: 500px;font-size:30px" ><span style="background-color:rgb(0,128,0)"><?=$wordarray1[$x]?>--><?=$wordarray2[$x]?></span></p><br>
    

      <?php if ($wordarray1[$x]!=$wordarray2[$x]) { ?>
       
      
 
           
      <?php } else { ?>
      
           

           
          
      
    <?php } } ?>
 
    
  
    
 


  <p align="center" style="color:red;"><input type="submit" value="okay" style="color:red ;height:30px; width:100px"></p>
  
 </form> 






</div>

</body>
</html>