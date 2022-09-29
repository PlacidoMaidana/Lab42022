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
        <h2>Sobre nosotros</h2>
        <p>Basicamente somos buena gente.</p>
        <br />
        
        <?php 
        //  $v=$_SESSION["objeto"];
        //  $persona=json_decode($v);

        
       if (!empty($_POST)) {
       // if (!empty($_GET)) {

           var_dump($_POST);
           //echo $_POST["numero"]."</br>";
           //echo $_POST["mail"]."</br>";
          
          die;

        //  $obj=new personas();
          // if ($_POST["modifica"]=="si") {
            
          //   $obj->modificar($_POST["id"],$_POST["nombre"],$_POST["telefono"],$_POST["direccion"]);
            
          // }else{
          //   $obj->nuevo($_POST["nombre"],$_POST["telefono"],$_POST["direccion"]);

          // }

          
        }


        if (!empty($_GET["id"]) ) {
 
          $i=$_GET["id"];
          $obj=new personas();
          $obj->eliminar($i);
        }
       



       

        
        ?>


        <!-- <h3><?php echo $persona->nombre?></h3>
        <h3><?php echo $persona->telefono?></h3>
        <h3><?php echo $persona->direccion?></h3> -->


        <h1>Lista de personas modificada</h1>
        <?php
        
        $obj=new personas();
       
        $obj->mostrarGrilla();
        echo $obj->autoinc();
        
        
        ?>

        
        <br />
        <a href="#">more ></a><br />
        <a href="lista.php?autoincrementa=1">incremental ></a><br />
        <br />
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
