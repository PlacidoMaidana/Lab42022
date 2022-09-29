<?php

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

    if (!empty($_GET["limpiar"])) {
    $c=$_GET["limpiar"];

    if ($c==1) {
     unset($_SESSION["Lista"]);
    }
    
    }

    if (!empty($_GET["incremental"])) {
        $c=$_GET["incremental"];
    
        if ($c==1) {
         if (!empty($personas)) {
           $personas->autoinc();
         }
        }
        
    }




?>