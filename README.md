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
echo Persian::convert('فارسي 1')->halfSpace()->get(); // Output --> فارسی 1
```
