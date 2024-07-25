# A filamentphp plugin for creating and displaying beautiful release note / changelog pages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mark-nicepants/filament-release-notes.svg?style=flat-square)](https://packagist.org/packages/mark-nicepants/filament-release-notes)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mark-nicepants/filament-release-notes/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mark-nicepants/filament-release-notes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mark-nicepants/filament-release-notes/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mark-nicepants/filament-release-notes/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mark-nicepants/filament-release-notes.svg?style=flat-square)](https://packagist.org/packages/mark-nicepants/filament-release-notes)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mark-nicepants/filament-release-notes
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-release-notes-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-release-notes-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-release-notes-views"
```

## Usage

```php
$filamentReleaseNotes = new Nicepants\FilamentReleaseNotes();
echo $filamentReleaseNotes->echoPhrase('Hello, Nicepants!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nicepants](https://github.com/mark-nicepants)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
