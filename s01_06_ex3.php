
<?php

class coche{


    public $marca;
    public $modelo;
    public $any;

    public $kilometros;

    private $data = [];


    
  function __get($unknown1){ 

    if ($this->data[$unknown1])
     {
    return $this->data[$unknown1];
  } else {
    return "desconocido '$unknown1' ";
  }
  }

  function __set($unknownprop2, $valprop2) {
    $this->data[$unknownprop2] = $valprop2;
}
}
  
$coche1= new coche();
$coche1->estado = "bueno";
echo $coche1->estado . "\n";
echo $coche1->color;

?>