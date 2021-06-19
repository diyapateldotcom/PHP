<?php
//Numerical Array
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 50.50;
$a[3] = "C";
$a[4] = "5";
//Method 2 //Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 50.50;
$a[] = "C";
$a[] = "5";
//Method3 //To creat an array
$a = array(10,20,20.50,"C","PHP","5");
//Print Array Value
echo $a[4];
//Print Whole Array
for($i=0; $i<count($a); $i++){
    echo "<br/>".$a[$i];
}

$sum = array_sum($a);
$product = array_product($a);
echo "<br/>Sum is = $sum, <br/>Product is = $product";

//3 Inbuilt Functions to Debug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
