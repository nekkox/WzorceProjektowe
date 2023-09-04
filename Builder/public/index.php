<?php
require_once "../src/Human.php";

use  Immutable\Human as Human;

$human = new Human(150,60,1000);
echo "<br>";
echo $human;
$human = $human->setHeight(200);
echo "<br>";
echo $human;
echo "<br>";
$human = $human->setWeight(66);
echo $human;
echo "<br>";
$human = $human->setMoney(500);
echo $human;
echo "<br>";
$human = $human->AddMoney(3500);
echo $human;