# 📜 Papyrus Clock
[![Build Status](https://scrutinizer-ci.com/g/papyrusphp/clock/badges/build.png?b=main)](https://github.com/papyrusphp/clock/actions)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/papyrusphp/clock.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/clock/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/papyrusphp/clock.svg?style=flat)](https://scrutinizer-ci.com/g/papyrusphp/clock)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/papyrus/clock.svg?style=flat&include_prereleases)](https://packagist.org/packages/papyrus/clock)
[![PHP Version](https://img.shields.io/badge/php-%5E8.1-8892BF.svg?style=flat)](http://www.php.net)

A Clock implementation (inspired by PSR-20) for [papyrus/event-sourcing](https://github.com/papyrusphp/event-sourcing).

This library contains both an interface (the contract) as a simple 'system' implementation for a Clock.

Usable in [papyrus/event-store](https://github.com/papyrusphp/event-store).

## Installation
Install via composer:
```bash
composer require papyrus/clock
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
  _defaults:
    autowire: true
    autoconfigure: true

  # Other definitions
  # ...
  
  Papyrus\Clock\Clock:
    class: Papyrus\Clock\System\SystemClock
```
