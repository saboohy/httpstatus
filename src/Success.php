<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

/**
 * Successful responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Success
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
final class Success
{
    public const OK = 200;
    public const CREATED = 201;
    public const ACCEPTED = 202;
    public const NON_AUTHORITATIVE_INFORMATION = 203;
    public const NO_CONTENT = 204;
    public const RESET_CONTENT = 205;
    public const PARTIAL_CONTENT = 206;
    public const MULTI_STATUS = 207;
    public const ALREADY_REPORTED = 208;
    public const IM_USED = 226;
}