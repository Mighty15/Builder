<?php
require "Clases.php";
 
$autodir= new AutoDirector();

$autodir->autoBuilder= new FiatBuilder();

$autodir->constructAuto();

$auto= $autodir->getAuto();

echo $auto;

?>