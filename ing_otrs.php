<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript">
		function volver() {
			location.href = "http://gestion-atit-guayana.corpoelec.com.ve/?mod=insumo-ing-otrs";
		}
	</script>
	<link rel="stylesheet" href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/css/bootstrap.min.css">
</head>
<body>
	<?php
		function registrar($hccConect){
			$hccQuery = "INSERT INTO hcc_rep_otrs (mes, ano, solingsao, solressao, solingcorreo, solrescorreo, solinginternet, solresinternet, solingdcorp, solresdcorp, solinginf, solresinf, solingotras, solresotras, obsersao, obsercorreo, obserinternet, obserdcorp, obserinf, obserotras) VALUES ('$_POST[mes]','$_POST[ano]','$_POST[solingsao]','$_POST[solressao]','$_POST[solingcorreo]','$_POST[solrescorreo]','$_POST[solinginternet]','$_POST[solresinternet]','$_POST[solingdcorp]','$_POST[solresdcorp]','$_POST[solinginf]','$_POST[solresinf]','$_POST[solingotras]','$_POST[solresotras]','$_POST[obsersao]','$_POST[obsercorreo]','$_POST[obserinternet]','$_POST[obserdcorp]','$_POST[obserinf]','$_POST[obserotras]')";
			$hccInsert = @pg_query($hccConect,$hccQuery);
			echo "<br />";
			echo "<strong><span class='text-success'>Registro ingresado con éxito </span></strong>";
			echo "<a href='?mod=insumo-ing-otrs'><button class='btn btn-default'>Volver</button></a>";
		}

		function update($hccConect,$id){
			$hccQuery = "UPDATE hcc_rep_otrs SET mes = '$_POST[mes]', ano = '$_POST[ano]', solingsao = '$_POST[solingsao]', solressao = '$_POST[solressao]', solingcorreo = '$_POST[solingcorreo]', solrescorreo = '$_POST[solrescorreo]', solinginternet = '$_POST[solinginternet]', solresinternet = '$_POST[solresinternet]', solingdcorp = '$_POST[solingdcorp]', solresdcorp = '$_POST[solresdcorp]', solinginf = '$_POST[solinginf]', solresinf = '$_POST[solresinf]', solingotras = '$_POST[solingotras]', solresotras = '$_POST[solresotras]', obsersao = '$_POST[obsersao]', obsercorreo = '$_POST[obsercorreo]', obserinternet = '$_POST[obserinternet]', obserdcorp = '$_POST[obserdcorp]', obserinf = '$_POST[obserinf]', obserotras = '$_POST[obserotras]' WHERE id = '".$id."'";
			$hccInsert = @pg_query($hccConect,$hccQuery);
			echo "<br />";
			echo "<strong><span class='text-success'>Registro ingresado con éxito </span></strong>";
			echo "<a href='?mod=insumo-ing-otrs'><button class='btn btn-default'>Volver</button></a>";
		}

		include('/var/www/hececom/config/conecta.php');
		pg_set_client_encoding($hccConect, "UTF8");
		$hccQuery = "SELECT * FROM hcc_rep_otrs WHERE mes = '$_POST[mes]' AND ano = '$_POST[ano]'";
		$hccGet = @pg_query($hccConect,$hccQuery);
		if(pg_num_rows($hccGet)!=0) {
			while($campo = @pg_fetch_object($hccGet)) {
				$id = utf8_encode($campo->id);
			}
			update($hccConect,$id); 
		} else { 
			registrar($hccConect); 
		} 
	?>
</body>
</html>