<?php
/**
 * User: hjorthjort
 * Date: 15-06-22
 * Time: 10:38
 */

include_once('src/model/Word.php');

class Sentence {

    private $words;

    public function __construct($length, $auto_fill) {
        if ($auto_fill) {
            $this->auto_fill($length);
        } else {
            $this->empty_fill($length);
        }
    }

    public function getAsArray() {
        $ret = array();
        foreach ($this->words as $word) {
            $ret[] = $word->getWord();
        }
        return $ret;
    }

    private function auto_fill($length) {
        $this->words = array();
        $word = new Word("Test");
        for ($i = 0; $i < $length; $i++) {
            array_push($this->words, $word);
        }
    }

    private function empty_fill($length) {
        $this->words = array();
        for ($i = 0; $i < $length; $i++) {
            array_push($this->words, new Word(''));
        }
    }

}