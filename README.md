# yee-i18n

##Yee CMS Internationalization Migrations

####Migrations for Yee CMS powered site internationalization

This module is part of Yee CMS (based on Yii2 Framework).

Installation
------------

- Either run

```
composer require --prefer-dist yeesoft/yee-i18n "*"
```

or add

```
"yeesoft/yee-i18n": "*"
```

to the require section of your `composer.json` file.

- Run migrations. You must replace <locale> with locale you want to install.

```php
yii migrate --migrationPath=@vendor/yeesoft/yee-i18n/<locale>/
```

- List of supported locales:

  `uk` - Ukrainian

