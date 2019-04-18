Update-model logger for Laravel
=================
[![Laravel 5](https://img.shields.io/badge/Laravel-5-orange.svg?style=flat-square)](http://laravel.com)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

The alexkovt/update-model-logger package allows to write to the log message when the model is updated
  
Installation
------------------
You can install the package via composer:

```
composer require alexkovt/update-model-logger
```

Usage
-------------

```php
<?php

namespace App\User;

use Alexkovt\UpdateModelLogger\UpdateModelLogger;

class User extends Model
{
	use UpdateModelLogger;
	
	...	
}
```
