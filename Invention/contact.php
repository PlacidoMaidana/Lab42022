<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <!-- head icluye los estilos y bootstrap -->
 <?php include("../librerias/head.php");?>

<?php 
 if (!empty($_GET["id_actualiza"])) {
  $i=$_GET["id_actualiza"];
  
 $obj=new personas();
 $modifica="si";
 //echo($obj->tomar_contacto($i)->nombre); die();
}



?>



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
        <h2>Ficha de contacto</h2>

        <button type="button" class="btn btn-success" onclick="mostrar_nombre()">Tu nombre</button>
       
         <form action="lista.php" id="contacto_clase" method="POST">

         <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" id="caja_nombre"  class="form-control" 
          name="nombre" placeholder="nombre" 
          value="<?php
            if (!empty($obj)) {
              echo $obj->tomar_contacto($i)->nombre ;
            } ?>"
          >
         </div>
         <div class="mb-3">
          <label for="telefono" class="form-label">telefono</label>
          <input type="text" class="form-control"
           name="telefono" placeholder="telefono" 
           value="<?php
            if (!empty($obj)) {
              echo $obj->tomar_contacto($i)->telefono ;
            } ?>"
           >
         </div>
         <div class="mb-3">
          <label for="direccion" class="form-label">direccion</label>
          <input type="text" class="form-control"
           name="direccion" placeholder="direccion" value="<?php
            if (!empty($obj)) {
              echo $obj->tomar_contacto($i)->direccion ;
            } ?>"
            >
         </div>

         <input type="hidden" name="id" value="<?php
          if (!empty($obj)) {
            echo $obj->tomar_contacto($i)->id;
          }
          
          ?>">
         <input type="hidden" name="modifica" value="<?php
          if (!empty($modifica)) {
            echo $modifica;
          }
          
          ?>">

          <input type="email" name="mail" class="form-control">

          <input type="number"  name="numero" class="form-control">


         <div class="mb-3">          
          <input type="submit" class="form-control" name="aceptar" placeholder="nombre" value="Aceptar">
         </div>
         

         </form>
       

        <form action="lista.php" id="segunda_aerolinea" method="POST">

              nombre aerolinea:
              <input type="text" class="form-control" id="aerolinea" name="aerolinea" value="">
              
              otro dato:
              <input type="text" class="form-control" name="modifica" value="<?php
               if (!empty($modifica)) {
                 echo $modifica;
               }

               ?>">

         <div class="mb-3">          
          <input type="submit" class="form-control" name="aceptar" placeholder="nombre" value="Aceptar">
         </div>
         


            </form>





          <?php 
          //  $personas= new personas();
          //  $personas->nuevo("Pitufo poeta","99999","lejos 1222");
           
          
          ?>





        <br />
      </div>
      <!-- barra derecha -->
      <?php include("../librerias/barraDerecha.php");?>
    </div>
     <!-- bottom -->
     <?php include("../librerias/bottom.php");?>
  </div>
</div>

<script>

function mostrar_nombre() { 

    var nombre=$(".caja_nombre").val();
    alert(nombre);

 }

</script>


<script>
$(function(){
    $("#contacto_clase").on("submit", function(e){
    
      alert("Envio contacto clase");
    
    })
    });
</script>

<script>
$(function(){
    $("#segunda_aerolinea").on("submit", function(e){
    
      alert("Envio SEGUNDA AEROLINEA"+ $("#aerolinea").val());

    
    })
    });
</script>




</body>
</html>
