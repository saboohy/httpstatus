<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\EnumReflector;

/**
 * Successful responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Success
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
enum Success: int
{
    use EnumReflector;
    
    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case PARTIAL_CONTENT = 206;
    case MULTI_STATUS = 207;
    case ALREADY_REPORTED = 208;
    case IM_USED = 226;

    /**
     * Returns message by case
     * 
     * @return string
     */
    public function message(): string
    {
        return match($this) {
            Success::OK => "OK",
            Success::CREATED => "Created",
            Success::ACCEPTED => "Accepted",
            Success::NON_AUTHORITATIVE_INFORMATION => "Non-Authoritative Information",
            Success::NO_CONTENT => "No Content",
            Success::RESET_CONTENT => "Reset Content",
            Success::PARTIAL_CONTENT => "Partial Content",
            Success::MULTI_STATUS => "Multi-Status",
            Success::ALREADY_REPORTED => "Already Reported",
            Success::IM_USED => "IM Used"
        };
    }
}