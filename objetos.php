<?php
class Automovil{
   public $marca;
    public $modelo;
    function mostrarAuto(){
        echo("Hola soy un auto marca: $this->marca, modelo : $this->modelo");
    }
}
$al=new Automovil();
$al->marca="ford";
$al->modelo="fi50";
$al->mostrarAuto();
?>