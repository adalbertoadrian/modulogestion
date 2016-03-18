	<?php
		include("/var/www/hececom/mod/insumo/funcion_principal.php");
		include("/var/www/hececom/mod/insumo/funcion_otrs.php");

		$ano = $_POST["valor"];
		$fuente = $_GET["fuente"];

	?>
	<!-- Tabla de Total de Actividades -->
	<?php if ($fuente != "1") { ?>
	<style onload="graficaim()">
		#chartContainer {
			margin: auto;
			width: 100%;
			height: 400px;
		}
	</style>
	<div style="position:relative; float:right;" class="dropdown">
  		<button class="btn btn-primary dropdown-toggle icon-export" type="button" data-toggle="dropdown"> Exportar <span class="caret"></span></button>
  		<ul class="dropdown-menu">
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/calc/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=im"><span class="icon-file-openoffice"></span> CALC</a></li>
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/pdf/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=im"><span class="icon-file-pdf"></span> PDF</a></li>
  		</ul>
	</div>
	<br /><br />
	<?php } else { $ano = $_GET["valor"]; } ?>
	<form name="tabla">
		<input name="titulo" type="hidden" value="Gráfica Cumplimiento del plan de mantenimiento anual ( Im )">
		<input name="parametro1" type="hidden" value="ACT. MTTO. PROGRAMADAS">
		<input name="parametro2" type="hidden" value="ACT. MTTO. PROG EJEC">
		<input name="parametro3" type="hidden" value="ACT. MTTO. PROG. NO EJEC.">
	<h3>Indicador IM</h3>
	<br />
	<h4 class="bg-primary">Cumplimiento del plan de mantenimiento anual ( Im )</h4>
	<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th><th>ENE</th><th>FEB</th><th>MAR</th><th>ABR</th><th>MAY</th><th>JUN</th><th>JUL</th><th>AGO</th><th>SEP</th><th>OCT</th><th>NOV</th><th>DIC</th><th>TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. MTTO. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog']; ?><input name="parametro1mes1" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes2" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes3" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes4" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes5" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes6" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes7" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes8" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes9" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes10" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes11" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?><input name="parametro1mes12" type="hidden" value="<?php echo $calculos['sumatotalmpprog']; ?>"></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. MTTO. PROG EJEC</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes1" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes2" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes3" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes4" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes5" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes6" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes7" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes8" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes9" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes10" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes11" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?><input name="parametro2mes12" type="hidden" value="<?php echo $calculos['sumatotalmpprogejec']; ?>"></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="danger text-center">
			<td class="text-left"><strong>ACT. MTTO. PROG. NO EJEC.</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes1" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes2" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes3" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes4" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes5" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes6" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes7" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes8" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes9" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes10" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes11" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?><input name="parametro3mes12" type="hidden" value="<?php echo $calculos['sumatotalmpprognoejec']; ?>"></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="success text-center">
			<td class="text-left"><strong>Im %</strong></td>
			<td><strong><?php $totalparametrompejec = 0; $totalparametromp = 0; $mes = "01"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "02"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "03"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "04"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "05"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "06"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "07"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "08"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "09"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "10"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "11"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php $mes = "12"; $calculos = calculos($mes, $ano); if($calculos['sumatotalmpprogejec'] != "0") { echo round(($calculos['sumatotalmpprogejec'] * 100) / $calculos['sumatotalmpprog'],2)."%"; } else { echo "0%"; }; $totalparametromp = $totalparametromp + $calculos['sumatotalmpprog']; $totalparametrompejec = $totalparametrompejec + $calculos['sumatotalmpprogejec']; ?></strong></td>
			<td><strong><?php echo round(($totalparametrompejec * 100) / $totalparametromp,2)."%"; ?></strong></td>
		</tr>
		</tbody>
	</table>
	</form>
	<br />
	<div id="chartContainer"></div>