<?php

class persona
{
    public $id;
    public $nombre;
    public $telefono;
    public $direccion;


    
    public function __construct($id,$nombre,$telefono,$direccion)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->telefono=$telefono;
        $this->direccion=$direccion;
        
    }

    public function mostrar()
    {

        return $this->nombre ."</br> Telefono: ".$this->telefono."</br> Direccion:".$this->direccion;

    }




}

class personas
{
    public $lista;

    public function __construct()
    {   
        if (!empty($_SESSION["Lista"])) {
            $l=json_decode($_SESSION["Lista"]);
            foreach ($l as $p) {
                $id=$this->autoinc();
                $this->lista[]=new persona($id,$p->nombre,$p->telefono,$p->direccion);
            }
        }
       

    }

   
    public function refresca()
    {
        $_SESSION["Lista"]=json_encode($this->lista);
    }
    public function nuevo($n,$t,$d)
    {
        $id=$this->autoinc();
        $this->lista[]=new persona($id,$n,$t,$d);
        $this->refresca();
    }

    public function eliminar($id)
    {
        unset($this->lista[$id]);
        $this->refresca();
    }

    public function tomar_contacto($id)
    {
        return $this->lista[$id];
       // $this->refresca();
    }

    public function modificar($id,$nombre,$telefono,$direccion)
    {
       $this->lista[$id]->nombre=$nombre;
       $this->lista[$id]->telefono=$telefono;
       $this->lista[$id]->direccion=$direccion;

       $this->refresca();

       
    }


    public function mostrar()
    {

       // print_r($this->lista);
        if (!empty($this->lista)) {
            foreach ($this->lista as $value) {
                echo  $value->nombre."</br>";
            }
        }
      
    }


    public function autoinc()
    {
        $mayor=0;
        if (!empty($this->lista)) {
          
            foreach ($this->lista as $value) {
              if ($mayor<$value->id) {
                $mayor=$value->id;
              }
            }
            return $mayor+1;

        }
        
    }

    public function mostrarGrilla()
    {
        if (!empty($this->lista)) {
            echo '<table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Nombre</th>
           <th scope="col">Telefono</th>
           <th scope="col">Dirección</th>
           <th scope="col">Acciones</th>
         </tr>
       </thead>
       <tbody>
         ';
            
        foreach ($this->lista as $value) {
            echo ' <tr>
            <th scope="row">'.$value->id.'</th>
            <td>'.$value->nombre.'</td>
            <td>'.$value->telefono.'</td>
            <td>'.$value->direccion.'</td>
            <td>
            <a href="contact.php?id_actualiza='.$value->id.'"><img src="../images/edit-icon-vector-illustration.jpg" width="30" height="30">'.$value->id.'</a>
            <a href="lista.php?id='.$value->id.'"><img src="../images/quitar.png" width="30" height="30">'.$value->id.'</a>
            
            </td>
        
         
            </tr>';
        }
        
    
        echo "</tbody>
        </table>"; 

        }
       

      
    }


    

}




?>