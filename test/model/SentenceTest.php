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
        $sentence = new Sentence(5, false);

        //Assert
        $this->assertTrue(sizeof($sentence->getAsArray()) === 5);
    }
}