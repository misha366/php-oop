<?php
declare(strict_types=1);

require_once "../vendor/autoload.php";

$worker = new \App\Worker();
$worker->work();