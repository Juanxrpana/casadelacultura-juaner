<?php
require_once('../dompdf/vendor/autoload.php'); 
ob_start();
require_once ('print_view.php');
$html = ob_get_clean();


use Dompdf\Dompdf; 
 
$pdf = new DOMPDF();
		 
		// Definimos el tamaño y orientación del papel que queremos.
		$pdf->set_paper("A4", "portrait");
		 
		// Cargamos el contenido HTML.
		$pdf->load_html($html);
		 
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream("Matricula.pdf", array("Attachment" => false));

?>