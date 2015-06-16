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
        //Arrange
        $word = new Word('Hello');

        //Change
        $word->condition('world');

        //Assert
        $nextWords = $word->getNextWords();
        $this->assertTrue(array_key_exists("world", $nextWords));
        $this->assertTrue($nextWords['world'] === 1);

        //Change
        for ($i = 0; $i < 10; $i++) {
            $word->condition('many');
        }

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
        $this->assertEquals($word->nextWordProbability('world'), 0.666, 0.001);
        $this->assertEquals($word->nextWordProbability('another'), 0.333, 0.001);
    }

    public function testGetTotalConditionings() {
        $word = new Word('hello');

        for($i = 0; $i < 10; $i++)
            $word->condition('world');

        $word->condition('another');

        $this->assertEquals($word->getTotalConditionings(), 11);
    }
}
