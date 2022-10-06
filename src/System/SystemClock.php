<?php

declare(strict_types=1);

namespace Papyrus\Clock\System;

use DateTimeImmutable;
use Papyrus\Clock\Clock;

final class SystemClock implements Clock
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
