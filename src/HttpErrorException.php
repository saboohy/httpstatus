<?php declare(strict_types=1);

namespace Saboohy\HttpStatus
{
    use Saboohy\HttpStatus\Message;

    /**
     * HttpException handler
     * 
     * @package     Saboohy\HttpStatus
     * @subpackage  HttpException
     * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
     * @license     MIT
     */
    class HttpErrorException extends \Exception
    {
        /**
         * Constructor
         * 
         * @param int $http_status_code
         * 
         * @return void
         */
        public function __construct(int $http_status_code)
        {
            $http_status_code = (
                ($http_status_code >= 300 && $http_status_code <= 500) 
                ? $http_status_code 
                : 0
            );
            
            $message = Message::get($http_status_code);
            parent::__construct($message, $http_status_code);
        }
    }
}