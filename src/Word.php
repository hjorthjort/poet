<?php
/**
 * User: hjorthjort
 * Date: 15-06-16
 * Time: 18:15
 */

class Word {
    private $word;

    private $nextWords;

    public function __construct($word) {
        $this->word = strtolower($word);
        $this->nextWords = array();
    }

    public function getWord() {
        return $this->word;
    }

    public function condition($string) {
        $this->nextWords[$string] = 1;
    }

    public function getNextWords()
    {
        return $this->nextWords;
    }
}