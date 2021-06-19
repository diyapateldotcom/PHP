<?php
echo "<center><table border='1' width='50px'>";
for($i=1; $i<=50; $i++){
   echo "<tr align=center>";
   if($i % 2 == 0){
    echo "<td bgcolor='yellow'>$i</td>";      
   }else{
    echo "<td bgcolor='aqua'>$i</td>";
   }
   
   echo "</tr>";
}
echo "</table</center>";