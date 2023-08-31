<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\EnumReflector;

/**
 * Client error responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Client
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
enum Client: int
{
    use EnumReflector;
    
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case NOT_ACCEPTABLE = 406;
    case PROXY_AUTHENTICATION_REQUIRED = 407;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case GONE = 410;
    case LENGTH_REQUIRED = 411;
    case PRECONDITION_FAILED = 412;
    case PAYLOAD_TOO_LARGE = 413;
    case URI_TOO_LONG = 414;
    case UNSUPPORTED_MEDIA_TYPE = 415;
    case RANGE_NOT_SATISFIABLE = 416;
    case EXPECTATION_FAILED = 417;
    case IM_A_TEAPOT = 418;
    case MISDIRECTED_REQUEST = 421;
    case UNPROCESSABLE_ENTITY = 422;
    case LOCKED = 423;
    case FAILED_DEPENDENCY = 424;
    case TOO_EARLY = 425;
    case UPGRADE_REQUIRED = 426;
    case PRECONDITION_REQUIRED = 428;
    case TOO_MANY_REQUESTS = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    case CLIENT_CLOSED_REQUEST = 499;

    /**
     * Returns message by case
     * 
     * @return string
     */
    public function message(): string
    {
        return match($this) {
            Client::BAD_REQUEST => "Bad Request",
            Client::UNAUTHORIZED => "Unauthorized",
            Client::FORBIDDEN => "Forbidden",
            Client::NOT_FOUND => "Not Found",
            Client::METHOD_NOT_ALLOWED => "Method Not Allowed",
            Client::NOT_ACCEPTABLE => "Not Acceptable",
            Client::PROXY_AUTHENTICATION_REQUIRED => "Proxy Authentication Required",
            Client::REQUEST_TIMEOUT => "Request Timeout",
            Client::CONFLICT => "Conflict",
            Client::GONE => "Gone",
            Client::LENGTH_REQUIRED => "Length Required",
            Client::PRECONDITION_FAILED => "Precondition Failed",
            Client::PAYLOAD_TOO_LARGE => "Payload Too Large",
            Client::URI_TOO_LONG => "URI Too Long",
            Client::UNSUPPORTED_MEDIA_TYPE => "Unsupported Media Type",
            Client::RANGE_NOT_SATISFIABLE => "Range Not Satisfiable",
            Client::EXPECTATION_FAILED => "Expectation Failed",
            Client::IM_A_TEAPOT => "I'm a teapot",
            Client::MISDIRECTED_REQUEST => "Misdirected Request",
            Client::UNPROCESSABLE_ENTITY => "Unprocessable Entity",
            Client::LOCKED => "Locked",
            Client::FAILED_DEPENDENCY => "Failed Dependency",
            Client::TOO_EARLY => "Too Early",
            Client::UPGRADE_REQUIRED => "Upgrade Required",
            Client::PRECONDITION_REQUIRED => "Precondition Required",
            Client::TOO_MANY_REQUESTS => "Too Many Requests",
            Client::REQUEST_HEADER_FIELDS_TOO_LARGE => "Request Header Fields Too Large",
            Client::UNAVAILABLE_FOR_LEGAL_REASONS => "Unavailable For Legal Reasons",
            Client::CLIENT_CLOSED_REQUEST => "Client Closed Request"
        };
    }
}