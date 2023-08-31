<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\{
    Client,
    Server
};
use function in_array;

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
     * @param int $status
     * 
     * @return void
     */
    public function __construct(object $status = null)
    {
        $message = "Unexpected HTTP Error";
        $code = 0;

        if ( in_array($status->getObjectName(), ["Client", "Server"]) ) {
            $message = $status->message();
            $code = $status->value;
        }
        
        parent::__construct($message , $code);
    }
}