# laravel-videoable

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Laravel Videoable** is a quick and easy way to add a video to your Eloquent Models. It also features a way to generate the embed code directly.

``` php
$product = Product::create(['product_name' => 'something']);

$product->addVideo([
   'source' => 'youtube',
   'code' => '123',
   'title' => 'my video',
   'width' => 50,
   'height' => 150,
]);

// Get the embeddable code
$product->video->getEmbed();

// Returns
<div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="100%" height="100%"
                src="https://www.youtube.com/embed/123?rel=0"
                frameborder="0" allowfullscreen></iframe>
    </div>
</div>
```

## Install

Via Composer

``` bash
$ composer require nwidart/laravel-videoable
```

## Documentation

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email n.widart@gmail.com instead of using the issue tracker.

## Credits

- [Nicolas Widart][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/nwidart/laravel-videoable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/nwidart/laravel-videoable/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/nwidart/laravel-videoable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/nwidart/laravel-videoable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nwidart/laravel-videoable.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/nwidart/laravel-videoable
[link-travis]: https://travis-ci.org/nWidart/laravel-videoable
[link-scrutinizer]: https://scrutinizer-ci.com/g/nwidart/laravel-videoable/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/nwidart/laravel-videoable
[link-downloads]: https://packagist.org/packages/nwidart/laravel-videoable
[link-author]: https://github.com/nwidart
[link-contributors]: ../../contributors
