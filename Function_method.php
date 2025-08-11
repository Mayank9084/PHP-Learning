<?php

echo "In this we learn about FUNCTION methods <br>";

function processMarks($marksArr){
    $sum = 0;
foreach ($marksArr as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
foreach ($marksArr as $key => $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}
        $mayankSingh = [99,98,97,94,96];
        $sumMarks = processMarks($mayankSingh);
        $avgMark = avgMarks($mayankSingh);
        echo "Total Marks = $sumMarks <br>";
        echo "Average of MARKS = $avgMark";

?>