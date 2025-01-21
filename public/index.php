<?php
declare(strict_types=1);

use App\Developer;

require_once "../vendor/autoload.php";

$worker = new Developer("John", 27, [2, 6, 10]);
$worker->work();
//var_dump($worker);