<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagram_oneLetter()
        {
          //Arrange
          $test_Anagram = new Anagram;
          $input = "a";

          //Act
          $result = $test_Anagram->findAnagram($input);

          //Assert
          $this->assertEquals("a", $result);
        }

        function test_findAnagram_ucLetter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "A";

            //Act
            $result = $test_Anagram->findAnagram($input);

            //Assert
            $this->assertEquals("a", $result);
        }
    }
 ?>
