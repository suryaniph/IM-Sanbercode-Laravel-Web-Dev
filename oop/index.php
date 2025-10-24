<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");

echo "name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br>";

echo"================================= <br>";

$frog = new Frog("buduk");
echo "name : " . $frog->name . "<br>";
echo "legs : " . $frog->legs . "<br>"; 
echo "cold blooded : " . $frog->cold_blooded . "<br>";
echo "Jump : " . $frog->jump();

echo"================================= <br>";

$ape = new Ape("kera sakti");
echo "name : " . $ape->name . "<br>";
echo "legs : " . $ape->legs . "<br>"; 
echo "cold blooded : " . $ape->cold_blooded . "<br>";
echo "Yell : " . $ape->yell();
?>