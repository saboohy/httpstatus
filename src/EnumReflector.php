<?php declare(strict_types=1);

namespace Saboohy\HttpStatus;

trait EnumReflector
{
    /**
     * Return object name
     * 
     * @return string
     */
    public function getObjectName(): string
    {
        return $this::class;
    }
}