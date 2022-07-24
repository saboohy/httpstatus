<?php declare(strict_types=1);

namespace Saboohy\HttpStatus
{
    /**
     * Server error responses
     * 
     * @package     Saboohy\HttpStatus
     * @subpackage  Server
     * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
     * @license     MIT
     */
    final class Server
    {
        public const INTERNAL_SERVER_ERROR = 500;
        public const NOT_IMPLEMENTED = 501;
        public const BAD_GATEWAY = 502;
        public const SERVICE_UNAVAILABLE = 503;
        public const GATEWAY_TIMEOUT = 504;
        public const HTTP_VERSION_NOT_SUPPORTED = 505;
        public const VARIANT_ALSO_NEGOTIATES = 506;
        public const INSUFFICIENT_STORAGE = 507;
        public const LOOP_DETECTED = 508;
        public const NOT_EXTENDED = 510;
        public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    }
}