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

uasort($students, "sortByLenghtOfValues");

function sortByLenghtOfValues($el1, $el2){
    // processing and return
    if (strlen($el1) > strlen($el2))
        return 1;
        else
            if (strlen($el1) == strlen($el2))
                return 0;
                else
                    return -1;
}

display($students);