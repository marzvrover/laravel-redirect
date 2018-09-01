# laravel-redirect

## Install
You can install the package with composer:

```bash
composer require mdooley47/laravel-redirect
```

## How To Use

The purpose of this package is to provide a default `targetUrl` when redirecting in Laravel, if the current target does not match the desired url.

Simply call `defaultTarget($options, $default)` on the Redirect Facade.<br>
`$options` either an array listing the robust validation options provided by [mdooley47/laravel-urlvalidator](https://github.com/mdooley47/laravel-urlvalidator) or a string that will use the `host` validator provided by [mdooley47/laravel-urlvalidator](https://github.com/mdooley47/laravel-urlvalidator).

```php
\Illuminate\Support\Facades\Redirect::back()
    ->defaultTarget('match.domain.tld', 'default.domain.tld');

// Returns \Illuminate\Support\Facades\Redirect::getTargetUrl()
```
