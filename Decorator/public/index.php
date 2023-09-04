<?php
require_once "../src/Bicycle.php";
require_once "../src/MountainBicycle.php";
require_once "../src/TownBicycle.php";
require_once "../src/BicycleDecorator.php";
require_once "../src/FrontLight.php";
require_once "../src/BackLight.php";

use Bicycle\MountainBicycle;
use Bicycle\TownBicycle;
use Bicycle\FrontLight;
use Bicycle\BackLight;

//Decorator Pattern
// Create abstract class Bicycle
// Create bike concrete classes : Mountain and Town
// Create abstract BicycleDecorator class which inherits from Bicycle and has its own private field for Bicycle object which is passed to constructor
// Create concrete Decorators class which inherits from BicycleDecorator. Each concrete decorator is some new feature which is to be added to bike.

//basic bake object with no decorator
$bikeWithFrontLight = new FrontLight(new MountainBicycle());
var_dump($bikeWithFrontLight->getDescription());
var_dump($bikeWithFrontLight->getPrice());


//Bike with front light
$bikeWithBackLight = new BackLight(new MountainBicycle());
var_dump($bikeWithBackLight->getDescription());
var_dump($bikeWithBackLight->getPrice());

//we create new types when crating new object
//Bike with front and back lights
$bikeWithBackAndFrontLights = new BackLight(new FrontLight(new TownBicycle()));
var_dump($bikeWithBackAndFrontLights->getDescription());
var_dump($bikeWithBackAndFrontLights->getPrice());