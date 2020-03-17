# Laravel Package Development

[![Latest Version](https://badgen.net/packagist/v/kodekeep/laravel-package-development)](https://packagist.org/packages/kodekeep/laravel-package-development)
[![Software License](https://badgen.net/packagist/license/kodekeep/laravel-package-development)](https://packagist.org/packages/kodekeep/laravel-package-development)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/laravel-package-development/run-tests?label=tests)](https://github.com/kodekeep/laravel-package-development/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/laravel-package-development)](https://codeclimate.com/github/kodekeep/laravel-package-development)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/laravel-package-development)](https://codeclimate.com/github/kodekeep/laravel-package-development)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/laravel-package-development)](https://packagist.org/packages/kodekeep/laravel-package-development)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides DX improvements and helpers for package development with Laravel.

## Installation

```bash
composer require kodekeep/laravel-package-development
```

## Usage

``` php
$skeleton = new KodeKeep\Skeleton();
echo $skeleton->echoPhrase('Hello, KodeKeep!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Laravel Package Development is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
