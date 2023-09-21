<?php

$students = array (0 => "Christian", 1 => "David", 2 => "Myriam", 3 => "Catherine", 4 => "Marc");

function display($arr){
    foreach ($arr as $key=>$value){
        echo "The student $key is $value <br/>";
    }
}

echo "============== Students ============== <br/>";
display($students);

echo "============== Sort in ascending order of their total number of vowels ============== <br/>";

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    
    return $count;
}

uasort($students, "sortByLenghtOfVowels");

function sortByLenghtOfVowels($el1, $el2){
    // processing and return
    $vowelsInEl1 = countVowels($el1);
    $vowelsInEl2 = countVowels($el2);
    
    if ($vowelsInEl1 == $vowelsInEl2) {
        return 0;
    } elseif ($vowelsInEl1 > $vowelsInEl2) {
        return 1;
    } else {
        return -1;
    }
}

display($students);
