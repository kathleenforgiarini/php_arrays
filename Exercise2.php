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

uasort($students, function($el1, $el2) {
    $vowelsInEl1 = preg_match_all('/[aeiouAEIOU]/', $el1);
    $vowelsInEl2 = preg_match_all('/[aeiouAEIOU]/', $el2);
    
    if ($vowelsInEl1 == $vowelsInEl2) {
        return 0;
    } elseif ($vowelsInEl1 > $vowelsInEl2) {
        return 1;
    } else {
        return -1;
    }
});
    
    display($students);
