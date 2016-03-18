<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fuentes.css">
	<script src= "http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/js/angular.min.js"></script>
  	<script>
		var app = angular.module('validationApp', []);

		app.controller('validateCtrl', function($scope) {

			$scope.reset = function () {
				$scope.solingsao = "0"; $scope.solressao = "0"; $scope.solingcorreo = "0"; $scope.solrescorreo = "0"; $scope.solinginternet = "0"; $scope.solresinternet = "0"; $scope.solingdcorp = "0"; $scope.solresdcorp = "0"; $scope.solinginf = "0"; $scope.solresinf = "0"; $scope.solingotras = "0"; $scope.solresotras = "0"; $scope.mes = "<?php echo date('m') ?>"; $scope.ano = "<?php echo date('Y') ?>"; 
			}

			$scope.submitForm = function(event) {
    			r=confirm("Esta seguro que desea ingresar este nuevo registro?, se reemplazara cualquier registro que contenga el mismo mes y año seleccionado");
				
				if (r==false) { event.preventDefault(); }
  			};

  			$scope.totaling = function () {
                return parseInt($scope.solingsao) + parseInt($scope.solingcorreo) + parseInt($scope.solinginternet) + parseInt($scope.solingdcorp) + parseInt($scope.solinginf) + parseInt($scope.solingotras);
            };

            $scope.totalres = function () {
                return parseInt($scope.solressao) + parseInt($scope.solrescorreo) + parseInt($scope.solresinternet) + parseInt($scope.solresdcorp) + parseInt($scope.solresinf) + parseInt($scope.solresotras);
            };

            $scope.totalefectividad = function () {
                return ((parseInt($scope.solressao) + parseInt($scope.solrescorreo) + parseInt($scope.solresinternet) + parseInt($scope.solresdcorp) + parseInt($scope.solresinf) + parseInt($scope.solresotras)) * 100) / (parseInt($scope.solingsao) + parseInt($scope.solingcorreo) + parseInt($scope.solinginternet) + parseInt($scope.solingdcorp) + parseInt($scope.solinginf) + parseInt($scope.solingotras)); 
            };

		});

		function validar_texto(e){
		    tecla = (document.all) ? e.keyCode : e.which;

		    //Tecla de retroceso para borrar, siempre la permite
		    if (tecla==8){
		        return true;
		    }
		     
		    // Patron de entrada, en este caso solo acepta numeros
		    patron =/[0-9]/;
		    
		    tecla_final = String.fromCharCode(tecla);
		    
		    return patron.test(tecla_final);
		}
	</script>
