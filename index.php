<?php

require_once('Bicycle.php');
require_once('Car.php');

$bike = new Bicycle();
$porsche = new Car('Bleu Neptune', 2, 'Essence');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . '<br>';

// Moving porsche
echo 'La couleur de la porsche est ' . $porsche->getColor() . '.<br>';
echo 'Le nombre de places de la porsche est de ' . $porsche->getNbSeats() . '.<br>';
echo 'Le carburant de la porsche est ' . $porsche->getEnergy() . '.<br>';
echo $porsche->start() . '<br>';
echo $porsche->forward();
echo '<br> Vitesse de la porsche : ' . $porsche->getCurrentSpeed() . ' km/h' . '<br>';
echo $porsche->brake();
echo '<br> Vitesse de la porsche : ' . $porsche->getCurrentSpeed() . ' km/h' . '<br>';
echo $porsche->brake();
