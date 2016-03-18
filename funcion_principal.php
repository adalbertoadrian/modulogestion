<?php
function calculos($mes, $ano) {
			$mp = 0; $mc = 0; $im = 0; $ri = 0; $a = 0; $l = 0; $e = 0; $os = 0; $al = 0; $ap = 0; $ai = 0; $sumatotalmpprog = 0; $sumatotalmpprogejec = 0; $sumatotalmpprognoejec = 0; $sumatotaladprog = 0; $sumatotaladprogejec = 0; $sumatotaladprognoejec = 0; $sumatotalnoprogejec = 0; $fallasis = 0;  $fallaser = 0;
			include('/var/www/hececom/config/conecta.php');
			$hccQuery = "SELECT tpmantto AS tip_mantto, prognoprog AS tip_actividad, ejecutada, tipfalla, count(prognoprog) AS total FROM hcc_mantto WHERE fechaact LIKE '%/".$mes."/%' AND fechaact LIKE '%/".$ano."%' GROUP BY tpmantto, prognoprog, ejecutada, tipfalla";
			$hccGet = @pg_query($hccConect,$hccQuery);
			while($campo = @pg_fetch_object($hccGet))
			{
				$tpmantto = utf8_encode($campo->tip_mantto);
				$tpactividad = utf8_encode($campo->tip_actividad);
				$ejecutada = utf8_encode($campo->ejecutada);
				$tipfalla = utf8_encode($campo->tipfalla);
				$total = utf8_encode($campo->total);
				if ($tpactividad == "P" && $tpmantto == "MP") { $sumatotalmpprog = $sumatotalmpprog + $total; }
				if ($ejecutada == 1 && $tpactividad == "P" && $tpmantto == "MP") { $sumatotalmpprogejec = $sumatotalmpprogejec + $total; }
				if ($ejecutada == 0 && $tpactividad == "P" && $tpmantto == "MP") { $sumatotalmpprognoejec = $sumatotalmpprognoejec + $total; }
				if ($tpactividad == "P" && $tpmantto != "MP") { $sumatotaladprog = $sumatotaladprog + $total; }
				if ($tpactividad == "P" && $tpmantto != "MP" && $ejecutada == 1) { $sumatotaladprogejec = $sumatotaladprogejec + $total; }
				if ($tpactividad == "P" && $tpmantto != "MP" && $ejecutada == 0) { $sumatotaladprognoejec = $sumatotaladprognoejec + $total; }
				if ($tpactividad == "NP" && $ejecutada == 1) { $sumatotalnoprogejec = $sumatotalnoprogejec + $total; }
				if ($ejecutada == 1) {  
					switch ($tpmantto) {
						case 'MP':
							$mp = $mp + $total;
							break;

						case 'MC':
							$mc = $mc + $total;
							break;
						
						case 'IM':
							$im = $im + $total;
							break;

						case 'RI':
							$ri = $ri + $total;
							break;

						case 'A':
							$a = $a + $total;
							break;

						case 'L':
							$l = $l + $total;
							break;

						case 'E':
							$e = $e + $total;
							break;

						case 'OSC':
							$os = $os + $total;
							break;

						case 'AL':
							$al = $al + $total;
							break;

						case 'AP':
							$ap = $ap + $total;
							break;


						case 'AI':
							$ai = $ai + $total;
							break;
					}
				}
				
				if ($tpactividad == "NP") {
					switch ($tipfalla) {
						case '1':
							$fallaser = $fallaser + $total;
							break;
						
						case '2':
							$fallasis = $fallasis + $total;
							break;
					}
				}
			}
			$sumatotalap = $sumatotalmpprog + $sumatotaladprog;
			$sumatotalapejec = $sumatotalmpprogejec + $sumatotaladprogejec;
			$sumatotalacejec = $sumatotalapejec + $sumatotalnoprogejec;

			return $resultados = array('sumatotalmpprog' => $sumatotalmpprog, 'sumatotalmpprogejec' => $sumatotalmpprogejec, 'sumatotalmpprognoejec' => $sumatotalmpprognoejec, 'sumatotaladprog' => $sumatotaladprog, 'sumatotaladprogejec' => $sumatotaladprogejec, 'sumatotaladprognoejec' => $sumatotaladprognoejec, 'sumatotalnoprogejec' => $sumatotalnoprogejec, 'sumatotalap' => $sumatotalap, 'sumatotalapejec' => $sumatotalapejec, 'sumatotalacejec' => $sumatotalacejec, 'MP' => $mp, 'MC' => $mc, 'IM' => $im, 'RI' => $ri, 'A' => $a, 'L' => $l, 'E' => $e, 'OS' => $os, 'AL' => $al, 'AP' => $ap, 'AI' => $ai, 'fallaser' => $fallaser, 'fallasis' => $fallasis);
		}
?>