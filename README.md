# 📜 Papyrus Clock
A Clock implementation (inspired by PSR-20) for [papyrus/event-sourcing](https://github.com/papyrusphp/event-sourcing).

This library contains both an interface (the contract) as a simple 'system' implementation for a Clock.

Usable in [papyrus/event-store](https://github.com/papyrusphp/event-store).

## Installation
Install via composer:
```bash
$ composer install papyrus/clock
```

## Configuration
Bind your own implementation or the included `SystemClock` to the interface `Clock` in your service definitions, e.g.:

A plain PHP PSR-11 Container definition:
```php
use Papyrus\Clock\Clock;
use Papyrus\Clock\System\SystemClock;
use Psr\Container\ContainerInterface;

return [
    // Other definitions
    // ...

    Clock::class => static fn (ContainerInterface $container): Clock => new SystemClock(),
];
```
A Symfony YAML-file definition:
```yaml
services:
    Papyrus\Clock\Clock:
        class: Papyrus\Clock\System\SystemClock
```
