<?php

declare(strict_types=1);

namespace Papyrus\Clock\Test\System;

use DateTimeImmutable;
use Papyrus\Clock\System\SystemClock;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class SystemClockTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldReturnNow(): void
    {
        $clock = new SystemClock();
        $now = new DateTimeImmutable();

        // As we're comparing two 'now' timestamps created not on the exact same moment,
        // the time can flip exactly with a second (avoiding flaky test)
        self::assertLessThanOrEqual(1, abs($now->getTimestamp() - $clock->now()->getTimestamp()));
    }
}
