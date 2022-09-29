<?php 
include("persona.php");
include("superheroe.php");
include("listas.php");


/*
$l=new lista();

$p=new persona(1,"Maria","Risione 89");
$l->nuevo($p);


echo "<br/>";

$b=new superheroe(2,"Superman","Risione 89","volar");
$l->nuevo($b);

$b=new superheroe_acuatico(3,"Acuaman","Risione 89","volar");
$l->nuevo($b);

$l->listar();
*/

$lista2 =new lista_superfuertes();



$b=new superheroe(2,"Superman","Risione 89","volar");
$lista2->nuevo($b);

$b=new superheroe_acuatico(3,"Acuaman","Risione 89","volar");
$lista2->nuevo($b);


//var_dump($l);

$lista2->listar();



?>