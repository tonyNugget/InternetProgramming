<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="./css.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    



    <?php
    
    
    echo "<table>";
    echo "<tr>Evens</tr><tr> | Odds</tr>";
    for($i=0; $i<10; $i++){
         $n1 = rand(1,10);
         //echo "<td id=\"table\">$n1 \n</td>";
         $total += $n1;
         
         if($n1 %2 == 0){
             echo "<tr>  $n1 </tr>";
             
         }
         else{
             
         }
         
         
        
    }
    echo "</table>";
    echo "total is : $total";
    ?>

    </body>
</html>