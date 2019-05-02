<?php

    $test_word = $_POST['word'];

    $user_word_array = str_split($test_word);

    $words = ['Gene', "Mutation"];

    $match = 0;

    foreach($words as $word) {

        $word_array = str_split($word);

            for ($i = 0; $i < strlen($test_word) && $i < strlen($word); $i++) {

                if (strtolower($user_word_array[$i]) == strtolower($word_array[$i])) {

                    $match++;

                }

            }
  
        $match_percentage = (($match / strlen($word)) * 100);

        if ($match_percentage >= 70) {            
            echo 'Add ' . $test_word .'<br>';
        }
    }
    
    echo 'Match percentage: ' . $match_percentage . '%';
    echo ' Matches: ' . $match . ' ';

?>