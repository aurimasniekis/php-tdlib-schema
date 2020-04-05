# PHP TdLib TD-API Schema

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Code Quality][ico-quality]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]

[![Email][ico-email]][link-email]

A TdLib PHP Schema with generator for generating PHP objects from [td_api.tl][td-api] file.


## Install

Via Composer

```bash
$ composer require aurimasniekis/tdlib-schema
```

## Usage

```php
<?php

use AurimasNiekis\TdLibSchema\TdSchemaRegistry;

$input = [
    '@type' => 'updateOption',
    'name' => 'version',
    'value' => [
        '@type' => 'optionValueString',
        'value' => '1.6.0',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will parse TdLib response to PHP Objects

```php
class AurimasNiekis\TdLibSchema\UpdateOption#3 (3) {
  protected string $name =>
  string(7) "version"
  protected AurimasNiekis\TdLibSchema\OptionValue $value =>
  class AurimasNiekis\TdLibSchema\OptionValueString#2 (2) {
    protected string $value =>
    string(5) "1.6.0"
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  NULL
}
```

Another example:

```php
<?php

use AurimasNiekis\TdLibSchema\TdSchemaRegistry;

$input = [
    '@extra' => 'foo',
    '@type' => 'updateAuthorizationState',
    'authorization_state' => [
        '@type' => 'authorizationStateWaitTdlibParameters',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will produce:

```php
class AurimasNiekis\TdLibSchema\UpdateAuthorizationState#3 (2) {
  protected AurimasNiekis\TdLibSchema\AuthorizationState $authorizationState =>
  class AurimasNiekis\TdLibSchema\AuthorizationStateWaitTdlibParameters#2 (1) {
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  string(3) "foo"
}
```

## Regenerate Objects

```bash
$ bin/generator
```

Also run code style fix to fix code generation style issues:

```bash
$ composer cs-fix
```


## Testing

Run PHP style checker

```bash
$ composer cs-check
```

Run PHP style fixer

```bash
$ composer cs-fix
```

Run all continuous integration tests

```bash
$ composer ci-run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/aurimasniekis/tdlib-schema.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/com/aurimasniekis/php-tdlib-schema/master.svg?style=flat-square
[ico-quality]: https://img.shields.io/scrutinizer/quality/g/aurimasniekis/php-tdlib-schema?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/aurimasniekis/php-tdlib-schema.svg?style=flat-square
[ico-email]: https://img.shields.io/badge/email-aurimas@niekis.lt-blue.svg?style=flat-square

[link-travis]: https://travis-ci.com/aurimasniekis/php-tdlib-schema
[link-packagist]: https://packagist.org/packages/aurimasniekis/tdlib-schema
[link-scrutinizer]: https://scrutinizer-ci.com/g/aurimasniekis/php-tdlib-schema
[link-downloads]: https://packagist.org/packages/aurimasniekis/tdlib-schema/stats
[link-email]: mailto:aurimas@niekis.lt
[td-api]: https://github.com/tdlib/td/blob/master/td/generate/scheme/td_api.tl
