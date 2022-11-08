<?php
 
 $username = $_POST['uname'];
 $password = $_POST['pass'];

 echo "$username <br> $password";

 $connection = mysqli_connect("localhost","root","","database");

$query = mysqli_query($connection , "insert into databasetable(name,password) values('$username','$password')") or die("error".mysqli_error($connection));


if($query){
    echo "<script> alert('Data Inserted Successfully ') </script>";
}
?>