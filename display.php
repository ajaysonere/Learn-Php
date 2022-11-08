<?php
require 'connection.php';

if(isset($_GET['did'])){
    mysqli_query($connection,"delete from databasetable where id = '{$_GET['did']}'") or die(mysqli_error($connection));
    // echo "yes";
}
$query = mysqli_query($connection , "select * from databasetable") or die(mysqli_error($connection));
echo "<table border = '1'>";
while ($row = mysqli_fetch_array($query)){
  echo "<tr>";
  echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
  echo "<td><a href='display.php?did=$row[0]'> Delete </a></td>";
  echo "</tr>";
}
echo "</table>";
?>