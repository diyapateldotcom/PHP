<?php
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c= $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = 5;

 echo "<table border='1' height='70%' width='50%'>";
 echo "<tr>";
 echo "<th colspan='2'>Marksheet</th>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Subject</td>";
 echo "<td>Marks</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Maths</td>";
 echo "<td>$a</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Maths</td>";
 echo "<td>$a</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Chemistry</td>";
 echo "<td>$b</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Physics</td>";
 echo "<td>$c</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>English</td>";
 echo "<td>$d</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Computer</td>";
 echo "<td>$e</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>Total</td>";
 echo "<td>".($a+$b+$c+$d+$e);
 echo "</tr>";

 echo "<tr>";
  echo "<td>Percentage</td>";
  echo "<td>".($a+$b+$c+$d+$e)/$f; 
  echo "</td>";
 echo "</tr>";
echo "</table>";

 if(($a+$b+$c+$d+$e)/$f>=80){
     echo "Distinction";
 }elseif(($a+$b+$c+$d+$e)/$f>=70){
     echo "<strong>Firstclass</strong>";
 }elseif(($a+$b+$c+$d+$e)/$f>=60){
     echo "<strong>Secondclass</strong>";
 }elseif(($a+$b+$c+$d+$e)/$f>=45){
     echo "<strong>Pass</strong>";
 }else{
     echo "Fail";
 }
 ?>
 
