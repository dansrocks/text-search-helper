# TextSearchHelper
A search tool to search a list of needles into a spread text.

        "php": "^7.2",


# Available Classes

## Interface:  TextSearchInterface
Interface for TextSearch class

**Methods:**

* Construct: Require a text to search in.
*     __construct(string $text, ?int $min_length = null, ?float $max_freq = null);


* Returns true if the $needle is found into text
*     search(Needle $needle) : bool;

* Get original text (dummy method)
*     getText(): string;


## Class:  TextSearch
Main class


## Class: Needle
A wrapper class around a needle (string) to search into a text. 

#How to install

    composer require dansrocks/text-search-helper


#How to use

    <?php
    
    namespace YOUR-NAMESPACE;
    
    use Helpers\SearchTools\TextSearch;
    
    [...]
     
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing
             elit. Ut facilisis nunc ac rutrum egestas. Pellentesque
             sodales gravida risus in blandit. Nulla facilisi.
             Aenean hendrerit augue arcu, ut sodales lacus elementum
             in. Fusce dolor dui, tempus eget neque in, tincidunt
             pharetra sem. Donec semper ante vel nisi rhoncus, nec
             auctor dolor ornare.";
    
    $searcher = new TextSearch($text);
    
    $needle = new Needle("fusce dolor dui tempus");
    
    if ($searcher->search($needle)) {
        echo "Found it!";
    } else {
        echo "Sorry, I can not be able to find it."; 
    }
    
#Avanced search

Text search has 2 extra parameters in order to remove
any usual words and/or words lower than a length.

You can enable these functionalities in __construct();

    ex1. __construct($text, 3);           // remove words with <3 characters
    ex2. __construct($text, null, 0.3);   // remove words with 30% of frequency 




