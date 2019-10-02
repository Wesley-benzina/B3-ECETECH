<?php

require_once 'vehicule.php';
require_once 'moto.php';
require_once 'voiture.php';


$chevrolet = new Voiture();
$audi = new Voiture();

echo $chevrolet->getNbPassager();
$chevrolet->monter(3);
echo $chevrolet->getNbPassager();

$audi->monter(8);
$audi->descendre(2);
echo $audi->getNbPassager();



