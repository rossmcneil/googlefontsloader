# Google Fonts Loader

A small Laravel package to load google fonts into your application.

## Installation

### 1 - Dependency
The first step is using composer to install the package and automatically update your `composer.json` file, you can do this by running:
```shell
composer require rossmcneil/googlefontsloader
```
> **Note**: If you are using Laravel 5.5, the steps 2 and 3, for providers and aliases, are unnecessaries. GoogleFontsLoader supports Laravel new [Package Discovery](https://laravel.com/docs/5.5/packages#package-discovery).

### 2 - Provider
You need to update your application configuration in order to register the package so it can be loaded by Laravel, just update your `config/app.php` file adding the following code at the end of your `'providers'` section:

> `config/app.php`

```php
// file START ommited
    'providers' => [
        // other providers ommited
        RossMcNeil\GoogleFontsLoader\Providers\GoogleFontsLoaderServiceProvider::class,
    ],
// file END ommited
```

### 3 - Facade

In order to use the `GoogleFontsLoader` facade, you need to register it on the `config/app.php` file, you can do that the following way:

```php
// file START ommited
    'aliases' => [
        'GoogleFontsLoader' => RossMcNeil\GoogleFontsLoader\Facades\GoogleFontsLoader::class,
    ],
// file END ommited
```


### 4 Configuration

#### Publish config

In your terminal type
```shell
php artisan vendor:publish
```
or
```shell
php artisan vendor:publish --provider="RossMcNeil\GoogleFontsLoader\Providers\GoogleFontsLoaderServiceProvider"
```

In `googlefontsloader.php` configuration file you can determine the properties of the default values and some behaviors.

#### googlefontsloader.php

**fonts**
- Is an array of fonts you wish to load in.
**display**
- Is the value used for the font-display setting.

## Usage

### In Your View
```html
<html>
<head>
	{!! GoogleFontsLoader::load() !!}

    <!-- You may also pass the fonts into the load method as an array. This will override the config settings. -->
	{!! GoogleFontsLoader::load([
        'Open Sans:400,700'
    ]) !!}
</head>
<body>

</body>
</html>
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email ross@digizu.co.uk instead of using the issue tracker.

## Credits

- [Ross McNeil][https://rossmcneil.com]

## License

Please see the [license file](license.md) for more information.