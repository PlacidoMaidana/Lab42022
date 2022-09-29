<?php

  require_once("volador.php");
  require_once("Isuperfuerza.php");
  require_once("Iacuatico.php");

 class superheroe extends persona implements volador, superfuerza
 {
     public $superPoder;
     
     public function __construct($id,$n,$direccion,$superpoder)
     {
        parent::__construct($id,$n,$direccion);

        $this->superPoder=$superpoder;
        
     }


      public function ver()
      {
        parent::ver();
        $this->volar();
        $this->fuerza();
      }
    

      public function volar()
      {
        echo "<br/>".$this->nombre." pertenece a los superheroes voladores";
      }

      public function fuerza()
      {
        echo "<br/>".$this->nombre." posee la superfuerza de un titan";
      }




 }
 
  
 class superheroe_acuatico extends persona implements superfuerza,Iacuatico
 {
     public $superPoder;
     
     public function __construct($id,$n,$direccion,$superpoder)
     {
        parent::__construct($id,$n,$direccion);

        $this->superPoder=$superpoder;
        
     }


      public function ver()
      {
        parent::ver();
        $this->respiraBAgua();
        $this->fuerza();
      }
    

      public function respiraBAgua()
      {
        echo "<br/>".$this->nombre." estos tipos respiran bajo el agua";
      }

      public function fuerza()
      {
        echo "<br/>".$this->nombre." posee la superfuerza de un titan";
      }




 }
 



?>