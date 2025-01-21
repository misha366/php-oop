<?php
declare(strict_types=1);

use App\Developer;
use function Util\echoLine;

require_once "../vendor/autoload.php";

$worker = new Developer("John", 27, [2, 6, 10], "medium");
$worker->setAge($worker->getAge() + 1);
$worker->work();
echoLine("{$worker->getAge()}");

$worker->rest();
//var_dump($worker);