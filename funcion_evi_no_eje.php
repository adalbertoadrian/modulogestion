<?php
	function evi_no_eje($ano) {
		include('/var/www/hececom/config/conecta.php');
		$hccQuery = "SELECT fechaact, actividad, numreport, tiempo_total FROM hcc_mantto WHERE ejecutada = '0' AND prognoprog = 'P' AND numreport <> '' AND fechaact LIKE '%/".$ano."%' ORDER BY fechaact";
		$hccGet = @pg_query($hccConect,$hccQuery);
		return $hccGet;
	}
?>