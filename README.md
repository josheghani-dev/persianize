# Persianize
Persianize is set of php tools to validating and converting data in true persian.


## Convert
This object helps you to change pharses to right persian

### Number
Convert English and Arabic numbers to Persian numbers.

```php
echo Persian::convert('0123456789')->number()->get(); // Output --> ۰۱۲۳۴۵۶۷۸۹
```

### Remove Arabic charachter
Remove Arabic keyboard charachters from persian text.

```php
echo Persian::convert('فارسي')->removeArabicChar()->get(); // Output --> فارسی
```

### Replace space with half-space
Detect persian verbs and replace space with half-space
```php
echo Persian::convert('می روی')->halfSpace()->get(); // Output --> می‌روی
```

### Full Convert
This method will convert number, convert arabic charachters to persian and replace space with half-space.

```php
echo Persian::convert('فارسي 1')->halfSpace()->get(); // Output --> فارسی ۱
```

## Validate
Validating Persian language inputs like persian number, persian alphabet...

### Alphabel
Validate Persian Alphabet

```php
Persian::validator('فارسی')->alpha()->get(); // Output --> TRUE
```

### Number
Validate Persian Number

```php
Persian::validator('۱۲۳')->num()->get(); // Output --> TRUE
```

### Text
Validate True Perisan text, contains aplha, numeric, space and half-space

```php
Persian::validator('این ۱ عبارت فارسی است')->text()->get(); // Output --> TRUE
```

### Mobile
Validate Iran Mobile numbers

```php
Persian::validator('+9891212345678')->mobile()->get(); // Output --> TRUE
```

### Postal Code
Validate Iran postal code

```php
Persian::validator('1234567789')->postal()->get(); // Output --> TRUE
```




