# HttpStatus

This is a PHP library for HTTP status codes, messages and error exception. Within the library, HTTP status codes are available in classes based on the section they belong to.

## Requirements

* PHP >= 7.4

## Installation

You can install the package via composer:

```bash
composer require saboohy/httpstatus
```

## Example

```php
require 'vendor/autoload.php';

use Saboohy\HttpStatus\Message;
use Saboohy\HttpStatus\Success;

echo Message::get(Success::OK);
```

## Topics

The **HttpStatus** package is arranged from 3 types of classes. Classes expressing status codes, class that returns messages according to codes and exception class.

### Informational Responses (1xx)

Constants for informational responses are organized inside of `Info` class. You can use the class for status codes 100, 101, 102 and 103.

#### Constants

| Constant            | Code |
| ------------------- | ---- |
| CONTINUE            | 100  |
| SWITCHING_PROTOCOLS | 101  |
| PROCESSING          | 102  |
| EARLY_HINTS         | 103  |

#### Usage

```php
use Saboohy\HttpStatus\Info;

echo Info::CONTINUE;
```

### Successful Responses (2xx)

Successful responses are organized inside of `Success` class. You can use the class for status codes 200, 201, 202, 203, 204, 205, 206, 207, 208 and 226.

#### Constants

| Constant                      | Code |
| ----------------------------- | ---- |
| OK                            | 200  |
| CREATED                       | 201  |
| ACCEPTED                      | 202  |
| NON_AUTHORITATIVE_INFORMATION | 203  |
| NO_CONTENT                    | 204  |
| RESET_CONTENT                 | 205  |
| PARTIAL_CONTENT               | 206  |
| MULTI_STATUS                  | 207  |
| ALREADY_REPORTED              | 208  |
| IM_USED                       | 226  |


#### Usage

```php
use Saboohy\HttpStatus\Success;

echo Success::OK;
```

### Redirection Messages (3xx)

Redirect responses are organized inside of `Redirect` class. You can use the class for status codes 300, 301, 302, 303, 304, 307 and 308.

#### Constants

| Constant           | Code |
| ------------------ | ---- |
| MULTIPLE_CHOICES   | 300  |
| MOVED_PERMANENTLY  | 301  |
| FOUND              | 302  |
| SEE_OTHER          | 303  |
| NOT_MODIFIED       | 304  |
| TEMPORARY_REDIRECT | 307  |
| PERMANENT_REDIRECT | 308  |

#### Usage

```php
use Saboohy\HttpStatus\Redirect;

echo Redirect::MULTIPLE_CHOICES;
```

### Client Error Responses (4xx)

Constants for client error responses are organized inside of `Client` class. You can use the class for status codes 400, 401, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 418, 421, 422, 423, 424, 425, 426, 428, 429, 431 and 451.

#### Constants

| Constant                        | Code |
| ------------------------------- | ---- |
| BAD_REQUEST                     | 400  |
| UNAUTHORIZED                    | 401  |
| FORBIDDEN                       | 403  |
| NOT_FOUND                       | 404  |
| METHOD_NOT_ALLOWED              | 405  |
| NOT_ACCEPTABLE                  | 406  |
| PROXY_AUTHENTICATION_REQUIRED   | 407  |
| REQUEST_TIMEOUT                 | 408  |
| CONFLICT                        | 409  |
| GONE                            | 410  |
| LENGTH_REQUIRED                 | 411  |
| PRECONDITION_FAILED             | 412  |
| PAYLOAD_TOO_LARGE               | 413  |
| URI_TOO_LONG                    | 414  |
| UNSUPPORTED_MEDIA_TYPE          | 415  |
| RANGE_NOT_SATISFIABLE           | 416  |
| EXPECTATION_FAILED              | 417  |
| IM_A_TEAPOT                     | 418  |
| MISDIRECTED_REQUEST             | 421  |
| UNPROCESSABLE_ENTITY            | 422  |
| LOCKED                          | 423  |
| FAILED_DEPENDENCY               | 424  |
| TOO_EARLY                       | 425  |
| UPGRADE_REQUIRED                | 426  |
| PRECONDITION_REQUIRED           | 428  |
| TOO_MANY_REQUESTS               | 429  |
| REQUEST_HEADER_FIELDS_TOO_LARGE | 431  |
| UNAVAILABLE_FOR_LEGAL_REASONS   | 451  |

#### Usage

```php
use Saboohy\HttpStatus\Client;

echo Client::BAD_REQUEST;
```

### Server Error Responses (5xx)

Constants for server error responses are organized inside of `Server` class. You can use the class for status codes 500, 501, 502, 503, 504, 505, 506, 507, 508, 510 and 511.

#### Constants

| Constant                        | Code |
| ------------------------------- | ---- |
| INTERNAL_SERVER_ERROR           | 500  |
| NOT_IMPLEMENTED                 | 501  |
| BAD_GATEWAY                     | 502  |
| SERVICE_UNAVAILABLE             | 503  |
| GATEWAY_TIMEOUT                 | 504  |
| HTTP_VERSION_NOT_SUPPORTED      | 505  |
| VARIANT_ALSO_NEGOTIATES         | 506  |
| INSUFFICIENT_STORAGE            | 507  |
| LOOP_DETECTED                   | 508  |
| NOT_EXTENDED                    | 510  |
| NETWORK_AUTHENTICATION_REQUIRED | 511  |


#### Usage

```php
use Saboohy\HttpStatus\Server;

echo Server::INTERNAL_SERVER_ERROR;
```

### Message

"Message" class is used to receive the HTTP messages. It is possible to receive messages using the constants mentioned above to the `get` method present in it. The `get` method is **static**, takes a value of type integer and returns a result of type string. If any number not inside of the HTTP statuses is used, it will receive `0` and the equivalent of this value will be **"Status Not Found"**.

#### Usage

```php
use Saboohy\HttpStatus\Message;

echo Message::get(404);
```

### HttpErrorException

`HttpErrorException` class is used for error exceptions. The "constructor" method of this class must receive a value of type integer. It inherits from the `Exception` class,therefore you can get the value result set when using this class using the `getCode` method of the `Exception` class. Remember that the value you will give must be of type 4xx and 5xx.

#### Usage

```php
use Saboohy\HttpStatus\HttpErrorException;
use Saboohy\HttpStatus\Client;

throw new HttpErrorException(Client::NOT_FOUND);
```

## License

The MIT License (MIT). Please, look at [License File](LICENSE.md) for more information.