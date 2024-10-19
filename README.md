# slvler - Cuttly Service

[![tests](https://github.com/slvler/laravel-url-shortener/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/laravel-url-shortener)
[![Latest Stable Version](https://poser.pugx.org/slvler/cuttly/v)](https://packagist.org/packages/slvler/cuttly) 
![Latest Unstable Version](https://poser.pugx.org/slvler/cuttly/v/unstable)
[![License](https://poser.pugx.org/slvler/balldontlie-laravel/license)](https://packagist.org/packages/slvler/balldontlie-laravel)
[![Total Downloads](https://poser.pugx.org/slvler/cuttly/downloads)](https://packagist.org/packages/slvler/cuttly)

This package provides a convenient wrapper to the [Cuttly API](https://cutt.ly/api-documentation/regular-api)  for Laravel applications.

## Requirements

- PHP 8.0+
- Laravel 9.x

## Installation

To install this package tou can use composer:

```bash
    composer require slvler/cuttly
```


## Usage

#### Find player
``` php
    $data = [
        'short' => 'google.com'
        ];

    Cuttly::short($data);
```
URL Shortener:
```
{
  "url": {
    "status": 7,
    "fullLink": "http://google.com",
    "date": "2023-08-07",
    "shortLink": "https://cutt.ly/ewdVijlY",
    "title": "Google"
  }
}
```



#### Edit Url
``` php
    $data = [
       'edit' => 'cutt.ly/LwdCoBmo'
       ];

    Cuttly::edit($data);
```
Edit URL:
```
{
  "url": {
    "status": 1,
  }
}
```

#### Find games
``` php

    $data = [
       'stats' => 'cutt.ly/ewdVijlY'
       ];

    Cuttly::stats($data);
```
URL Stats:
```
{
  "stats": {
    "status": 1,
    "clicks": 0,
    "date": "2023-08-07",
    "title": "Google",
    "fullLink": "http://google.com",
    "shortLink": "https://cutt.ly/ewdVijlY",
    "facebook": 0,
    "twitter": 0,
    "pinterest": 0,
    "instagram": 0,
    "googlePlus": 0,
    "linkedin": 0,
    "rest": 0,
    "devices": {
      
    },
    "refs": {
      
    },
    "bots": "Insufficient subscription level"
  }
}
```





## Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)

## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/balldontlie-service/blob/main/LICENSE.md) for more information.

## Contributing
You're very welcome to contribute.
Please see [CONTRIBUTING](https://github.com/slvler/balldontlie-service/blob/main/CONTRIBUTING.md) for details.
