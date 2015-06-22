<?php
/**
 * User: hjorthjort
 * Date: 15-06-16
 * Time: 18:15
 */

class Word {
    private $word, $nextWords;

    public function __construct($word, $remove_capitals = TRUE) {
        if ($remove_capitals)
            $word = strtolower($word);
        $this->word = $word;
        $this->nextWords = array();
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

    public function nextWordProbability($string) {
        if (!array_key_exists($string, $this->nextWords)) return 0;
        return $this->nextWords[$string] / $this->getTotalConditionings();
    }

    public function getTotalConditionings() {
        $count = 0;
        foreach ($this->nextWords as $key => $value) $count += $value;
        return $count;
    }

}