<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagram_oneLetter()
        {
          //Arrage
          $test_Anagram = new Anagram;
          $input = "a";

          //Act
          $result = $test_Anagram->findAnagram($input);

          //Assert
          $this->assertEquals("a", $result);
        }
    }
 ?>
