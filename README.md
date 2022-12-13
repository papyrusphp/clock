# 📜 Papyrus Clock
[![Build Status](https://scrutinizer-ci.com/g/papyrusphp/clock/badges/build.png?b=main)](https://github.com/papyrusphp/clock/actions)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/papyrusphp/clock.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/clock/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/papyrusphp/clock.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/clock)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/papyrus/clock.svg?style=flat&include_prereleases)](https://packagist.org/packages/papyrus/clock)
[![PHP Version](https://img.shields.io/badge/php-%5E8.1-8892BF.svg?style=flat)](http://www.php.net)

A Clock implementation ([PSR-20](https://github.com/php-fig/clock)) for [papyrus/event-sourcing](https://github.com/papyrusphp/event-sourcing).

This library contains a simple 'system' implementation for a Clock.

Usable in [papyrus/event-store](https://github.com/papyrusphp/event-store).

## Installation
Install via composer:
```bash
composer require papyrus/clock
```

## Configuration
Bind your own implementation or the included `SystemClock` to the interface `ClockInterface` in your service definitions, e.g.:

A plain PHP PSR-11 Container definition:
```php
use Papyrus\Clock\System\SystemClock;
use Psr\Clock\ClockInterface;
use Psr\Container\ContainerInterface;

return [
    // Other definitions
    // ...

    ClockInterface::class => static fn (ContainerInterface $container): ClockInterface => new SystemClock(),
];
```
A Symfony YAML-file definition:
```yaml
services:
  _defaults:
    autowire: true
    autoconfigure: true

  # Other definitions
  # ...

  Psr\Clock\ClockInterface:
    class: Papyrus\Clock\System\SystemClock
```
