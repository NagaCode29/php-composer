<?php


use MathPHP\Algebra;
use MathPHP\Statistics\Regression\Linear;
use MathPHP\Statistics\Regression\Regression;
use ProgrammerZamanNow\Belajar\Customer;
use function Sinagadioy\Libs\add;

require_once __DIR__.'/../vendor/autoload.php';

// Library from GitHub
$manager = new Customer('Rudi');
echo $manager->sayHello('Budiman').PHP_EOL;


// Library local
echo '2+3= '.add(2,3);


// Math
try {
    $result = Algebra::factors(12);
    var_dump($result);
} catch (\MathPHP\Exception\OutOfBoundsException $e) {
    echo $e->getMessage();
}

//Statistic Math
$points = [[1,2], [2,3], [4,5], [5,7], [6,8]];
$regression = new Linear($points);
$parameters = $regression->getParameters();
var_dump($parameters);

var_dump($regression->evaluate(7));
