<?php
session_start();
if($_POST){
 if($_POST['user']=="admin" && $_POST['pass']=="admin123"){
  $_SESSION['admin']=true;
  header("location:dashboard.php");
 }
}
?>
<form method="post">
<input name="user">
<input name="pass" type="password">
<button>Login</button>
</form>