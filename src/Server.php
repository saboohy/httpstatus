<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\EnumReflector;

/**
 * Server error responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Server
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
enum Server: int
{
    use EnumReflector;

    case INTERNAL_SERVER_ERROR = 500;
    case NOT_IMPLEMENTED = 501;
    case BAD_GATEWAY = 502;
    case SERVICE_UNAVAILABLE = 503;
    case GATEWAY_TIMEOUT = 504;
    case HTTP_VERSION_NOT_SUPPORTED = 505;
    case VARIANT_ALSO_NEGOTIATES = 506;
    case INSUFFICIENT_STORAGE = 507;
    case LOOP_DETECTED = 508;
    case NOT_EXTENDED = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;
    case NETWORK_READ_TIMEOUT_ERROR = 598;
    case NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    /**
     * Returns message by case
     * 
     * @return string
     */
    public function message(): string
    {
        return match($this) {
            Server::INTERNAL_SERVER_ERROR => "Internal Server Error",
            Server::NOT_IMPLEMENTED => "Not Implemented",
            Server::BAD_GATEWAY => "Bad Gateway",
            Server::SERVICE_UNAVAILABLE => "Service Unavailable",
            Server::GATEWAY_TIMEOUT => "Gateway Timeout",
            Server::HTTP_VERSION_NOT_SUPPORTED => "HTTP Version Not Supported",
            Server::VARIANT_ALSO_NEGOTIATES => "Variant Also Negotiates",
            Server::INSUFFICIENT_STORAGE => "Insufficient Storage",
            Server::LOOP_DETECTED => "Loop Detected",
            Server::NOT_EXTENDED => "Not Extended",
            Server::NETWORK_AUTHENTICATION_REQUIRED => "Network Authentication Required",
            Server::NETWORK_READ_TIMEOUT_ERROR => "Network Read Timeout Error",
            Server::NETWORK_CONNECT_TIMEOUT_ERROR => "Network Connect Timeout Error"
        };
    }
}