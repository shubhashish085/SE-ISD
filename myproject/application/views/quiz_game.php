<!DOCTYPE html>
<link rel="stylesheet"  type="text/css" href="<?php echo LAYOUT_URL;?>form.css">
<html lang="en">
<head>
	<meta charset="utf-8">
	<h1 align="center"  style="color:yellow;"> Welcome to Language Learning System</h1>
	

</head>
<body>

<div id="container">



 <form method="" align="center" action="<?php echo base_url();?>index.php/Questions/worddisplay">


  <p align="center" style="color:red;"><input type="submit" value="Word Matching" style="color:red ;height:30px; width:100px"></p>
  
 </form> 

<form method="" align="center" action="<?php echo base_url();?>index.php/Questions/quizdisplay">


  <p align="center" style="color:red;"><input type="submit" value="Quiz" style="color:red ;height:30px; width:70px"></p>
  
 </form> 




</div>

</body>
</html>