<?php 
        if (!empty($_GET["edad"])) {
            //print_r($_POST);
    
            $n=$_GET["edad"];
               
    
            $a=0;
            while ($a <= 11) {
              echo  "<tr>";
             
              echo "<td>". $a."X". $n."=</td><td>". $n*$a. "</td>";
                
              echo "</tr>";
            $a++;
            }



    
          }
        
?>