
<?php

class persona 
{
   public $id;
   public $nombre;
   public $direccion;

   public function __construct($id,$n,$direccion)
   {
   $this->id=$id;
   $this->nombre=$n;
   $this->direccion=$direccion;

   }


   public function ver()
   {
     echo "<br/> Una persona llamada:".$this->nombre;
   }



    
}








?>