<?php
/**
 * User: hjorthjort
 * Date: 15-06-16
 * Time: 18:20
 */

class WordTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
        //Arrange
        $word1 = new Word('Hello');
        $word2 = new Word('hellO');

        //Assert
        $this->assertEquals($word1->getWord(), 'hello');
        $this->assertEquals($word2->getWord(), "hello");
    }

    public function testConditioning() {
        $word = new Word('Hello');

        $word->condition('world');

        $nextWords = $word->getNextWords();

        $this->assertTrue(array_key_exists("world", $nextWords));
    }
}
