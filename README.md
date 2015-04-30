# Persianize
Persianize is set of php tools for validating and converting data in true persian.

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

```php
composer require "coffeetalkh/persianize":"dev-master"
// OR, if you just have composer.phar
php composer.phar require "coffeetalkh/persianize":"dev-master"
```

### Manual installation
If you didn't use dependency management systems you can install persianize in manual way, download ZIP file and then extract it and all you need if require 'Persianize.php' file on your project and use ```Persian``` Class.

## Convert
This object helps you to change pharses to right persian

```php
use persianize\convert;

$convert = new persianize\convert\Convert;
```

### Number
Convert English and Arabic numbers to Persian numbers.

```php
$convert->number('0123456789')->get(); // Output --> ۰۱۲۳۴۵۶۷۸۹
```

### Remove Arabic charachter
Remove Arabic keyboard charachters from persian text.

```php
$convert->removeArabicCht('فارسي')->get(); // Output --> فارسی
```

### Replace space with half-space
Detect persian verbs and replace space with half-space
```php
$convert->halfSpace('می روی')->get(); // Output --> می‌روی
```

### Full Convert
This method will convert number, convert arabic charachters to persian and replace space with half-space.

```php
$convert->halfSpac('فارسي 1')->get(); // Output --> فارسی ۱
```

## Validate
Validating Persian language inputs like persian number, persian alphabet...

```php
use persianize\validate;

$validator = new persianize\validator\validator;
```

### Alphabel
Validate Persian Alphabet

```php
$validator->alpha('فارسی')->get(); // Output --> TRUE
```

### Number
Validate Persian Number

```php
$validator->num('۱۲۳')->get(); // Output --> TRUE
```

### Alphabel and Number
Validate Persian AlphaNumeric value

```php
$validator->num('فارسی۱۲۳')->get(); // Output --> TRUE
```

### Text
Validate True Perisan text, contains aplha, numeric, space and half-space

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
