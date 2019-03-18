# balloon php sdk

[![Build Status](https://travis-ci.org/gyselroth/balloon-sdk-php.svg?branch=master)](https://travis-ci.org/gyselroth/balloon-sdk-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gyselroth/balloon-sdk-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gyselroth/balloon-sdk-php/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gyselroth/balloon-sdk-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gyselroth/balloon-sdk-php/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/gyselroth/balloon-sdk.svg)](https://packagist.org/packages/gyselroth/balloon-sdk)
[![GitHub release](https://img.shields.io/github/release/gyselroth/balloon-sdk-php.svg)](https://github.com/gyselroth/balloon-sdk-php/releases)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/gyselroth/balloon-sdk-php/master/LICENSE)

## Requirements
* PHP >= 7.0

## Download
The package is available at [packagist](https://packagist.org/packages/gyselroth/balloon-sdk)

To install the package via composer execute:
```
composer require gyselroth/balloon-sdk
```

## Basic usage

```php
use Balloon\Sdk\Configuration;
use Balloon\Sdk\Api\CoreV2Api;
use GuzzleHttp\Client;

$client = new Client();
$config = new Configuration();
$config->setAuthMethod('token');
$config->setHost('https://localhost:8081');
$config->setAccessToken('0dadcc7510979af9e2b8c58bd76cc611ac7453ec');
    
$core = new CoreV2Api($client, $config);
$core->getNodes();
```
