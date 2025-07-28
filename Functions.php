<?php

$name = "My name is Mayank";
echo $name;
echo "<br>";

echo "The length of my string is : ".strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "Mayank");
echo "<br>";

echo str_replace("Mayank","Karan",$name);
echo "<br>";

echo str_repeat($name, 4);
echo "<br>";

// prev ka mtlb jsa hai conent vsa he show krega
echo "<pre>";
// rtrim right space remove krdega
echo rtrim("  this is lit  ");
echo "<br>";
// rtrim right space remove krdega
echo ltrim("  this is lit  ");
echo "<br>";
echo "</pre>";

?>