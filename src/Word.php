<?php
/**
 * User: hjorthjort
 * Date: 15-06-16
 * Time: 18:15
 */

class Word {
    private $word, $nextWords;

    public function __construct($word) {
        $this->word = strtolower($word);
        $this->nextWords = array();
        $count = 0;
    }

    public function getWord() {
        return $this->word;
    }

    public function condition($string) {
        $string = strtolower($string);
        if (!array_key_exists($string, $this->nextWords)) $this->nextWords[$string] = 1;
        else ++$this->nextWords[$string];

    }

    public function getNextWords() {
        return $this->nextWords;
    }
}