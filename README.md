# Common Contracts for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bekwoh/laravel-contract.svg?style=flat-square)](https://packagist.org/packages/bekwoh/laravel-contract)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bekwoh/laravel-contract/run-tests?label=tests)](https://github.com/bekwoh/laravel-contract/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bekwoh/laravel-contract/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/bekwoh/laravel-contract/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bekwoh/laravel-contract.svg?style=flat-square)](https://packagist.org/packages/bekwoh/laravel-contract)

A simple package to handle common contracts. 

## Installation

You can install the package via composer:

```bash
composer require bekwoh/laravel-contract
```


## Usage

```bash
php artisan make:contract Action
```

The command will generate the contract:

```php
<?php

namespace App\Contracts;

interface Action 
{
    
}
```

Available contracts in this package:

[Bekwoh/LaravelContract/Contracts/Api](src/Contracts/Api.php)

This allow standard form of getting the API response structure. However, you don't need to use this if using Pagination.

```php 
return response()->json(
    $api->getApiResponse(request()),
    $api->getCode()
);
```

[Bekwoh/LaravelContract/Contracts/Builder](src/Contracts/Builder.php)

This contract allow you to build objects more consistent. `$wall->build()`, `$door->build()`. 

For your reference: [Builder](https://refactoring.guru/design-patterns/builder)

[Bekwoh/LaravelContract/Contracts/Execute](src/Contracts/Execute.php)

Execute contract allow you to consistently call `$object->execute()`. This contract usually use when we are triggering something to be execute after preparing the object.

[Bekwoh/LaravelContract/Contracts/Menu](src/Contracts/Menu.php)

Menu contract simpley return a list of menus that you can use to build your Sidebar, Navbar, etc.

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

- [Nasrul Hazim Bin Mohamad](https://github.com/nasrulhazim)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
