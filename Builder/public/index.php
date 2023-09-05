<?php
//require '../../bootstrap.php';
//require '../../vendor/autoload.php';
//require_once "../app/src/Human.php";App\Immutable\Human
//require_once "../app/src/Builder.php";

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);
    $class = __DIR__.'/../src/'. lcfirst($class).'.php';
    if (file_exists($class)){
        require $class;
    }
});

use App\Builder;
use App\Immutable\Human;
use App\Transaction;

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

$human = new Builder();
$human=$human->Weight(53)->Height(156)->Money(2000)->build();
var_dump($human);
echo $human;
echo "<br>";

$transation = new Transaction();
var_dump(Transaction::STATUS_PAID);
$transation->setStatus('pddaid');
var_dump($transation);
$transation->setStatus('paid');
var_dump($transation);