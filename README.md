# Persianize
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/coffeetalkh/persianize/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/coffeetalkh/persianize/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/coffeetalkh/persianize/v/stable)](https://packagist.org/packages/coffeetalkh/persianize) [![Total Downloads](https://poser.pugx.org/coffeetalkh/persianize/downloads)](https://packagist.org/packages/coffeetalkh/persianize) [![Latest Unstable Version](https://poser.pugx.org/coffeetalkh/persianize/v/unstable)](https://packagist.org/packages/coffeetalkh/persianize) [![License](https://poser.pugx.org/coffeetalkh/persianize/license)](https://packagist.org/packages/coffeetalkh/persianize)

Persianize is set of php tools for validating and converting data in true Persian.

* [Convert](#convert)
* [Validate](#validate)

## Installation

### Via Composer
Add following package to composer.json and then run ```composer update``` on console for manual installation.

```php
require: {
	"coffeetalkh/persianize":"dev-master"
}
```

Or run following command and then update composer by ```composer update```

```
composer require coffeetalkh/persianize
```

OR, if you just have composer.phar

```
php composer.phar require coffeetalkh/persianize
```

### Manual installation
If you didn't use dependency management systems you can install ```Persianize``` in manual way, download ZIP file and then extract it and all you need if require 'Persianize.php' file on your project and use ```Persian``` Class.

## Convert
This object helps you to change phrases to right persian

```php
use Persianize\Convert;

$convert = new Convert;
```

### Number
Convert English and Arabic numbers to Persian numbers.

```php
$convert->number('0123456789')->get(); // Output --> ۰۱۲۳۴۵۶۷۸۹
```

### Remove Arabic character
Remove Arabic keyboard characters from persian text.

```php
$convert->removeArabicChar('فارسي')->get(); // Output --> فارسی
```

### Replace space with half-space
Detect Persian verbs and replace space with half-space
```php
$convert->halfSpace('می روی')->get(); // Output --> می‌روی
```

### Full Convert
This method will convert number, convert arabic characters to persian and replace space with half-space.

```php
$convert->allOptions('فارسي 1')->get(); // Output --> فارسی ۱
```

### Use multi-options on single statement

```php
$convert->removeArabicChar('می روي')->halfSpace()->get(); // Output --> می‌روی

$convert->removeArabicChar('می روي 1')->halfSpace()->number()->get() // Output --> می‌روی ۱
```

## Validate
Validating Persian language inputs like Persian number, Persian alphabet...

```php
use Persianize\Validator;

$validator = new Validator;
```

### Alphabel
Validate Persian alphabet

```php
$validator->alpha('فارسی')->get(); // Output --> TRUE
```

### Number
Validate Persian number

```php
$validator->num('۱۲۳')->get(); // Output --> TRUE
```

### Alphabet and Number
Validate Persian alphaNumeric value

```php
$validator->num('فارسی۱۲۳')->get(); // Output --> TRUE
```

### Text
Validate True Perisan text, contains alpha, numeric, space and half-space

```php
$validator->text('این ۱ عبارت فارسی است')->get(); // Output --> TRUE
```

### Mobile
Validate Iran Mobile numbers

```php
$validator->mobile('+9891212345678')->get(); // Output --> TRUE
```

### Postal Code
Validate Iran postal code

```php
$validator->postal('1234567789')->get(); // Output --> TRUE
```

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/opencafe/datium/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
