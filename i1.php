	<?php
		include("/var/www/hececom/mod/insumo/funcion_principal.php");
		include("/var/www/hececom/mod/insumo/funcion_otrs.php");

		$ano = $_POST["valor"];
		$fuente = $_GET["fuente"];

	?>
	<!-- Tabla de Total de Actividades -->
	<?php if ($fuente != "1") { ?>
	<style onload="grafica()">
		#chartContainer {
			margin: auto;
			width: 100%;
			height: 400px;
		}
	</style>
	<div style="position:relative; float:right;" class="dropdown">
  		<button class="btn btn-primary dropdown-toggle icon-export" type="button" data-toggle="dropdown"> Exportar <span class="caret"></span></button>
  		<ul class="dropdown-menu">
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/calc/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=i1"><span class="icon-file-openoffice"></span> CALC</a></li>
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/pdf/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=i1"><span class="icon-file-pdf"></span> PDF</a></li>
  		</ul>
	</div>
	<br /><br />
	<?php } else { $ano = $_GET["valor"]; } ?>
	<form name="tabla">
		<input name="titulo" type="hidden" value="Gráfica I1">
		<input name="parametro1" type="hidden" value="TOTAL ACT. EJEC. PROGRAMADAS">
		<input name="parametro2" type="hidden" value="TOTAL ACT. PROGRAMADAS">
	<h3>Indicador I1</h3>
	<br />
	<h4 class="bg-primary">Ejecución del plan de actividades programadas (I1)</h4>
	<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th><th>ENE</th><th>FEB</th><th>MAR</th><th>ABR</th><th>MAY</th><th>JUN</th><th>JUL</th><th>AGO</th><th>SEP</th><th>OCT</th><th>NOV</th><th>DIC</th><th>TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<tr class="warning text-center">
			<td class="text-left"><strong>TOTAL ACT. EJEC. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes1" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes2" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes3" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes4" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes5" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes6" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes7" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes8" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes9" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes10" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes11" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?><input name="parametro1mes12" type="hidden" value="<?php echo $calculos['sumatotalapejec']; ?>"></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="warning text-center">
			<td class="text-left"><strong>TOTAL ACT. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes1" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes2" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes3" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes4" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes5" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes6" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes7" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes8" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes9" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes10" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes11" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?><input name="parametro2mes12" type="hidden" value="<?php echo $calculos['sumatotalap']; ?>"></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="success text-center">
			<td class="text-left"><strong>I1 %</strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "01"; $totalparametrompejec = 0; $totalparametromp = 0; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; ?></strong></td>
			<td><strong><?php $mes = "02"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "03"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "04"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "05"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "06"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "07"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "08"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "09"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "10"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "11"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php $mes = "12"; $calculos = calculos($mes, $ano); if ($calculos['sumatotalap'] != "0") { echo round(($calculos['sumatotalapejec'] * 100) / $calculos['sumatotalap'],2)."%"; } else { echo "0%"; }; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalapejec']; $totalparametromp = $totalparametromp + $calculos['sumatotalap']; ?></strong></td>
			<td><strong><?php echo round(($totalparametrompejec * 100) / $totalparametromp,2)."%"; ?></strong></td>
		</tr>
		</tbody>
	</table>
	</form>
	<br />
	<div id="chartContainer"></div>
