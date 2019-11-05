# Laravel commentable model

[![Latest Stable Version](https://poser.pugx.org/orkhanahmadov/laravel-commentable/v/stable)](https://packagist.org/packages/orkhanahmadov/laravel-commentable)
[![Latest Unstable Version](https://poser.pugx.org/orkhanahmadov/laravel-commentable/v/unstable)](https://packagist.org/packages/orkhanahmadov/laravel-commentable)
[![Total Downloads](https://img.shields.io/packagist/dt/orkhanahmadov/laravel-commentable)](https://packagist.org/packages/orkhanahmadov/laravel-commentable)
[![License](https://img.shields.io/github/license/orkhanahmadov/laravel-commentable.svg)](https://github.com/orkhanahmadov/laravel-commentable/blob/master/LICENSE.md)

[![Build Status](https://img.shields.io/travis/orkhanahmadov/laravel-commentable.svg)](https://travis-ci.org/orkhanahmadov/laravel-commentable)
[![Test Coverage](https://api.codeclimate.com/v1/badges/a4872bcfe484d7cf613f/test_coverage)](https://codeclimate.com/github/orkhanahmadov/laravel-commentable/test_coverage)
[![Maintainability](https://api.codeclimate.com/v1/badges/a4872bcfe484d7cf613f/maintainability)](https://codeclimate.com/github/orkhanahmadov/laravel-commentable/maintainability)
[![Quality Score](https://img.shields.io/scrutinizer/g/orkhanahmadov/laravel-commentable.svg)](https://scrutinizer-ci.com/g/orkhanahmadov/laravel-commentable)
[![StyleCI](https://github.styleci.io/repos/219717468/shield?branch=master)](https://github.styleci.io/repos/219717468)

This package provides adding comments to any of your existing Eloquent models.

## Installation

You can install the package via composer:

```bash
composer require orkhanahmadov/laravel-commentable
```

Publish migration and config files:

```bash
php artisan vendor:publish --provider="Orkhanahmadov\LaravelCommentable\LaravelCommentableServiceProvider"
```

## Config

Config file contains following settings:
- `table_name` - here you are set table name for migration. Default is "comments".

## Usage

Use `Orkhanahmadov\LaravelCommentable\Commentable` trait in any of your existing Eloquent model to make it commentable.

``` php
use Illuminate\Database\Eloquent\Model;
use Orkhanahmadov\LaravelCommentable\Commentable;

class Post extends Model
{
    use Commentable;
}
```

To add a comment to your model call `comment()` method from model instance.

``` php
$post = Post::find(1);
$post->comment('Great post, thanks for sharing!');
```

To add a comment as a user call `commentAs()` method from model instance.

``` php
$post = Post::find(1);
$user = User::find(5);
$post->commentAs($user, 'Great post, thanks for sharing!');
```

Each comment also saves IP address, User-Agent from request.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadov90@gmail.com instead of using the issue tracker.

## Credits

- [Orkhan Ahmadov](https://github.com/orkhanahmadov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
