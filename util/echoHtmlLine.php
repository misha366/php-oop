<?php

declare(strict_types=1);

namespace Util;

function echoLine(string $text, bool $isTag = false): void {
    echo $text . ($isTag ? "<br/>" : "\n");
}