<?php
    class Anagram
    {
       function findAnagram($word, $test)
       {
         $word_list = strtolower($test);
         $user_word = strtolower($word);
         $word_list_array = explode(" ", $test);
         $user_word_split = str_split($user_word);
         $output = array();
         foreach ($word_list_array as $check)
         { $check_split = str_split($check);
           if (sort($user_word_split) == sort($check_split)) {
               array_push($output, $check);
           }
          }
                    return ($output);
         }
    //        if ($user_word_array == $word_list_array) {
    //
    //            return ($test);
    //       }
    // }
  }
?>
