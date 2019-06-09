# SMMHouse PHP Client

[![Build Status](https://img.shields.io/travis/plients/SMMHouse-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/SMMHouse-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/smmhouse.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/SMMHouse-PHP-Client.svg?style=flat-square)](https://github.com/plients/SMMHouse-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/SMMHouse-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/SMMHouse-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/smmhouse
```

## Usage

``` php
<?php

use Plients\Config;

$client = new Plients\SMMHouse\Client();
$client->setConfig(new Config(['key' => 'YOUR_API_KEY']));

try {
    $response = $client->api('Service')->details(1);

    dd($response);
} catch (Exception $e) {
    dd($e);
}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
