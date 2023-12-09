# SEO Meta Tags for Filament

Model and UI for managing SEO meta tags for Filament.

## Installation

You can install the package via composer:

```bash
composer require martin-ro/filament-seo-meta-tags
```

You can publish and run the migrations with:

```bash
php artisan filament-seo-meta-tags:install
```

## Preparing your model

```php
class Page extends Model
{
    use HasSeoMetaTags;

    // ...
}
```

## Components

### Title
```php
SeoTitle::make()
```

Configuration:
```php
SeoTitle::make(name: 'title', minLength: 50, maxLength: 70, rows: 2, strict: false)
```

### Description
```php
SeoDescription::make()
```

Configuration:
```php
SeoDescription::make(name: 'description', minLength: 150, maxLength: 165, rows: 4, strict: false)
```

### Robots
```php
SeoRobots::make()
```

## Optional Middleware

```bash
php artisan filament-seo-meta-tags:publish-middleware
```


In your `app/Http/Kernel.php` file, add the middleware to the `web` group:

```php
protected $middlewareGroups = [
    'web' => [
       // ...
       \App\Http\Middleware\AddSeoMetaTagDefaults::class,
    ],
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Martin Ro](https://github.com/martin-ro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
