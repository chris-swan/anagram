<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagram_oneLetter()
        {
          //Arrange
          $test_Anagram = new Anagram;
          $word = "a";
          $test = "a";

          //Act
          $result = $test_Anagram->findAnagram($word, $test);

          //Assert
          $this->assertEquals("a", $result);
        }

        function test_findAnagram_ucLetter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $word = "A";
            $test = "a";

            //Act
            $result = $test_Anagram->findAnagram($word, $test);

            //Assert
            $this->assertEquals("a", $result);
        }
    }
 ?>
