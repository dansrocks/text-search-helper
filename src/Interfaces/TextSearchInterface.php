<?php

namespace Helpers\SearchTools\Interfaces;

use Helpers\SearchTools\Needle;

/**
 * Interface TextSearchInterface
 * @package App\Helpers
 */
interface TextSearchInterface
{
    /**
     * TextSearchInterface constructor.
     *
     *
     * @param string $text
     * @param int $min_length  from 0 to MAX_INT | zero, negative or null = disable remove by length
     * @param float $max_freq  from 0.0 to 100.0 | remove according with a frequency of occurrences
     */
    public function __construct($text, $min_length = null, $max_freq = null);

    /**
     * @param Needle $needle
     * @return bool
     */
    public function search($needle);

    /**
     * @return string
     */
    public function getText();
}