</head>
<body>
	<h3 class="text-center">Ingresar Registros OTRS</h3>
	<br /><br />
	<center>	
	<div class="btn-group">
		<a href="?mod=insumo"><button type="button" class="btn btn-primary">Generar Reporte de Insumo</button></a>
  		<a href="?mod=insumo-ing-otrs"><button type="button" class="btn btn-primary active">Ingresar Reportes OTRS</button></a>
	</div>
	</center>
	<br /><br />
	<div class="container">
		<form method="POST" action="?mod=add-otrs" ng-init="reset()" ng-app="validationApp" ng-controller="validateCtrl" ng-submit="submitForm($event)" name="fingreso" novalidate>
			<table class="table table-hover table-condensed table-striped">
				<thead>
				<tr class="bg-primary">
					<th>Descripción</th>
					<th>Solicitudes Ingresadas</th>
					<th>Solicitudes Resueltas</th>
					<th>Observación</th>
					<th class="text-right">% de Efectividad</th>
				</tr>
				</thead>
				<tr>
					<th>Mes a Ingresar</th>
					<td colspan="2">
						<select class="form-control" name="mes" ng-model="mes" required>
							<option value="">Seleccione el mes a registrar</option>
							<?php for ($i=1; $i < 10; $i++) { 
								echo "<option value='0".$i."'>0".$i."</option>";
							} ?>
							<?php for ($i=10; $i < 13; $i++) { 
								echo "<option value='".$i."'>".$i."</option>";
							} ?>
						</select>
						<span ng-show="fingreso.mes.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.mes.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.mes.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.mes.$valid"> Valido</span>
  						</span>
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th>Año a Ingresar</th>
					<td colspan="2">
						<select class="form-control" name="ano" ng-model="ano" required>
							<option value="">Seleccione el año a registrar</option>
							<?php for ($i = date("Y") - 5; $i <= date("Y"); $i++) { 
								echo "<option value='".$i."'>".$i."</option>";
							} ?>
						</select>
						<span ng-show="fingreso.ano.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.ano.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.ano.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.ano.$valid"> Valido</span>
  						</span>
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th>Servicios SAO</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solingsao" name ="solingsao" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solingsao.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solingsao.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solingsao.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solingsao.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solressao" name ="solressao" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solressao.$invalid ">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solressao.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solressao.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solressao.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obsersao" ng-model="obsersao" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obsersao.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solressao * 100) / solingsao | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Servicios Correo</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solingcorreo" name ="solingcorreo" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solingcorreo.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solingcorreo.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solingcorreo.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solingcorreo.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solrescorreo" name ="solrescorreo" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solrescorreo.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solrescorreo.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solrescorreo.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solrescorreo.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obsercorreo" ng-model="obsercorreo" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obsercorreo.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solrescorreo * 100) / solingcorreo | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Servicios Internet</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solinginternet" name ="solinginternet" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solinginternet.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solinginternet.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solinginternet.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solinginternet.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solresinternet" name ="solresinternet" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solresinternet.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solresinternet.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solresinternet.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solresinternet.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obserinternet" ng-model="obserinternet" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obserinternet.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solresinternet * 100) / solinginternet | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Servicios Datos Corporativos</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solingdcorp" name ="solingdcorp" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solingdcorp.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solingdcorp.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solingdcorp.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solingdcorp.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solresdcorp" name ="solresdcorp" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solresdcorp.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solresdcorp.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solresdcorp.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solresdcorp.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obserdcorp" ng-model="obserdcorp" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obserdcorp.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solresdcorp * 100) / solingdcorp | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Servicios LDAP/DNS/DHCP</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solinginf" name ="solinginf" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solinginf.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solinginf.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solinginf.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solinginf.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solresinf" name ="solresinf" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solresinf.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solresinf.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solresinf.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solresinf.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obserinf" ng-model="obserinf" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obserinf.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solresinf * 100) / solinginf | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Servicios Otras Aplicaciones</th>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solingotras" name ="solingotras" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solingotras.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solingotras.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solingotras.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solingotras.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<input class="form-control" placeholder="Ingrese el valor" type="text" maxlength="4" ng-model="solresotras" name ="solresotras" onkeypress="return validar_texto(event)" required>
						<br />
						<span ng-show="fingreso.solresotras.$invalid">
  							<span style="float:right;" class="icon-squared-cross" ng-show="fingreso.solresotras.$error.required"> Invalido</span>
  						</span>
  						<span ng-show="fingreso.solresotras.$valid">
  							<span style="float:right;" class="icon-check" ng-show="fingreso.solresotras.$valid"> Valido</span>
  						</span>
					</td>
					<td>
						<textarea style="resize:none" class="form-control" name="obserotras" ng-model="obserotras" placeholder="Ingrese una observación" maxlength="250" cols="30" rows="2"></textarea>
						<strong><span class="text-info" style="font-size:12px; float:right;">Caracteres restantes: {{ 250 - obserotras.length }}</span></strong>
					</td>
					<td class="text-right">
						<strong>{{ (solresotras * 100) / solingotras | number:2 }}%</strong>
					</td>
				</tr>
				<tr>
					<th>Total de Solicitudes</th>
					<td class="text-right">
						<strong>{{ totaling() | number:0 }}</strong>
					</td>
					<td class="text-right">
						<strong>{{ totalres() | number:0 }}</strong>
					</td>
					<td></td>
					<td class="text-right">
						<strong>{{ totalefectividad() | number:2 }}%</strong>
					</td>
				</tr>
			</table>
			<button class="btn btn-success" type="submit" ng-disabled="fingreso.solingsao.$invalid || fingreso.solressao.$invalid || fingreso.solingcorreo.$invalid || fingreso.solrescorreo.$invalid || fingreso.solinginternet.$invalid || fingreso.solresinternet.$invalid || fingreso.solingdcorp.$invalid || fingreso.solresdcorp.$invalid || fingreso.solinginf.$invalid || fingreso.solresinf.$invalid || fingreso.solingotras.$invalid || fingreso.solresotras.$invalid || fingreso.mes.$invalid || fingreso.ano.$invalid">Guardar</button>
			<input class="btn btn-danger" type="button" ng-click="reset()" value="Resetear">
		</form>
	</div>
</body>
</html>
