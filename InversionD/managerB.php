<?php
require_once("Ibanco.php");
require_once("banco.php");

class managerB  implements Ibanco
{
   public banco $banc;

   public function __construct(banco $b)
   {
       $this->banc=$b;
   }

   public function pagar()
   {
    
        echo "valido datos de la compra y promociones";
        $this->banc->pagar();



   }




    
}






?>