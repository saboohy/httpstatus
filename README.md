# Http Status

This is a PHP library for HTTP status codes, messages and error exception. Within the library, HTTP status codes are available in classes based on the section they belong to. Click [this link](https://saboohy.github.io/httpstatus) for more information.

## Installation

You can install the package via composer:

```bash
composer require saboohy/httpstatus
```

## Example

```php
<?php

require 'vendor/autoload.php';

use Saboohy\HttpStatus\Success;

echo Message::get(Success::OK);
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.