<?php
    class Anagram
    {
       function findAnagram($word, $test)
       {
         $word_list = strtolower($test);
         $user_word = strtolower($word);
         $word_list_array = explode(", ", $word_list);
         $user_word_split = str_split($user_word);
         $output = array();

         foreach ($word_list_array as $check) {
          $check_split = str_split($check);
          sort($user_word_split);
          sort($check_split);
           if ($user_word_split == $check_split) {
               array_push($output, $check);
           }
          }
                    return implode(", ", $output);
         }
  }
?>
