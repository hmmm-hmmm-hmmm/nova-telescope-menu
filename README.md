# Nova Telescope Menu

[![Latest Version](https://img.shields.io/github/release/hmmm-hmmm-hmmm/nova-telescope-menu.svg?style=flat-square)](https://github.com/hmmm-hmmm-hmmm/nova-telescope-menu/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/hmmm-hmmm-hmmm/nova-telescope-menu.svg?style=flat-square)](https://packagist.org/packages/hmmm-hmmm-hmmm/nova-telescope-menu)

## Introduction

The Nova Telescope Menu package provides an easy way to integrate Telescope into your Laravel Nova dashboard, allowing you to access Laravel Telescope directly from your Nova application.

## Installation

To install this package, you can use Composer:

```bash
composer require hmmm-hmmm-hmmm/nova-telescope-menu
```

## Usage

After installing the package, you'll need to register the tool in your app/Providers/NovaServiceProvider.php:

```php
use HmmmHmmmHmmm\NovaTelescopeMenu\NovaTelescopeMenu;

// ...

public function tools()
{
    return [
        // ... Other Nova tools ...
        new NovaTelescopeMenu,
    ];
}
```

This registration will add a new menu item in your Nova dashboard that links to Laravel Telescope, making it easily accessible for debugging and monitoring your application.

## Configuration
The Nova Telescope Menu package doesn't require additional configuration out of the box. However, if you need to customize its behavior, you can change several options.

```php
use HmmmHmmmHmmm\NovaTelescopeMenu\NovaTelescopeMenu;

// ...

public function tools()
{
    return [
        // ... Other Nova tools ...
        (new NovaTelescopeMenu())->setName('MyCustomName')->setIcon('briefcase'),
    ];
}
```
