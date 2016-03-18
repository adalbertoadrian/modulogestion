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
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/calc/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=eficiencia"><span class="icon-file-openoffice"></span> CALC</a></li>
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/pdf/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=eficiencia"><span class="icon-file-pdf"></span>  PDF</a></li>
  		</ul>
	</div>
	<br /><br />
	<?php } else { $ano = $_GET["valor"]; } ?>
	<form name="tabla">
	<input name="titulo" type="hidden" value="Gráfica Resumen de Solicitudes">
	<input name="parametro1" type="hidden" value="Total Solicitudes Ingresadas">
	<input name="parametro2" type="hidden" value="Total Solicitudes Resueltas">
	<h3>Indicador de Efectividad</h3>
	<br />
	<h4 class="bg-primary">Resumen de solicitudes</h4>
	<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th><th>ENE</th><th>FEB</th><th>MAR</th><th>ABR</th><th>MAY</th><th>JUN</th><th>JUL</th><th>AGO</th><th>SEP</th><th>OCT</th><th>NOV</th><th>DIC</th><th>TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<td class="text-left"><strong>Total Solicitudes Ingresadas</strong></td>
			<td><?php $totalparametroing = 0; $mes = "01"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes1" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes2" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes3" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes4" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes5" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes6" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes7" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes8" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes9" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes10" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes11" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsing"]; $totalparametroing = $totalparametroing + $otrs["totalotrsing"]; ?><input name="parametro1mes12" type="hidden" value="<?php echo $otrs["totalotrsing"]; ?>"></td>
			<td><strong><?php echo $totalparametroing; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Total Solicitudes Resueltas</strong></td>
			<td><?php $totalparametrores = 0; $mes = "01"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes1" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes2" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes3" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes4" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes5" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes6" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes7" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes8" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes9" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes10" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes11" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); echo $otrs["totalotrsres"]; $totalparametrores = $totalparametrores + $otrs["totalotrsres"]; ?><input name="parametro2mes12" type="hidden" value="<?php echo $otrs["totalotrsres"]; ?>"></td>
			<td><strong><?php echo $totalparametrores; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>% de Eficiencia</strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "01"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "02"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "03"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "04"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "05"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "06"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "07"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "08"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "09"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "10"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "11"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "12"; $otrs = otrs($mes, $ano); if($otrs["totalotrsing"] != "0") { echo round(($otrs["totalotrsres"] * 100) / $otrs["totalotrsing"],2)."%"; $totalparametro = $totalparametro + $otrs["totalotrsing"]; } else { echo "0%"; } ?></strong></td>
			<td><strong><?php if($totalparametroing != "0") { echo round(($totalparametrores * 100) / $totalparametroing,2)."%"; } else { echo "0%"; }?></strong></td>
		</tr>
		</tbody>
	</table>
	</form>
	<br />
	<div id="chartContainer"></div>
	<br />
		<h4 class="bg-primary">Detalle de solicitudes Primer Semestre</h4>
		<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th>
			<th class="text-center" colspan="3">ENE</th>
			<th class="text-center" colspan="3">FEB</th>
			<th class="text-center" colspan="3">MAR</th>
			<th class="text-center" colspan="3">ABR</th>
			<th class="text-center" colspan="3">MAY</th>
			<th class="text-center" colspan="3">JUN</th>
		</tr>
		<tr class="bg-primary text-center">
			<th>Servicios</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<td class="text-left"><strong>SAO</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Correo</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Internet</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Datos Corporativos</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>LDAP/DNS/DHCP</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Otras Aplicaciones</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		</tbody>
	</table>
	<br />
		<h4 class="bg-primary">Detalle de solicitudes Segundo Semestre</h4>
		<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th>
			<th class="text-center" colspan="3">JUL</th>
			<th class="text-center" colspan="3">AGO</th>
			<th class="text-center" colspan="3">SEP</th>
			<th class="text-center" colspan="3">OCT</th>
			<th class="text-center" colspan="3">NOV</th>
			<th class="text-center" colspan="3">DIC</th>
		</tr>
		<tr class="bg-primary text-center">
			<th>Servicios</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
			<th class="text-center">I</th>
			<th class="text-center">R</th>
			<th class="text-center">%</th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<td class="text-left"><strong>SAO</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingsao"])) { echo $otrs["solingsao"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solressao"])) { echo $otrs["solressao"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solressao"] != "0" && !empty($otrs["solressao"])) { echo round(($otrs["solressao"] * 100) / $otrs["solingsao"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Correo</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingcorreo"])) { echo $otrs["solingcorreo"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solrescorreo"])) { echo $otrs["solrescorreo"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solrescorreo"] != "0" && !empty($otrs["solrescorreo"])) { echo round(($otrs["solrescorreo"] * 100) / $otrs["solingcorreo"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Internet</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginternet"])) { echo $otrs["solinginternet"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinternet"])) { echo $otrs["solresinternet"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinternet"] != "0" && !empty($otrs["solresinternet"])) { echo round(($otrs["solresinternet"] * 100) / $otrs["solinginternet"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Datos Corporativos</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingdcorp"])) { echo $otrs["solingdcorp"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresdcorp"])) { echo $otrs["solresdcorp"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresdcorp"] != "0" && !empty($otrs["solresdcorp"])) { echo round(($otrs["solresdcorp"] * 100) / $otrs["solingdcorp"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>LDAP/DNS/DHCP</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solinginf"])) { echo $otrs["solinginf"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresinf"])) { echo $otrs["solresinf"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresinf"] != "0" && !empty($otrs["solresinf"])) { echo round(($otrs["solresinf"] * 100) / $otrs["solinginf"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>Otras Aplicaciones</strong></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); if(!empty($otrs["solingotras"])) { echo $otrs["solingotras"]; } else { echo "0"; } ?></td>
			<td><?php $otrs = otrs($mes, $ano); if(!empty($otrs["solresotras"])) { echo $otrs["solresotras"]; } else { echo "0"; } ?></td>
			<td><strong><?php $otrs = otrs($mes, $ano); if($otrs["solresotras"] != "0" && !empty($otrs["solresotras"])) { echo round(($otrs["solresotras"] * 100) / $otrs["solingotras"],2)."%"; } else { echo "0%"; } ?></strong></td>
		</tr>
		</tbody>
	</table>
	<br />
		<h4 class="bg-primary">Análisis del Indice de Efectividad</h4>
		<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Mes</th>
			<th class="text-center"><strong>SAO</strong></th>
			<th class="text-center"><strong>Correo</strong></th>
			<th class="text-center"><strong>Internet</strong></th>
			<th class="text-center"><strong>Datos Corporativos</strong></th>
			<th class="text-center"><strong>LDAP/DNS/DHCP</strong></th>
			<th class="text-center"><strong>Otras Aplicaciones</strong></th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<th class="textleft">Enero</th>
			<td><?php $totalparametro = 0; $mes = "01"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Febrero</th>
			<td><?php $totalparametro = 0; $mes = "02"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Marzo</th>
			<td><?php $totalparametro = 0; $mes = "03"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Abril</th>
			<td><?php $totalparametro = 0; $mes = "04"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Mayo</th>
			<td><?php $totalparametro = 0; $mes = "05"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Junio</th>
			<td><?php $totalparametro = 0; $mes = "06"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Julio</th>
			<td><?php $totalparametro = 0; $mes = "07"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Agosto</th>
			<td><?php $totalparametro = 0; $mes = "08"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Septiembre</th>
			<td><?php $totalparametro = 0; $mes = "09"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Octubre</th>
			<td><?php $totalparametro = 0; $mes = "10"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Noviembre</th>
			<td><?php $totalparametro = 0; $mes = "11"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		<tr class="info text-center">
			<th class="textleft">Diciembre</th>
			<td><?php $totalparametro = 0; $mes = "12"; $otrs = otrs($mes, $ano); echo $otrs["obsersao"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obsercorreo"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinternet"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserdcorp"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserinf"]; ?></td>
			<td><?php $totalparametro = 0; $otrs = otrs($mes, $ano); echo $otrs["obserotras"]; ?></td>
		</tr>
		</table>
