<!DOCTYPE html>
<link rel="stylesheet"  type="text/css" href="<?php echo LAYOUT_URL;?>form.css">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Language Learning System</title>

</head>
<body>

<div id="container">
 <h1 align="center" style="color:yellow;">Play the Quiz!</h1>

    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/resultdisplay">
       
    
    <?php foreach($questions as $row) { ?>
    
    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3,$row->choice4);
	shuffle($ans_array); ?>
    
    <p style="color:yellow; margin-left: 50px;"  ><?=$row->quizid?>.<?=$row->question?></p><br>
    
    <p style="color:white; margin-left: 50px;" ><input type="radio" name="quizid<?=$row->quizid?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?></p><br>

    <p style="color:white; margin-left: 50px;" ><input type="radio" name="quizid<?=$row->quizid?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?></p><br>

    <p style="color:white; margin-left: 50px;" ><input type="radio" name="quizid<?=$row->quizid?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?></p><br>

    <p style="color:white; margin-left: 50px;" ><input type="radio" name="quizid<?=$row->quizid?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?></p><br><br>
    
    <?php } ?>
    
    <br><br>
    <p align="center" style="color:red;"><input type="submit" value="Submit!" style="color:red ;height:30px; width:70px"></p>
    
    </form>
    
</div>

</body>
</html>