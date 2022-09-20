
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# a PHP package for searching values in large arrays faster

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ezzaze/binary-search.svg?style=flat-square)](https://packagist.org/packages/ezzaze/binary-search)
[![Tests](https://github.com/ezzaze/binary-search/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/ezzaze/binary-search/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/ezzaze/binary-search.svg?style=flat-square)](https://packagist.org/packages/ezzaze/binary-search)

A small PHP package to help you perform a search in large scale arrays with a dramatically improved performance.

## Installation

You can install the package via composer:

```bash
composer require ezzaze/binary-search
```

## Usage

```php
use Ezzaze\BinarySearch\BinarySearch;

$haystack = range(1,1000000);
$result1 = BinarySearch::exists(500, $haystack); //true
$result2 = BinarySearch::exists(0, $haystack); //false
```

If you have an already pre-sorted array you can skip the sorting before search by supplying false to the 3rd parameter
```php
use Ezzaze\BinarySearch\BinarySearch;

$haystack = range(1,1000000);
$result = BinarySearch::exists(500, $haystack, false);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marwane Ezzaze](https://github.com/ezzaze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
