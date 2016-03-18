<?php
function mttr_obs($mes, $ano, $tipfalla) {
	include('/var/www/hececom/config/conecta.php');
	$hccQuery = "SELECT actividad, numreport, fechaact, hora_inicio, fechamod, hora_final, tiempo_total FROM hcc_mantto WHERE tipfalla = '".$tipfalla."' AND fechaact LIKE '%/".$mes."/%' AND fechaact LIKE '%/".$ano."%' ORDER BY fechaact";
	$hccGet = @pg_query($hccConect,$hccQuery);

	return $hccGet;
}
?>