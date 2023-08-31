<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\EnumReflector;

/**
 * Redirection messages
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Redirect
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
enum Redirect: int
{
    use EnumReflector;
    
    case MULTIPLE_CHOICES = 300;
    case MOVED_PERMANENTLY = 301;
    case FOUND = 302;
    case SEE_OTHER = 303;
    case NOT_MODIFIED = 304;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    /**
     * Returns message by case
     * 
     * @return string
     */
    public function message(): string
    {
        return match($this) {
            Redirect::MULTIPLE_CHOICES => "Multiple Choices",
            Redirect::MOVED_PERMANENTLY => "Moved Permanently",
            Redirect::FOUND => "Found",
            Redirect::SEE_OTHER => "See Other",
            Redirect::NOT_MODIFIED => "Not Modified",
            Redirect::TEMPORARY_REDIRECT => "Temporary Redirect",
            Redirect::PERMANENT_REDIRECT => "Permanent Redirect"
        };
    }
}