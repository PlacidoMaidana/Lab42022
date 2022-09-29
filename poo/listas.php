<?php

require_once("Isuperfuerza.php");


class lista 
{
   public $lista= array(); 

   public function nuevo(persona $p)
   {
    $this->lista[$p->id]=$p;

   }


   public function listar()
   {
    foreach ($this->lista as $v) {
        $v->ver();
    }
   }

}


class lista_superfuertes 
{
   public $lista= array(); 

   public function nuevo(superfuerza $p)
   {
    $this->lista[$p->id]=$p;

   }


   public function listar()
   {
    foreach ($this->lista as $v) {
        $v->ver();
    }
   }

}









?>