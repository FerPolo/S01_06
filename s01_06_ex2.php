
<?php

abstract class Animal {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function makesound() : string; 

  public function tipoclase() 
  {
    return __CLASS__;

  }
}

class Gos extends Animal {
  public function makesound() : string {
    return "Bup, bup! soc un $this->name!"; 
  }
}

class Gat extends Animal {
  public function makesound() : string {
    return "Meu  soc un  $this->name!"; 
   
}


$Gat = new Gat("Gat");
echo $Gat->makesound();
echo $Gat->tipoclase();
echo "<br>";

$Gos = new Gos("Gos");
echo $Gos->makesound();
echo "<br>";

echo __FILE__;



?>
 