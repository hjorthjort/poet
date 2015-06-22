<?php
/**
 * User: hjorthjort
 * Date: 15-06-22
 * Time: 10:38
 */

class Sentence {

    private $words;

    public function __construct($length, $auto_fill) {
        if (!$auto_fill) {
            $this->empty_fill($length);
        }
    }

    public function getAsArray() {
        return $this->words;
    }

    private function empty_fill($length) {
        $this->words = array();
        for ($i = 0; $i < $length; $i++) {
            array_push($this->words, '');
        }
    }

}