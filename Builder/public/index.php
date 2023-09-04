<?php
require_once "../src/Human.php";

use immutable\Builder;
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

/*$humanBuilder = $human->useBuilder($human);
$humanBuilder->Weight(99);
$humanBuilder->Money(999);
$humanBuilder->Money(888);
$human2=$humanBuilder->build();
var_dump($human2);
echo $human2;*/

$humanBuilder = new Builder();
$humanBuilder->Money(5555);
$humanBuilder->Weight(165);
$humanBuilder->Height(195);
$human2=$humanBuilder->build();
var_dump($human2);
var_dump($humanBuilder);