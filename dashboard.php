<?php
session_start();
include "../config/db.php";
if(!$_SESSION['admin']) die("Access Denied");

$data = mysqli_query($conn,"SELECT * FROM payments");
while($row=mysqli_fetch_assoc($data)){
 echo $row['name']." - ₹".$row['amount']."<br>";
}
?>