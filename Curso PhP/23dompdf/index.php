<?php
require "vendor/autoload.php";

use Dompdf\Dompdf;
$domPdf = new Dompdf();
$html = "Nuevo archivo con DomPdf";
$domPdf->loadHtml($html);
$domPdf->render();
$domPdf->stream("ejemplo.pdf", ["Attachment" => 0]);