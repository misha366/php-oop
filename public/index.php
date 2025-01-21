<?php
declare(strict_types=1);

use App\Developer;
use function Util\echoHtmlLine;

require_once "../vendor/autoload.php";

$worker = new Developer("John", 27, [2, 6, 10]);
$worker->setAge($worker->getAge() + 1);
$worker->work();
echoHtmlLine("{$worker->getAge()}");
//var_dump($worker);