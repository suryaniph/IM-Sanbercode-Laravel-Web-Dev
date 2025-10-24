<?php
require_once('Animal.php');

class Ape extends Animal
{
    public function yell(){
        return "Auooo <br><br>";
    }
public $legs = 2;
}
?>