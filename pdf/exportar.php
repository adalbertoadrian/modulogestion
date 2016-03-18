<?php
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require 'vendor/autoload.php';

// disable DOMPDF's internal autoloader if you are using Composer
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once 'vendor/dompdf/dompdf/dompdf_config.inc.php';
$tip = $_GET["tip"];
ob_start();
include "/var/www/hececom/mod/insumo/css/cabezera.php";
switch ($tip) {
	case 'general':
		include "/var/www/hececom/mod/insumo/report_general.php";
		break;

	case 'im':
		include "/var/www/hececom/mod/insumo/im.php";
		break;

	case 'i1':
		include "/var/www/hececom/mod/insumo/i1.php";
		break;

	case 'i2':
		include "/var/www/hececom/mod/insumo/i2.php";
		break;

	case 'eficiencia':
		include "/var/www/hececom/mod/insumo/eficiencia.php";
		break;

	case 'mttr_servicio':
		include "/var/www/hececom/mod/insumo/mttr_servicio.php";
		break;

	case 'mttr_sistema':
		include "/var/www/hececom/mod/insumo/mttr_sistema.php";
		break;
}
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper("a4","landscape");
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("reporte.pdf");
?>
