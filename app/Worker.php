<?php
declare(strict_types=1);

namespace App;

use function Util\echoHtmlLine;

// Все "переменные" класса - поля
// Все "функции" класса - методы
class Worker {
    // Каждый класс должен выполнять какое-то одно конкретное действия.
    // Второе действие - второй класс, в один всё пихать не надо.
    public string $name;
    public int $age;
    public array $hours;

    public function __construct(string $name, int $age, array $hours) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work() {
        echoHtmlLine("working...");
    }

}