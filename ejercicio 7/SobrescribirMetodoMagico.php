<?php
class ClonarObjeto{
    public $valor = 2;
    
    public function __contruct($valor){
        $this->valor= $valor ;
    }
    public function __clone(){
        $this->valor= "el nuevo valor es: " .  $this->valor;
        
    }
}

$valor = new ClonarObjeto;
$valor2 = clone $valor;

echo $valor2->valor;

?>
