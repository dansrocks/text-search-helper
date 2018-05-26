<?php

namespace Helpers\SearchTools;

use Helpers\SearchTools\Interfaces\TextSearchInterface;
use Nabokova\Naradi\TextovyNaradi;

/**
 * Class TextSearch
 * @package App\Helpers
 */
class TextSearch implements TextSearchInterface
{
    /** @var string */
    private $text;

    /** @var TextovyNaradi */
    private $adapter;

    /**
     * TextSearchHelper constructor.
     * @inheritDoc
     */
    public function __construct($text, $min_length = null, $max_freq = null)
    {
        $this->text = $text;
        $this->adapter = new TextovyNaradi($text, $min_length, $max_freq);
    }

    /**
     * @param Needle $needle
     *
     * @return bool
     */
    public function search($needle)
    {
        return $this->adapter->search($needle->getNeedle());
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

