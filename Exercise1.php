<?php

include 'library_ex1.php';

$students = array ("Mark" => 25, "David" => 21, "Alain" => 35, "Catherine" => 18, "Christian" => 28);

echo "============== Students ============== <br/>";
display($students);

echo "============== Descending order of names ============== <br/>";
krsort($students);
display($students);

// Adding student
$students["Richard"] = 35;

echo "============== Ascending order of age ============== <br/>";
asort($students);
display($students);

// Youngest student
echo "============== The youngest student ============== <br/>";
$studentAge = reset($students);
$studentName  = key($students);
echo "The youngest student is $studentName and the age is $studentAge <br/>";
