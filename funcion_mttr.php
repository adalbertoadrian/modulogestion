<?php
function mttr($mes, $ano, $servicio, $tipfalla) {
		$total = 0; $tiempo = 0; $promedio = 0;
		include('/var/www/hececom/config/conecta.php');
		$hccQuery = "SELECT count(tipfalla) AS cantidad, sum(tiempo_total) AS tiempo FROM hcc_mantto WHERE tipfalla = '".$tipfalla."' AND sist_afectado = '".$servicio."' AND fechaact LIKE '%/".$mes."/%' AND fechaact LIKE '%/".$ano."%' GROUP BY sist_afectado";
		$hccGet = @pg_query($hccConect,$hccQuery);
		while($campo = @pg_fetch_object($hccGet)) {
			$cant = utf8_encode($campo->cantidad);
			$time = utf8_encode($campo->tiempo);
		}

		$total += $cant ;
		$tiempo += $time;
		if ($tiempo != "0"){ $promedio = round($tiempo / $total,2); }
		return $resultados = array('total' => $total, 'tiempo' => $tiempo, 'promedio' => $promedio);
}
?>
