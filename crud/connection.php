<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) 
values('Diya','Female','1234569870')")
or die("Error".mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}