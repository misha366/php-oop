<?php
declare(strict_types=1);

namespace App;

use function Util\echoLine;

// Перед классом Worker не добавляем \App\, потому что оба класса
// лежать в одной папке

// Наследуется всегда более конкретный класс от более абстрактного класса
class Developer extends Worker {

    use HasRest;

    const DEVELOPER_POSITION = "developer";

    public function __construct(string $name, int $age, array $hours, string $experience)
    {
        parent::__construct($name, $age, $hours, $experience, self::DEVELOPER_POSITION);
    }

    public function work() : void {
        echoLine("developer working");
    }
}