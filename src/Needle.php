<?php

namespace Helpers\SearchTools;

/**
 * Class Needle
 * @package Helpers\SearchTools
 */
class Needle
{
    /** @var string */
    private $needle;

    /**
     * Needle constructor.
     * @param string $needle
     */
    public function __construct($needle)
    {
        $this->needle = $needle;
    }

    /**
     * @return string
     */
    public function getNeedle()
    {
        return $this->needle;
    }
}

