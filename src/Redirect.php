<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

/**
 * Redirection messages
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Redirect
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
final class Redirect
{
    public const MULTIPLE_CHOICES = 300;
    public const MOVED_PERMANENTLY = 301;
    public const FOUND = 302;
    public const SEE_OTHER = 303;
    public const NOT_MODIFIED = 304;
    public const TEMPORARY_REDIRECT = 307;
    public const PERMANENT_REDIRECT = 308;
}