<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

/**
 * Client error responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Client
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
final class Client
{
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const METHOD_NOT_ALLOWED = 405;
    public const NOT_ACCEPTABLE = 406;
    public const PROXY_AUTHENTICATION_REQUIRED = 407;
    public const REQUEST_TIMEOUT = 408;
    public const CONFLICT = 409;
    public const GONE = 410;
    public const LENGTH_REQUIRED = 411;
    public const PRECONDITION_FAILED = 412;
    public const PAYLOAD_TOO_LARGE = 413;
    public const URI_TOO_LONG = 414;
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const RANGE_NOT_SATISFIABLE = 416;
    public const EXPECTATION_FAILED = 417;
    public const IM_A_TEAPOT = 418;
    public const MISDIRECTED_REQUEST = 421;
    public const UNPROCESSABLE_ENTITY = 422;
    public const LOCKED = 423;
    public const FAILED_DEPENDENCY = 424;
    public const TOO_EARLY = 425;
    public const UPGRADE_REQUIRED = 426;
    public const PRECONDITION_REQUIRED = 428;
    public const TOO_MANY_REQUESTS = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
}