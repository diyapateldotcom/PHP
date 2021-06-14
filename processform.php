<?php
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];

echo "<h3>Display Information of Form</h3>";
echo "<table border='1'>";
echo "<tr>";
echo "<td bgcolor='grey'>Name</td>";
echo "<td>$a</td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor='grey'>E-mail</td></td>";
echo "<td>$b</td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor='grey'>Password</td>";
echo "<td>$c</td>";
echo "</tr>";
echo "<tr>";
echo "<td bgcolor='grey'>Gender</td>";
echo "<td>$d</td>";
echo "</tr>";
echo "</table>";
?> 