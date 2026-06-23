ixudra/formidable
================

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ixudra/formidable.svg?style=flat-square)](https://packagist.org/packages/ixudra/formidable)
[![license](https://img.shields.io/github/license/ixudra/formidable.svg)]()
[![Total Downloads](https://img.shields.io/packagist/dt/ixudra/formidable.svg?style=flat-square)](https://packagist.org/packages/ixudra/formidable)


![Ixudra Formidable](https://repository-images.githubusercontent.com/18486198/cd2b2080-de01-11e9-8fb1-e64ffe5e9816)

Custom PHP formidable library for the Laravel framework - developed by [Ixudra](http://ixudra.be).

The package provides an easy interface for sending formidable requests from your PHP web application. The package provides an 
intuitive, fluent interface similar the Laravel query builder to easily configure the request. Additionally, There are 
several utility methods that allow you to easily add certain options to the request. This makes it easier to create and
use formidable requests and also makes your code more comprehensible.

The provided functionality is completely framework-independent but also contains a Laravel service provider for easy 
integration into your Laravel project.


 > Note before posting an issue: When posting an issue for the package, always be sure to provide as much information 
 > regarding the request as possible. This includes the example formidable request you are trying to transfer into the package
 > syntax, your actual package syntax (the full request) and (if possible) an example URL I can use to test the request
 > myself if need be.




## Installation

Pull this package in through Composer.

```js

    {
        "require": {
            "ixudra/formidable": "0.*"
        }
    }

```

or run in terminal:
`composer require ixudra/formidable`

### Laravel Integration

Laravel's package discovery will take care of integration for you.


### Integration without Laravel

Create a new instance of the `FormidableService` where you would like to use the package:

```php

    $formidableService = new \Ixudra\Formidable\FormidableService();

```




## Usage

To be added soon!


## Planning

To be added soon!




## Support

Help me further develop and maintain this package by supporting me via [Patreon](https://www.patreon.com/ixudra)!!




## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)




## Contact

For package questions, bug, suggestions and/or feature requests, please use the Github issue system and/or submit a pull request. When submitting an issue, always provide a detailed explanation of your problem, any response or feedback your get, log messages that might be relevant as well as a source code example that demonstrates the problem. If not, I will most likely not be able to help you with your problem. Please review the [contribution guidelines](https://github.com/ixudra/formidable/blob/master/CONTRIBUTING.md) before submitting your issue or pull request.

For any other questions, feel free to use the credentials listed below: 

Jan Oris (developer)

- Email: jan.oris@ixudra.be
- Telephone: +32 496 94 20 57
