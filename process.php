<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];

echo "Hi My name is $a and My Age is $b";
for ($i=1; $i<=$b; $i++) { 
   echo "<br/>$a Happy Birthday for $i:)";
}
?>