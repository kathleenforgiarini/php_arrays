<?php

function display($arr){
    foreach ($arr as $key=>$value){
        echo "The student is $key and the age is $value <br/>";
    }
}