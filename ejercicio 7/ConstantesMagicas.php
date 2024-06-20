<?php
namespace holaMundo;
class ConstantesMagicas {
    function probandoConsMagicas() {
        echo "la linea actual es:" . __LINE__ . "<br/>";
        echo "quiero ver que hace: " . __NAMESPACE__ . "<br/>";
        echo "el numero de la linea es: " . __LINE__ . "<br/>";
        echo "el nombre de la clase es: " . __CLASS__ . "<br/>";
        echo "el nombre de la funcion es: " . __FUNCTION__ . "<br/>";
    
}
}

$magico = new ConstantesMagicas;
$magico-> probandoConsMagicas();
?>