<?php
require_once '../vendor/autoload.php';
 
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('p','A4','es','true','UTF-8');
$html2pdf->writeHTML('<div style="
font-size: 48em;"><h1>Holamundo.22</h1></div>');
$html2pdf->output('goku.pdf');

?>