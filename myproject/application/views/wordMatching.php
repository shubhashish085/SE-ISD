<!doctype html>
<link rel="stylesheet"  type="text/css" href="<?php echo LAYOUT_URL;?>form.css">
<html>
<head>
<title>Welcome to Learn Language</title>
<!--CSS -->
<style>
    #myTable td{
        cursor:pointer;
        background-color: green;
        /*background: -moz-linear-gradient(top, #ffffff, #D1E3E9);*/
        /*background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#D1E3E9));*/
        text-align:center;
    }
 
    #myTable td:hover{
        background-color: red;
        /*background: -moz-linear-gradient(top, #249ee4, #057cc0);*/
        /*background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#249ee4), to(#057cc0));*/
    }
 
    /*td.active
    {
        /*background-color: yellow;*/
        /*background: -moz-linear-gradient(top, #057cc0, #249ee4);*/
        /*background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#057cc0), to(#249ee4));*/
    /*}*/
    #myTable {
       margin: auto;

    }
    #result{
        font-weight:bold;
        font-size:18pt;
      
    }
</style>

<script  src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>     
<script>




    var solution = [0, 8, 10,5,1,2,4,9,3,6,7];
    var eng_arr = [];
    var german_arr = [];
    var counter = 0;
    var prev_column = 0;
    var v1=0;
    var v2=0;
    var v=0;
    var correctans=0;

    $(document).ready(function(){
        $("#myTable td").click(function() { 

          //  $(this).css('background-color', '#FFA500');    
 
            var column_num = parseInt( $(this).index()) +1;
            var row_num = parseInt( $(this).parent().index());    
 
            
            if(counter < 20){
                if(column_num == 1 && prev_column != 1){
                    var variable = eng_arr.indexOf(row_num);
                    $(this).css('background-color', '#FFA500');    
                    if(variable == -1){
                    
                        counter++;  
                        prev_column = 1;
                        eng_arr.push(row_num); 

                        v++;
                        v1=row_num;
                        if(v==2)
                        {
                            v=0;
                             if (v2==solution[v1]) 
                            {
                                correctans++;
                            }                           
                        } 
                    }
                }
                else if(column_num == 2 && prev_column != 2){
                    var variable = german_arr.indexOf(row_num);
                    $(this).css('background-color', '#FFA500');    
                    if(variable == -1){
                        counter++;
                        prev_column = 2
                        german_arr.push(row_num); 

                        v++;
                        v2=row_num;
                        if(v==2)
                        {
                            v=0;
                            if (v2==solution[v1]) 
                            {
                              correctans++;
                            }                           
                        }                  
                    }
                }
               // $("#result").html( " You have clicked Row_num =" + row_num + "  ,  Column_num ="+ column_num );
            }
            else{
               
                var txt ="Your Obtained score : "+"<br>"+correctans+"/10";
                 $("#result").html("<p>" + txt.fontcolor("yellow") + "</p>");
                //document.html("<p>Fontcolor: " + txt.fontcolor("green") + "</p>");


            }

            // $(this).css('background-color', 'white');
            
            console.log(eng_arr);
            console.log(german_arr);
            console.log(counter);
        });
    });
</script>
</head>
<body>
    <div id="result"> </div>
    <table id="myTable" border="1" width="400" height="550" style="border-collapse: collapse;" cellpadding="8">
        <tr>
            <th>English</th>
            <th>German</th>
        </tr>
        <tr>
            <td>denote</td>
            <td>aufrichtig</td>
           
        </tr> 
        
        <tr>
            <td>open</td>
            <td>kommen</td>
            
        </tr> 
       
        <tr>
            <td>work</td>
            <td>vergleichen</td>           
        
        <tr>
            <td>honest</td>
            <td>leben</td>
           
        </tr> 
        
        <tr>
            <td>come</td>
            <td>die Arbeit</td>
           
        </tr>
        <tr>
            <td>live</td>
            <td>die Eltern</td>
           
        </tr>
        <tr>
            <td>expect</td>
            <td>der Neffe</td>
           
        </tr>
        <tr>
            <td>compare</td>
            <td>andeuten</td>
           
        </tr>
        <tr>
            <td>parents</td>
            <td>erwarten</td>
           
        </tr>
        <tr>
            <td>nephew</td>
            <td>aufmachen</td>
           
        </tr>
    </table>
     <form method="" align="center" action="<?php echo base_url();?>index.php/words/worddisplay">


  <p align="center" style="color:red;"><input type="submit" name="varname" value="Finish" style="color:red ;height:30px; width:100px"></p>
  
 </form> 
</body>
</html>
