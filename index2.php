
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB4</title>
</head>
<body>
    
    
    <h1>Piu avanti</h1>
    <P>Si te postran diez veces te levantas .....</P>
    <?php
    /*  
      $contador=0;

      
      for ($i=0; $i <10 ; $i++) { 
        $contador++;
        if (($contador%2)==0) {
            echo "mostrar contador es par:".$contador."<br>" ;
        }else{

            echo "mostrar contador es impar:".$contador."<br>" ;
        }
        
        

      }

      $a=0;
      while ($a <= 10) {
        $a++;
        $contador++;
        if (($contador%2)==0) {
            echo "mostrar contador es par:".$contador."<br>" ;
        }else{

            echo "mostrar contador es impar:".$contador."<br>" ;
        }
      }

      $b=0;
      do {
        $b++;
        $contador++;
        if (($contador%2)==0) {
            echo "mostrar contador es par:".$contador."<br>" ;
        }else{

            echo "mostrar contador es impar:".$contador."<br>" ;
        }
      } while ($b <= 10);
    */
      #este es un comentario


    ?>


      <table border="1">
        <tbody>
       
         <?php include("mensaje.php");?>
        </tbody>
      </table>







     <!-- comentario   -->

       <a href="index.php?edad=5"> La tabla del 5</a>



     <p>Ingrese el numero e imprima su tabla de multiplicar</p>
      <form method="get" action="index.php">
        

        <!-- <label for="nombre">Nombre</label><input type="text"  name="nombre"  ><br> -->
        <label for="edad">Edad</label><input type="number" name="edad"><br>

        <input type="submit">

      </form>




</body>
</html>