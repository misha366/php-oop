<?php
declare(strict_types=1);

namespace App;

use function Util\echoHtmlLine;

// Перед классом Worker не добавляем \App\, потому что оба класса
// лежать в одной папке

// Наследуется всегда более конкретный класс от более абстрактного класса
class Developer extends Worker {
    // есть возможность доступа к родительскому полю с модификатором protected
    protected string $position = 'developer';

    // Переопределение родительского метода
    public function work() {
        echoHtmlLine("developer working");
    }
}