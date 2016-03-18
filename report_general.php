	<?php
		include("/var/www/hececom/mod/insumo/funcion_principal.php");
		include("/var/www/hececom/mod/insumo/funcion_otrs.php");
		include("/var/www/hececom/mod/insumo/funcion_evi_no_eje.php");

		$ano = $_POST["valor"];
		$fuente = $_GET["fuente"];

	?>
	<!-- Tabla de Total de Actividades -->
	<?php if ($fuente != "1") { ?>
	<div style="position:relative; float:right;" class="dropdown">
  		<button class="btn btn-primary dropdown-toggle icon-export" type="button" data-toggle="dropdown"> Exportar <span class="caret"></span></button>
  		<ul class="dropdown-menu">
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/calc/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=general"><span class="icon-file-openoffice"></span> CALC</a></li>
    		<li><a href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/pdf/exportar.php?valor=<?php echo $ano; ?>&fuente=1&tip=general"><span class="icon-file-pdf"></span> PDF</a></li>
  		</ul>
	</div>
	<br /><br />
	<?php } else { $ano = $_GET["valor"]; } ?>
	<h4 class="bg-primary">A. Indices de Evaluación</h4>
	<table class="table table-hover table-condensed">
		<thead>
		<tr class="success text-center">
			<th class="text-center">Descripción</th><th>ENE</th><th>FEB</th><th>MAR</th><th>ABR</th><th>MAY</th><th>JUN</th><th>JUL</th><th>AGO</th><th>SEP</th><th>OCT</th><th>NOV</th><th>DIC</th><th>TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. MTTO. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprog']; $totalparametro = $totalparametro + $calculos['sumatotalmpprog'];?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. MTTO. PROG EJEC</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprogejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="danger text-center">
			<td class="text-left"><strong>ACT. MTTO. PROG. NO EJEC.</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalmpprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotalmpprognoejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. PROGRAMADAS ADICIONALES</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprog']; $totalparametro = $totalparametro + $calculos['sumatotaladprog']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. PROGRAMADAS ADICIONALES EJEC.</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprogejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprogejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="danger text-center">
			<td class="text-left"><strong>ACT. PROGRAMADAS NO INHERENTE AL MTTO. NO EJEC.</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotaladprognoejec']; $totalparametro = $totalparametro + $calculos['sumatotaladprognoejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="warning text-center">
			<td class="text-left"><strong>TOTAL ACT. EJEC. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalapejec']; $totalparametro = $totalparametro + $calculos['sumatotalapejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="warning text-center">
			<td class="text-left"><strong>TOTAL ACT. PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['sumatotalap']; $totalparametro = $totalparametro + $calculos['sumatotalap']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="info text-center">
			<td class="text-left"><strong>ACT. EJEC. NO PROGRAMADAS</strong></td>
			<td><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalnoprogejec']; $totalparametro = $totalparametro + $calculos['sumatotalnoprogejec']; ?></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		<tr class="success text-center">
			<td class="text-left"><strong>TOTAL ACTIVIDADES EJEC.</strong></td>
			<td><strong><?php $totalparametro = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['sumatotalacejec']; $totalparametro = $totalparametro + $calculos['sumatotalacejec']; ?></strong></td>
			<td><strong><?php echo $totalparametro; ?></strong></td>
		</tr>
		</tbody>
	</table>
	<br />
	<h4 class="bg-primary">B. Clasificación de las Actividades</h4>
	<table class="table table-hover table-condensed table-striped">
		<thead>
		<tr class="info text-center">
			<th class="text-center">Descripción</th> <th>ENE</th> <th>FEB</th> <th>MAR</th> <th>ABR</th> <th>MAY</th> <th>JUN</th> <th>JUL</th> <th>AGO</th> <th>SEP</th> <th>OCT</th> <th>NOV</th> <th>DIC</th> <th>PROM</th>
		</tr>
		</thead>
		<tbody>
		<tr class="text-center">
			<td class="info text-left"><strong>MANTTO. PREVENTIVO</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec']+ $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MP']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>MANTTO. CORRECTIVO</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MC']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['MC']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>INSTAL. Y MODIFICACION</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['IM']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['IM']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>REVISIONES E INVESTIGACION</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['RI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['RI']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>LABORATORIO</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['L']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['L']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>ADIESTRAMIENTO</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['A']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['A']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>ORGANIZ/SUPERV/CONTROL</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['OS']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['OS']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>APOYO TECN. Y LOGISTICO</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AL']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AL']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>ACTIVIDADES DE PROYECTOS</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AP']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AP']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>ACTIVIDADES INSTITUCIONALES</strong></td>
			<td><?php $totalparametro = 0; $totalsumatotalacejec = 0; $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['AI']; $totalsumatotalacejec = $totalsumatotalacejec + $calculos['sumatotalacejec'] + $otrs['totalotrsres']; $totalparametro = $totalparametro + $calculos['AI']; ?></td>
			<td><?php echo round(($totalparametro * 100) / $totalsumatotalacejec, 2)."%"; ?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>TOTAL EJECUTADO</strong></td>
			<td><strong><?php $mes = "01"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "02"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "03"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "04"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "05"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "06"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "07"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "08"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "09"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "10"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "11"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td><strong><?php $mes = "12"; $calculos = calculos($mes, $ano); $otrs = otrs($mes, $ano); echo $calculos['MP'] + $calculos['MC'] + $calculos['IM'] + $calculos['RI'] + $calculos['L'] + $calculos['A'] + $calculos['OS'] + $calculos['AL'] + $calculos['AP'] + $calculos['AI']; ?></strong></td>
			<td></td>
		</tr>
	</tbody>
	</table>
	<br />
	<h4 class="bg-primary">C. Clasificación de las Actividades NO Programadas</h4>
	<table class="table table-hover table-condensed table-striped">
		<thead>
		<tr class="info text-center">
			<th class="text-center">Descripción</th> <th>ENE</th> <th>FEB</th> <th>MAR</th> <th>ABR</th> <th>MAY</th> <th>JUN</th> <th>JUL</th> <th>AGO</th> <th>SEP</th> <th>OCT</th> <th>NOV</th> <th>DIC</th>
		</tr>
		</thead>
		<tbody>
		<tr class="text-center">
			<td class="info text-left"><strong>SOLICITUDES (OTRS)</strong></td>
			<td><?php $mes = "01"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "02"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "03"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "04"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "05"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "06"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "07"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "08"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "09"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "10"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "11"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
			<td><?php $mes = "12"; $otrs = otrs($mes, $ano); echo $otrs['totalotrsres']?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>FALLAS SERVICIOS</strong></td>
			<td><?php $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['fallaser']?></td>
		</tr>
		<tr class="text-center">
			<td class="info text-left"><strong>FALLAS SISTEMAS</strong></td>
			<td><?php $mes = "01"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "02"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "03"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "04"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "05"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "06"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "07"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "08"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "09"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "10"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "11"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
			<td><?php $mes = "12"; $calculos = calculos($mes, $ano); echo $calculos['fallasis']?></td>
		</tr>
		</tbody>
	</table>
	<br />
	<h4 class="bg-primary">D. Justificación Actividades Programadas NO Ejecutadas</h4>
	<table class="table table-hover table-condensed table-striped">
		<thead>
		<tr class="info text-center">
			<th class="text-center">Fecha</th> <th class="text-center">Actividad</th> <th class="text-center">Justificación</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$consulta = evi_no_eje($ano);
			while($campo = @pg_fetch_object($consulta)) {
				$fechaact = utf8_encode($campo->fechaact);
				$actividad = utf8_encode($campo->actividad);
				$numreport = utf8_encode($campo->numreport);
			?>
			<tr class="text-center">
				<td><?php echo $fechaact; ?></td>
				<td><?php echo $actividad; ?></td>
				<td><?php echo $numreport; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
