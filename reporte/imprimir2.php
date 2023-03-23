<?php
require_once('../dompdf/vendor/autoload.php'); 
ob_start();
require_once ('print_view2.php');
$html = ob_get_clean();


use Dompdf\Dompdf; 
 
$pdf = new DOMPDF();
		 
		// Definimos el tamaño y orientación del papel que queremos.
		
		$pdf->setPaper('letter', 'portrait');
		 
		// Cargamos el contenido HTML.
		$pdf->loadHtml($html);
		 
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream("Reporte-Directorio.pdf", array("Attachment" => false));

?>