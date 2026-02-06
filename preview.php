<?php
session_start();
$_SESSION['cv'] = $_POST;
?>

<h1><?=$_POST['name']?></h1>
<p><b>Mobile:</b> <?=$_POST['mobile']?></p>
<p><b>Email:</b> <?=$_POST['email']?></p>
<p><b>Education:</b> <?=$_POST['education']?></p>
<p><b>Skills:</b> <?=$_POST['skills']?></p>
<p><b>Experience:</b> <?=$_POST['experience']?></p>

<a href="payment.php">
<button>₹5 Pay & Download PDF</button>
</a>