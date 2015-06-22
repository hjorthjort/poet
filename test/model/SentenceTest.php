<?php
/**
 * User: hjorthjort
 * Date: 15-06-22
 * Time: 10:31
 */

include_once 'src/model/Sentence.php';

class SentenceTest extends PHPUnit_Framework_TestCase {

    public function testConstruct() {
        //Arrange
        $sentence1 = new Sentence(5, false);
        $sentence2 = new Sentence(0, false);
        $sentence3 = new Sentence(50, true);

        //Assert
        $this->assertTrue(sizeof($sentence1->getAsArray()) === 5);
        $this->assertTrue(sizeof($sentence2->getAsArray()) === 0);
        $this->assertTrue(sizeof($sentence3->getAsArray()) === 50);
        foreach ($sentence3->getAsArray() as $word) {
            //Check that the word has length
            $this->assertTrue($word==true);
        }
    }
}