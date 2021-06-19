<?php
//Numerical Array
//Method 1
$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web Development";
$a['d'] = "Diya";
$a['t'] = "Toy";
$a[1] = "One";
$a[17] = "17.5";
//Method 2
//Always use this method to create an array
$a = array(
    0 => 10,
    "c" => "Computer",
    "php" => "PHP",
    "d" => "Diya",
    "t" => "Toy",
    1 => "One",
    17 => 17.5
   );
//Print Value 
echo "C for ".$a['c'];
echo "<br><br/>";

foreach ($a as $value){
    echo "Value is $value<br/>";
}

foreach ($a as $Key => $value){
    echo "<br/>Key is <b>$Key</b> and Value is <b>$value</b>";
}
//3 Inbuilt Functions to Debug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
var_dump($a);
echo "<pre>";