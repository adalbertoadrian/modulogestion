<?php
header("Content-type: application/vnd.oasis.opendocument.spreadsheet");
header("Content-Disposition: attachment; filename=reporte.ods");
$tip = $_GET["tip"];
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
?>
