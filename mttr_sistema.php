	<?php
		include("/var/www/hececom/mod/insumo/funcion_mttr.php");
		include("/var/www/hececom/mod/insumo/funcion_mttr_observaciones.php");

		$fuente = $_GET["fuente"]; 
  		$ano = $_POST["valor"];
  		$tipfalla = "2";
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
	    	<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/calc/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=mttr_sistema"><span class="icon-file-openoffice"></span> CALC</a></li>
	    	<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/pdf/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=mttr_sistema"><span class="icon-file-pdf"></span> PDF</a></li>
	  	</ul>
	</div>
	<br /><br />
	<?php } else { $ano = $_GET["valor"]; } ?>
	<form name="tabla">
		<input name="titulo" type="hidden" value="Gráfica MTTR Fallas de Sistemas">
		<input name="parametro2" type="hidden" value="MTTR (Hrs)">
		<input name="parametro1" type="hidden" value="N° Fallas">
	<h3>Indicador MTTR Fallas de Sistemas</h3>
	<br />
	<h4 class="bg-primary">1er Trimestre</h4>
	<table class="table table-hover table-condensed">
		<thead>
			<tr class="success text-center">
				<th></th><th class="text-center" colspan="3">ENE</th><th class="text-center" colspan="3">FEB</th><th class="text-center" colspan="3">MAR</th>
			</tr>
			<tr class="info">
				<th class="left">Servicios</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td class="info text-left"><strong>Sao</strong></td>
				<td><?php $total1 = 0; $mes = "01"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php $tiempo1 = 0; echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total2 = 0; $mes = "02"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php $tiempo2 = 0; echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total3 = 0; $mes = "03"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php $tiempo3 = 0; echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Correo</strong></td>
				<td><?php $mes = "01"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "02"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "03"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Internet</strong></td>
				<td><?php $mes = "01"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "02"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "03"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Datos Corporativos</strong></td>
				<td><?php $mes = "01"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "02"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "03"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>LDAP/DNS/DHCP</strong></td>
				<td><?php $mes = "01"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "02"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "03"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Otras Aplicaciones</strong></td>
				<td><?php $mes = "01"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "02"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "03"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total'];?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Total</strong></td>
				<td><strong><?php echo $total1; ?></strong><input name="parametro1mes1" type="hidden" value="<?php echo $total1; ?>"></td>
				<td><strong><?php echo $tiempo1 ?></strong></td>
				<td><strong><?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?></strong><input name="parametro2mes1" type="hidden" value="<?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?>"></td>
				<td><strong><?php echo $total2; ?></strong><input name="parametro1mes2" type="hidden" value="<?php echo $total2; ?>"></td>
				<td><strong><?php echo $tiempo2 ?></strong></td>
				<td><strong><?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?></strong><input name="parametro2mes2" type="hidden" value="<?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?>"></td>
				<td><strong><?php echo $total3; ?></strong><input name="parametro1mes3" type="hidden" value="<?php echo $total3; ?>"></td>
				<td><strong><?php echo $tiempo3 ?></strong></td>
				<td><strong><?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?></strong><input name="parametro2mes3" type="hidden" value="<?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?>"></td>
			</tr>
		</tbody>
	</table>
	<br />
	<h4 class="bg-primary">2do Trimestre</h4>
	<table class="table table-hover table-condensed">
		<thead>
			<tr class="success text-center">
				<th></th><th class="text-center" colspan="3">ABR</th><th class="text-center" colspan="3">MAY</th><th class="text-center" colspan="3">JUN</th>
			</tr>
			<tr class="info">
				<th class="text-left">Servicios</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td class="info text-left"><strong>Sao</strong></td>
				<td><?php $total1 = 0; $mes = "04"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php $tiempo1 = 0; echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total2 = 0; $mes = "05"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php $tiempo2 = 0; echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total3 = 0; $mes = "06"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php $tiempo3 = 0; echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Correo</strong></td>
				<td><?php $mes = "04"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "05"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "06"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Internet</strong></td>
				<td><?php $mes = "04"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "05"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "06"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Datos Corporativos</strong></td>
				<td><?php $mes = "04"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "05"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "06"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>LDAP/DNS/DHCP</strong></td>
				<td><?php $mes = "04"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "05"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "06"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Otras Aplicaciones</strong></td>
				<td><?php $mes = "04"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "05"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "06"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Total</strong></td>
				<td><strong><?php echo $total1; ?></strong><input name="parametro1mes4" type="hidden" value="<?php echo $total1; ?>"></td>
				<td><strong><?php echo $tiempo1 ?></strong></td>
				<td><strong><?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?></strong><input name="parametro2mes4" type="hidden" value="<?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total2; ?></strong><input name="parametro1mes5" type="hidden" value="<?php echo $total2; ?>"></td>
				<td><strong><?php echo $tiempo2 ?></strong></td>
				<td><strong><?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?></strong><input name="parametro2mes5" type="hidden" value="<?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total3; ?></strong><input name="parametro1mes6" type="hidden" value="<?php echo $total3; ?>"></td>
				<td><strong><?php echo $tiempo3 ?></strong></td>
				<td><strong><?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?></strong><input name="parametro2mes6" type="hidden" value="<?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?>"></td></td>
			</tr>
		</tbody>
	</table>
	<br />
	<h4 class="bg-primary">3er Trimestre</h4>
	<table class="table table-hover table-condensed">
		<thead>
			<tr class="success text-center">
				<th></th><th class="text-center" colspan="3">JUL</th><th class="text-center" colspan="3">AGO</th><th class="text-center" colspan="3">SEP</th>
			</tr>
			<tr class="info">
				<th class="text-left">Servicios</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td class="info text-left"><strong>Sao</strong></td>
				<td><?php $total1 = 0; $mes = "07"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php $tiempo1 = 0; echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total2 = 0; $mes = "08"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php $tiempo2 = 0; echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total3 = 0; $mes = "09"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php $tiempo3 = 0; echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Correo</strong></td>
				<td><?php $mes = "07"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "08"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "09"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Internet</strong></td>
				<td><?php $mes = "07"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "08"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "09"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Datos Corporativos</strong></td>
				<td><?php $mes = "07"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "08"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "09"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>LDAP/DNS/DHCP</strong></td>
				<td><?php $mes = "07"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "08"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "09"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Otras Aplicaciones</strong></td>
				<td><?php $mes = "07"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "08"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "09"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Total</strong></td>
				<td><strong><?php echo $total1; ?></strong><input name="parametro1mes7" type="hidden" value="<?php echo $total1; ?>"></td>
				<td><strong><?php echo $tiempo1 ?></strong></td>
				<td><strong><?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?></strong><input name="parametro2mes7" type="hidden" value="<?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total2; ?></strong><input name="parametro1mes8" type="hidden" value="<?php echo $total2; ?>"></td>
				<td><strong><?php echo $tiempo2 ?></strong></td>
				<td><strong><?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?></strong><input name="parametro2mes8" type="hidden" value="<?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total3; ?></strong><input name="parametro1mes9" type="hidden" value="<?php echo $total3; ?>"></td>
				<td><strong><?php echo $tiempo3 ?></strong></td>
				<td><strong><?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?></strong><input name="parametro2mes9" type="hidden" value="<?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?>"></td></td>
			</tr>
		</tbody>
	</table>
	<br />
	<h4 class="bg-primary">4to Trimestre</h4>
	<table class="table table-hover table-condensed">
		<thead>
			<tr class="success text-center">
				<th></th><th class="text-center" colspan="3">OCT</th><th class="text-center" colspan="3">NOV</th><th class="text-center" colspan="3">DIC</th>
			</tr>
			<tr class="info">
				<th class="text-left">Servicios</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th><th class="text-center">N° Fallas</th><th class="text-center">Tiempo</th><th class="text-center">MTTR</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td class="info text-left"><strong>Sao</strong></td>
				<td><?php $total1 = 0; $mes = "10"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php $tiempo1 = 0; echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total2 = 0; $mes = "11"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php $tiempo2 = 0; echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $total3 = 0; $mes = "12"; $servicio = "1"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php $tiempo3 = 0; echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Correo</strong></td>
				<td><?php $mes = "10"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "11"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "12"; $servicio = "2"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Internet</strong></td>
				<td><?php $mes = "10"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "11"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "12"; $servicio = "3"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Datos Corporativos</strong></td>
				<td><?php $mes = "10"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "11"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "12"; $servicio = "4"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>LDAP/DNS/DHCP</strong></td>
				<td><?php $mes = "10"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "11"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "12"; $servicio = "5"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Otras Aplicaciones</strong></td>
				<td><?php $mes = "10"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total1 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo1 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "11"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total2 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo2 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
				<td><?php $mes = "12"; $servicio = "6"; $mttr = mttr($mes, $ano, $servicio, $tipfalla); echo $mttr['total']; $total3 += $mttr['total']; ?></td>
				<td><?php echo $mttr['tiempo']; $tiempo3 += $mttr['tiempo']; ?></td>
				<td><?php echo $mttr['promedio']; ?></td>
			</tr>
			<tr class="text-center">
				<td class="info text-left"><strong>Total</strong></td>
				<td><strong><?php echo $total1; ?></strong><input name="parametro1mes10" type="hidden" value="<?php echo $total1; ?>"></td>
				<td><strong><?php echo $tiempo1 ?></strong></td>
				<td><strong><?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?></strong><input name="parametro2mes10" type="hidden" value="<?php if($total1 != "0") { echo round($tiempo1 / $total1,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total2; ?></strong><input name="parametro1mes11" type="hidden" value="<?php echo $total2; ?>"></td>
				<td><strong><?php echo $tiempo2 ?></strong></td>
				<td><strong><?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?></strong><input name="parametro2mes11" type="hidden" value="<?php if($total2 != "0") { echo round($tiempo2 / $total2,2); } else { echo "0"; } ?>"></td></td>
				<td><strong><?php echo $total3; ?></strong><input name="parametro1mes12" type="hidden" value="<?php echo $total3; ?>"></td>
				<td><strong><?php echo $tiempo3 ?></strong></td>
				<td><strong><?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?></strong><input name="parametro2mes12" type="hidden" value="<?php if($total3 != "0") { echo round($tiempo3 / $total3,2); } else { echo "0"; } ?>"></td></td>
			</tr>
		</tbody>
	</table>
	</form>
	<br />
	<div id="chartContainer"></div>
	<br />
	<h4 class="bg-primary">Detalle de Solicitudes</h4>
	<br />
	<table class="table table-hover table-condensed">
	<thead>
	<tr class="success">
		<th class="text-center">Descripción de la Falla</th>
		<th class="text-center">Solución</th>
		<th class="text-center">Fecha Inicio</th>
		<th class="text-center">Hora Incio</th>
		<th class="text-center">Fecha Fin</th>
		<th class="text-center">Hora Fin</th>
		<th class="text-center">Duración</th>
	</tr>
	</thead>
	<?php
		for ($i=1; $i < 13; $i++) { 
			if($i < 10) { $mes = "0".$i; } else { $mes = $i; }
			$consulta = mttr_obs($mes, $ano, $tipfalla);
			while($campo = @pg_fetch_object($consulta)) {
				$actividad = utf8_encode($campo->actividad);
				$numreport = utf8_encode($campo->numreport);
				$fechaact = $campo->fechaact;
				$hora_inicio = $campo->hora_inicio;
				$fechamod = $campo->fechamod;
				$hora_final = $campo->hora_final;
				$tiempo_total = $campo->tiempo_total;
	?>
	<tbody>
	<tr class="text-center">
		<td><?php echo $actividad; ?></td>
		<td><?php echo $numreport; ?></td>
		<td><?php echo $fechaact; ?></td>
		<td><?php echo $hora_inicio; ?></td>
		<td><?php echo $fechamod; ?></td>
		<td><?php echo $hora_final; ?></td>
		<td><?php echo $tiempo_total; ?></td>
	</tr>
	</tbody>
	<?php } } ?>
	</table>