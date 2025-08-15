<?php
    echo "This is ASSOCIATIVITY ARRAYS in php <br>";
    // Indexed Arrays
    // $arr = array('this', 'that', 'what');
    // echo $arr[0];
    // echo $arr[1];
    // echo $arr[2];

    // ASSOCIATIVITY ARRAYS
    $game = array('Mayank' => 'BATMAN',
                   'Dev' => 'IRON MAN',
                   'Karan' => 'PUSHPA', 
                   1000 => 'Love you 3000');

    foreach ($game as $key => $value){
        echo "<br> Favourite hero of $key is $value";
    }
    // echo $game['Mayank'];
    // echo "<br>";
    // echo $game['Dev'];
    // echo "<br>";
    // echo $game['Karan'];
    // echo "<br>";
    // echo $game[8];
?>