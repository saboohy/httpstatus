# HttpStatus

This is a PHP library for HTTP status codes, messages and error exceptions.

## Requirements

* PHP >= 8.1

## Installation

You can install the package via composer:

```bash
composer require saboohy/httpstatus
```

## Usage

```php
use Saboohy\HttpStatus\Success;

echo Success::OK->value;
echo Success::OK->message();
```

## Enums

There are 5 enum objects in this library. **Info**, **Success**, **Redirect**, **Client** and **Server**.

### Informational Responses (1xx)

Cases for informational responses are organized inside of **Info** enum.

| Case                | Code |
| ------------------- | ---- |
| CONTINUE            | 100  |
| SWITCHING_PROTOCOLS | 101  |
| PROCESSING          | 102  |
| EARLY_HINTS         | 103  |

#### Usage

```php
use Saboohy\HttpStatus\Info;

echo Info::CONTINUE->value;
```

### Successful Responses (2xx)

Successful responses are organized inside of **Success** enum.

| Case                          | Code |
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

echo Success::OK->value;
```

### Redirection Messages (3xx)

Redirect responses are organized inside of **Redirect** enum.

| Case               | Code |
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

echo Redirect::MULTIPLE_CHOICES->value;
```

### Client Error Responses (4xx)

Cases for client error responses are organized inside of **Client** enum.

| Case                            | Code |
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
| CLIENT_CLOSED_REQUEST           | 499  |

#### Usage

```php
use Saboohy\HttpStatus\Client;

echo Client::BAD_REQUEST->value;
```

### Server Error Responses (5xx)

Cases for server error responses are organized inside of **Server** enum.

| Case                            | Code |
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
| NETWORK_READ_TIMEOUT_ERROR      | 598  |
| NETWORK_CONNECT_TIMEOUT_ERROR   | 599  |

#### Usage

```php
use Saboohy\HttpStatus\Server;

echo Server::INTERNAL_SERVER_ERROR->value;
```

## HttpErrorException

This class is used for error exceptions. The "constructor" method of this class must receive a case of enum. Remember that the value you will give must be of type 4xx and 5xx.

### Usage

```php
use Saboohy\HttpStatus\Client;
use Saboohy\HttpStatus\HttpErrorException;

throw new HttpErrorException(Client::BAD_REQUEST);
```

## License

The MIT License (MIT). Please, look at [License File](LICENSE.md) for more information.