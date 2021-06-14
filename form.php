<html>
 <body>
  <form action="processform.php" method="post">
   <table>
    <tr>
     <td>Name:</td> 
     <td><input type="text" name="txt1" required/></td> 
    </tr>
    <tr>
     <td>E-mail:</td>
     <td><input type="email" name="txt2"  required/></td>
    </tr>
    <tr>
     <td>Password:</td>
     <td><input type="password" name="txt3" required</td>
    </tr>
    <tr>
     <td>Gender</td>
     <td><input type="radio" name="txt4" value="Female" required/>Female
         <input type="radio" name="txt4" value="Male" required/>Male</td>
    </tr> 
    <tr>
     <td><input type="submit"</td>
     <td><input type="reset"/></td>
    </tr>   
   </table>
  </form>
 </body>
</html>
