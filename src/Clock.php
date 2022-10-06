<?php

declare(strict_types=1);

namespace Papyrus\Clock;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
