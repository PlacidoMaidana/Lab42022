<?php
require_once("Ibanco.php");
require_once("banco.php");
require_once("managerB.php");

 class compras //extends AnotherClass implements Interface
 {
    public Ibanco $b;
    
    public function __construct(Ibanco $i)
    {
        $this->b=$i;
    }
     
    public function comprar()
    {
               
        $this->b->pagar();
    }


    
 }
 
 $banc=new banco();
 $mb=new managerB($banc);
  
  $c=new compras($mb);
  $c->comprar();



?>