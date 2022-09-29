<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!-- head icluye los estilos y bootstrap -->
<?php include("../librerias/head.php");?>
<body>
<div id="wrapper">
  <div id="content">
     <!-- HEADER -->
     <?php include("../librerias/header.php");?>
    <div id="mainimg">
      <h3>inventions</h3>
      <h4>for a wireless world</h4>
    </div>

    <!-- +--------------------------------------- 

             CONTENT AREA
         +--------------------------------------- 
      -->
    <div id="contentarea">
      <div id="leftbar">
        
          <?php
          $obj=new persona(0,"Pablo","12223","Los arroyos 5665");         
          $_SESSION["objeto"]=json_encode($obj);
          
          ?>

          <h1>Objeto 1</h1> 
          <h2><?php  echo $obj->mostrar(); ?></h2> 


          <h1>Lista</h1> 
          <h3><?php 

             
              if (!empty($personas)) {
                  echo $personas->mostrar(); 
              }else{
                  echo"No se a creado lista de mascotas";
              }
            
            
           ?>
           </h3> 
          


      </div>
      <!-- barra derecha -->
      <?php include("../librerias/barraDerecha.php");?>
      
    </div>
     <!-- bottom -->
     <?php include("../librerias/bottom.php");?>
  </div>
</div>
</body>
</html>
