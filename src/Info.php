<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

use Saboohy\HttpStatus\EnumReflector;

/**
 * Informational responses
 * 
 * @package     Saboohy\HttpStatus
 * @subpackage  Info
 * @author      Sabuhi Alizada <sabuhi.alizada@yahoo.com>
 * @license     MIT
 */
enum Info: int
{
    use EnumReflector;
    
    case CONTINUE = 100;
    case SWITCHING_PROTOCOLS = 101;
    case PROCESSING = 102;
    case EARLY_HINTS = 103;

    /**
     * Returns message by case
     * 
     * @return string
     */
    public function message(): string
    {
        return match($this) {
            Info::CONTINUE => "Continue",
            Info::SWITCHING_PROTOCOLS => "Switching Protocols",
            Info::PROCESSING => "Processing",
            Info::EARLY_HINTS => "Early Hints"
        };
    }
}