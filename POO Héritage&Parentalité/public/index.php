<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br> Vitesse vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse vélo : ' . $bicycle->getcurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';

require_once 'Cars.php';

$cars = new Cars('green', 4, 'electric');
echo $cars->forward();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake(). '<br>';

require_once 'Truck.php';

$cargo = new Truck('white', 3, 'fuel', 34000);
echo  $cargo->forward();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Chargement camion: '. $cargo->getLoading(). ' litres' . '<br>';
echo $cargo->loading(). '<br>';

?>

 


