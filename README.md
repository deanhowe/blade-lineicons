# Blade Lineicons

<a href="https://github.com/datlechin/blade-lineicons/actions?query=workflow%3ATests">
    <img src="https://github.com/datlechin/blade-lineicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/datlechin/blade-lineicons">
    <img src="https://img.shields.io/packagist/v/datlechin/blade-lineicons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/datlechin/blade-lineicons">
    <img src="https://img.shields.io/packagist/dt/datlechin/blade-lineicons" alt="Total Downloads">
</a>

A package to easily make use of [Lineicons](https://lineicons.com) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [heroicons.com](https://heroicons.com/).

## Requirements

- PHP 8.1 or higher
- Laravel 9.0 or higher

## Installation

```bash
composer require datlechin/blade-lineicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade Lineicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Lineicons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-lineicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-lineicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-lineicons-capsule />
```

You can also pass classes to your icon components:

```blade
<x-lineicons-capsule class="w-6 h-6 text-gray-500" />
```

And even use inline styles:

```blade
<x-lineicons-capsule style="color: #555" />
```

The solid icons can be referenced like this:

```blade
<x-lineicons-capsule />
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-lineicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-lineicons/capsule.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Lineicons is developed and maintained by [Ngo Quoc Dat](https://ngoquocdat.dev).

## License

Blade Lineicons is open-sourced software licensed under [the MIT license](LICENSE.md).
