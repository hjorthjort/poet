<?php
/**
 * User: hjorthjort
 * Date: 15-06-16
 * Time: 18:20
 */

include_once 'src/model/Word.php';

class WordTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
        //Arrange
        $word1 = new Word('Hello');
        $word2 = new Word('hellO');
        $word3 = new Word('I', false);
        $word4 = new Word('iPhone', false);

        //Assert
        $this->assertTrue($word1->getWord() === 'hello');
        $this->assertEquals($word2->getWord(), "hello");
        $this->assertEquals($word3->getWord(), 'I');
        $this->assertTrue($word4->getWord() === 'iPhone');

    }

    public function testConditioning() {
        //Arrange
        $word = new Word('Hello');

        //Change
        $word->condition('world');

        //Assert
        $nextWords = $word->getNextWords();
        $this->assertTrue(array_key_exists("world", $nextWords));
        $this->assertTrue($nextWords['world'] === 1);

        //Change
        for ($i = 0; $i < 10; $i++) $word->condition('many');

        //Assert
        $nextWords = $word->getNextWords();
        $this->assertTrue($nextWords["many"] === 10);
    }

    public function testCalculateProbability() {
        //Arrange
        $word = new Word('hello');

        //Change
        $word->condition('world');
        $word->condition('world');
        $word->condition('another');

        //Assert
        $this->assertEquals($word->nextWordProbability('world'), 0.666, '', 0.001);
        $this->assertEquals($word->nextWordProbability('another'), 0.333, '', 0.001);
        $this->assertEquals($word->nextWordProbability('nonexistent'), 0);
    }

    public function testGetTotalConditionings() {
        $word = new Word('hello');

        for($i = 0; $i < 10; $i++) $word->condition('world');

        $word->condition('another');

        $this->assertEquals($word->getTotalConditionings(), 11);
    }
}
