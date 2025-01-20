<?php
declare(strict_types=1);

require_once "../app/Worker.php";

$worker = new Worker();
$worker->work();