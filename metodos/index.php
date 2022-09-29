<?php

include('librerias.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$obj=new persona("Pablo","12223","Los arroyos 5665");


if (!empty($_GET["carga"])) {
    $c=$_GET["carga"];

    if ($c==1) {
    $personas= new personas();
    $personas->nuevo("Paco","232323","lejos 1222");
    $personas->nuevo("Bruno","232323","lejos 1222");
    $personas->nuevo("Lucia","232323","lejos 1222");
    $personas->nuevo("Paula","232323","lejos 1222");
    $personas->nuevo("Pedro","232323","lejos 1222");
    }
    
}
    



?>

<h1>Objeto 1</h1> 
<h2><?php  echo $obj->mostrar(); ?></h2> 


<h1>Lista</h1> 
<h3><?php 

    echo "llego";
    if (!isset($personas)) {
        echo $personas->mostrar(); 
    }else{
        echo"No se a creado lista de mascotas";
    }

 
 ?></h3> 



</body>
</html>

