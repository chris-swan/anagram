<?php
    class Anagram
    {
       function findAnagram($word, $test)
       {
         $word_list = strtolower($test);
         $user_word = strtolower($word);
           if ($user_word == $word_list) {

               return ($test);
          }
    }
  }
?>
