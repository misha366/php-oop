<?php
declare(strict_types=1);

use App\Developer;
use App\Salary;
use function Util\echoLine;

require_once "../vendor/autoload.php";

$worker = new Developer("John", 27, [2, 6, 10], "medium");
$worker->setAge($worker->getAge() + 1);
$worker->work();
echoLine("{$worker->getAge()}");

$worker->rest();

$salary = Salary::count($worker->getHours());
$totalHours = Salary::$totalHours;
echoLine("{$worker->getName()}'s salary: $salary");
echoLine("{$worker->getName()}'s total hours: $totalHours");

//var_dump($worker);