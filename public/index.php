<?php
declare(strict_types=1);

require_once "../vendor/autoload.php";

$worker = new \App\Worker("John", 27, [2, 6, 10]);
//$worker->work();
var_dump($worker);