<?php
function otrs($mes, $ano) {
		include('/var/www/hececom/config/conecta.php');
		$hccQuery = "SELECT * FROM hcc_rep_otrs WHERE mes LIKE '".$mes."' and ano LIKE '".$ano."'";
		$hccGet = @pg_query($hccConect,$hccQuery);
		while($campo = @pg_fetch_object($hccGet)) {
			$solingsao = utf8_encode($campo->solingsao);
			$solressao = utf8_encode($campo->solressao);
			$solingcorreo = utf8_encode($campo->solingcorreo);
			$solrescorreo = utf8_encode($campo->solrescorreo);
			$solinginternet = utf8_encode($campo->solinginternet);
			$solresinternet = utf8_encode($campo->solresinternet);
			$solingdcorp = utf8_encode($campo->solingdcorp);
			$solresdcorp = utf8_encode($campo->solresdcorp);
			$solinginf = utf8_encode($campo->solinginf);
			$solresinf = utf8_encode($campo->solresinf);
			$solingotras = utf8_encode($campo->solingotras);
			$solresotras = utf8_encode($campo->solresotras);
			$obsersao = utf8_encode($campo->obsersao);
			$obsercorreo = utf8_encode($campo->obsercorreo);
			$obserinternet = utf8_encode($campo->obserinternet);
			$obserdcorp = utf8_encode($campo->obserdcorp);
			$obserinf = utf8_encode($campo->obserinf);
			$obserotras = utf8_encode($campo->obserotras);
		}

		$totalotrsing = $solingsao + $solingcorreo + $solinginternet + $solingdcorp + $solinginf + $solingotras;
		$totalotrsres = $solressao + $solrescorreo + $solresinternet + $solresdcorp + $solresinf + $solresotras;

		return $resultados = array('solingsao' => $solingsao, 'solressao' => $solressao, 'solingcorreo' => $solingcorreo, 'solrescorreo' => $solrescorreo, 'solinginternet' => $solinginternet, 'solresinternet' => $solresinternet, 'solingdcorp' => $solingdcorp, 'solresdcorp' => $solresdcorp, 'solinginf' => $solinginf, 'solresinf' => $solresinf, 'solingotras' => $solingotras, 'solresotras' => $solresotras, 'totalotrsing' => $totalotrsing, 'totalotrsres' => $totalotrsres, 'obsersao' => $obsersao, 'obsercorreo' => $obsercorreo, 'obserinternet' => $obserinternet, 'obserdcorp' => $obserdcorp, 'obserinf' => $obserinf, 'obserotras' => $obserotras);
}
?>