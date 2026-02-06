<?php
session_start();
require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "
<h1>{$_SESSION['cv']['name']}</h1>
<p>{$_SESSION['cv']['email']}</p>
<p>{$_SESSION['cv']['skills']}</p>
";

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("Resume.pdf",["Attachment"=>true]);
?>