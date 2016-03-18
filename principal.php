<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fuentes.css">
	<link rel="stylesheet" href="css/fuentes_doc.css">
  	<script src="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/js/jquery.min.js"></script>
  	<script src="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/js/bootstrap.min.js"></script>
  	<script src="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/js/canvasjs.min.js"></script>

	<script type="text/javascript">
		var asignar = "report_general.php";

		function asignarvalor(valor) {
			asignar = valor;
		}

		function loadreport(valor)
		{
			var xmlhttp;
			v = valor;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("contenedor").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("POST","http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/"+asignar+"", true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("valor="+v);
		}

		function grafica() {
			var titulo = document.tabla.titulo.value;
			var parametro1 = document.tabla.parametro1.value;
			var parametro2 = document.tabla.parametro2.value;
			var parametro1mes1 = document.tabla.parametro1mes1.value; var parametro1mes2 = document.tabla.parametro1mes2.value; var parametro1mes3 = document.tabla.parametro1mes3.value; var parametro1mes4 = document.tabla.parametro1mes4.value; var parametro1mes5 = document.tabla.parametro1mes5.value; var parametro1mes6 = document.tabla.parametro1mes6.value; var parametro1mes7 = document.tabla.parametro1mes7.value; var parametro1mes8 = document.tabla.parametro1mes8.value; var parametro1mes9 = document.tabla.parametro1mes9.value; var parametro1mes10 = document.tabla.parametro1mes10.value; var parametro1mes11 = document.tabla.parametro1mes11.value; var parametro1mes12 = document.tabla.parametro1mes12.value; 
			var parametro2mes1 = document.tabla.parametro2mes1.value; var parametro2mes2 = document.tabla.parametro2mes2.value; var parametro2mes3 = document.tabla.parametro2mes3.value; var parametro2mes4 = document.tabla.parametro2mes4.value; var parametro2mes5 = document.tabla.parametro2mes5.value; var parametro2mes6 = document.tabla.parametro2mes6.value; var parametro2mes7 = document.tabla.parametro2mes7.value; var parametro2mes8 = document.tabla.parametro2mes8.value; var parametro2mes9 = document.tabla.parametro2mes9.value; var parametro2mes10 = document.tabla.parametro2mes10.value; var parametro2mes11 = document.tabla.parametro2mes11.value; var parametro2mes12 = document.tabla.parametro2mes12.value;
			if(parametro2 == "MTTR (Hrs)") {
				tipografica = "spline";
				colorline = "black"
			}
			else {
				tipografica = "column";
				colorline = "#EC5657"
			}
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true, 
			  	animationDuration: 2000,   //change to 1000, 500
			    theme: "theme1",
			            
			    title:{
			    	text: ""+titulo+"",
			    	fontSize: 22           
			    },
	        		

			    exportFileName: ""+titulo+"",  //Give any name accordingly
				exportEnabled: true,

			    data: [  //array of dataSeries     
			    { //dataSeries - first quarter
			 /*** Change type "column" to "bar", "area", "line" or "pie"***/ 

			    type: "column",
			    indexLabelFontSize: 14,
			    indexLabelFontColor: "#008080",
			    indexLabelFontWeight: "bold",
			    name: ""+parametro1+"",
			    showInLegend: true,
			    dataPoints: [
				    { label: "Ene", y: +parametro1mes1 ,indexLabel: ""+parametro1mes1+""},
				    { label: "Feb", y: +parametro1mes2 ,indexLabel: ""+parametro1mes2+""},
				    { label: "Mar", y: +parametro1mes3 ,indexLabel: ""+parametro1mes3+""},                                    
				    { label: "Abr", y: +parametro1mes4 ,indexLabel: ""+parametro1mes4+""},
				    { label: "May", y: +parametro1mes5 ,indexLabel: ""+parametro1mes5+""},
				    { label: "Jun", y: +parametro1mes6 ,indexLabel: ""+parametro1mes6+""},
				    { label: "Jul", y: +parametro1mes7 ,indexLabel: ""+parametro1mes7+""},                                    
				    { label: "Ago", y: +parametro1mes8 ,indexLabel: ""+parametro1mes8+""},
				    { label: "Sep", y: +parametro1mes9 ,indexLabel: ""+parametro1mes9+""},
				    { label: "Oct", y: +parametro1mes10 ,indexLabel: ""+parametro1mes10+""},
				    { label: "Nov", y: +parametro1mes11 ,indexLabel: ""+parametro1mes11+""},                                    
				    { label: "Dic", y: +parametro1mes12 ,indexLabel: ""+parametro1mes12+""}
			    ]
			    },

			    { //dataSeries - second quarter

			    type: ""+tipografica+"",
			    name: ""+parametro2+"",
			    indexLabelFontSize: 14,
			    indexLabelFontColor: ""+colorline+"",
			    indexLabelFontWeight: "bold",
			    showInLegend: true,               
			    dataPoints: [
				    { label: "Ene", y: +parametro2mes1 ,indexLabel: ""+parametro2mes1+"" },
				    { label: "Feb", y: +parametro2mes2 ,indexLabel: ""+parametro2mes2+"" },
				    { label: "Mar", y: +parametro2mes3 ,indexLabel: ""+parametro2mes3+"" },                                    
				    { label: "Abr", y: +parametro2mes4 ,indexLabel: ""+parametro2mes4+"" },
				    { label: "May", y: +parametro2mes5 ,indexLabel: ""+parametro2mes5+"" },
				    { label: "Jun", y: +parametro2mes6 ,indexLabel: ""+parametro2mes6+"" },
				    { label: "Jul", y: +parametro2mes7 ,indexLabel: ""+parametro2mes7+"" },                                    
				    { label: "Ago", y: +parametro2mes8 ,indexLabel: ""+parametro2mes8+"" },
				    { label: "Sep", y: +parametro2mes9 ,indexLabel: ""+parametro2mes9+"" },
				    { label: "Oct", y: +parametro2mes10 ,indexLabel: ""+parametro2mes10+"" },
				    { label: "Nov", y: +parametro2mes11 ,indexLabel: ""+parametro2mes11+"" },                                    
				    { label: "Dic", y: +parametro2mes12 ,indexLabel: ""+parametro2mes12+"" }
			    ]
			    }

			    ],
			 /** Set axisY properties here*/
			    axisY:{
			    	prefix: "N°",
			    	//suffix: "K"
			    	labelFontSize: 14,
			    	labelFontColor: "#337ab7",
			    	labelFontWeight: "bold"
			    },

			    axisX:{
   					labelFontSize: 14,
   					labelFontColor: "black"
 				}   
			});

			chart.render();
		}

		function graficaim() {
			var titulo = document.tabla.titulo.value;
			var parametro1 = document.tabla.parametro1.value;
			var parametro2 = document.tabla.parametro2.value;
			var parametro3 = document.tabla.parametro3.value;
			var parametro1mes1 = document.tabla.parametro1mes1.value; var parametro1mes2 = document.tabla.parametro1mes2.value; var parametro1mes3 = document.tabla.parametro1mes3.value; var parametro1mes4 = document.tabla.parametro1mes4.value; var parametro1mes5 = document.tabla.parametro1mes5.value; var parametro1mes6 = document.tabla.parametro1mes6.value; var parametro1mes7 = document.tabla.parametro1mes7.value; var parametro1mes8 = document.tabla.parametro1mes8.value; var parametro1mes9 = document.tabla.parametro1mes9.value; var parametro1mes10 = document.tabla.parametro1mes10.value; var parametro1mes11 = document.tabla.parametro1mes11.value; var parametro1mes12 = document.tabla.parametro1mes12.value; 
			var parametro2mes1 = document.tabla.parametro2mes1.value; var parametro2mes2 = document.tabla.parametro2mes2.value; var parametro2mes3 = document.tabla.parametro2mes3.value; var parametro2mes4 = document.tabla.parametro2mes4.value; var parametro2mes5 = document.tabla.parametro2mes5.value; var parametro2mes6 = document.tabla.parametro2mes6.value; var parametro2mes7 = document.tabla.parametro2mes7.value; var parametro2mes8 = document.tabla.parametro2mes8.value; var parametro2mes9 = document.tabla.parametro2mes9.value; var parametro2mes10 = document.tabla.parametro2mes10.value; var parametro2mes11 = document.tabla.parametro2mes11.value; var parametro2mes12 = document.tabla.parametro2mes12.value;
			var parametro3mes1 = document.tabla.parametro3mes1.value; var parametro3mes2 = document.tabla.parametro3mes2.value; var parametro3mes3 = document.tabla.parametro3mes3.value; var parametro3mes4 = document.tabla.parametro3mes4.value; var parametro3mes5 = document.tabla.parametro3mes5.value; var parametro3mes6 = document.tabla.parametro3mes6.value; var parametro3mes7 = document.tabla.parametro3mes7.value; var parametro3mes8 = document.tabla.parametro3mes8.value; var parametro3mes9 = document.tabla.parametro3mes9.value; var parametro3mes10 = document.tabla.parametro3mes10.value; var parametro3mes11 = document.tabla.parametro3mes11.value; var parametro3mes12 = document.tabla.parametro3mes12.value;
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true, 
			  	animationDuration: 2000,   //change to 1000, 500
			    theme: "theme1",

			    title:{
			    	text: ""+titulo+"",
			    	fontSize: 22           
			    },
	        		

			    exportFileName: ""+titulo+"",  //Give any name accordingly
				exportEnabled: true,

			    data: [  //array of dataSeries     
			    { //dataSeries - first quarter
			 /*** Change type "column" to "bar", "area", "line" or "pie"***/        
			    type: "column",
			    name: ""+parametro1+"",
			    indexLabelFontSize: 14,
			    indexLabelFontColor: "#008080",
			    indexLabelFontWeight: "bold",
			    showInLegend: true,
			    dataPoints: [
				    { label: "Ene", y: +parametro1mes1 ,indexLabel: ""+parametro1mes1+""},
				    { label: "Feb", y: +parametro1mes2 ,indexLabel: ""+parametro1mes2+""},
				    { label: "Mar", y: +parametro1mes3 ,indexLabel: ""+parametro1mes3+""},                                    
				    { label: "Abr", y: +parametro1mes4 ,indexLabel: ""+parametro1mes4+""},
				    { label: "May", y: +parametro1mes5 ,indexLabel: ""+parametro1mes5+""},
				    { label: "Jun", y: +parametro1mes6 ,indexLabel: ""+parametro1mes6+""},
				    { label: "Jul", y: +parametro1mes7 ,indexLabel: ""+parametro1mes7+""},                                    
				    { label: "Ago", y: +parametro1mes8 ,indexLabel: ""+parametro1mes8+""},
				    { label: "Sep", y: +parametro1mes9 ,indexLabel: ""+parametro1mes9+""},
				    { label: "Oct", y: +parametro1mes10 ,indexLabel: ""+parametro1mes10+""},
				    { label: "Nov", y: +parametro1mes11 ,indexLabel: ""+parametro1mes11+""},                                    
				    { label: "Dic", y: +parametro1mes12 ,indexLabel: ""+parametro1mes12+""}
			    ]
			    },

			    { //dataSeries - second quarter

			    type: "column",
			    name: ""+parametro2+"",
			    indexLabelFontSize: 14,
			    indexLabelFontColor: "#EC5657",
			    indexLabelFontWeight: "bold", 
			    showInLegend: true,               
			    dataPoints: [
				    { label: "Ene", y: +parametro2mes1 ,indexLabel: ""+parametro2mes1+"" },
				    { label: "Feb", y: +parametro2mes2 ,indexLabel: ""+parametro2mes2+"" },
				    { label: "Mar", y: +parametro2mes3 ,indexLabel: ""+parametro2mes3+"" },                                    
				    { label: "Abr", y: +parametro2mes4 ,indexLabel: ""+parametro2mes4+"" },
				    { label: "May", y: +parametro2mes5 ,indexLabel: ""+parametro2mes5+"" },
				    { label: "Jun", y: +parametro2mes6 ,indexLabel: ""+parametro2mes6+"" },
				    { label: "Jul", y: +parametro2mes7 ,indexLabel: ""+parametro2mes7+"" },                                    
				    { label: "Ago", y: +parametro2mes8 ,indexLabel: ""+parametro2mes8+"" },
				    { label: "Sep", y: +parametro2mes9 ,indexLabel: ""+parametro2mes9+"" },
				    { label: "Oct", y: +parametro2mes10 ,indexLabel: ""+parametro2mes10+"" },
				    { label: "Nov", y: +parametro2mes11 ,indexLabel: ""+parametro2mes11+"" },                                    
				    { label: "Dic", y: +parametro2mes12 ,indexLabel: ""+parametro2mes12+"" }
			    ]
			    },

			    { //dataSeries - second quarter

			    type: "spline",
			    color: "#380B61",
			    name: ""+parametro3+"",
			    indexLabelFontSize: 14,
			    indexLabelFontColor: "black",
			    indexLabelFontWeight: "bold",
			    showInLegend: true,               
			    dataPoints: [
				    { label: "Ene", y: +parametro3mes1 ,indexLabel: ""+parametro3mes1+"" },
				    { label: "Feb", y: +parametro3mes2 ,indexLabel: ""+parametro3mes2+"" },
				    { label: "Mar", y: +parametro3mes3 ,indexLabel: ""+parametro3mes3+"" },                                    
				    { label: "Abr", y: +parametro3mes4 ,indexLabel: ""+parametro3mes4+"" },
				    { label: "May", y: +parametro3mes5 ,indexLabel: ""+parametro3mes5+"" },
				    { label: "Jun", y: +parametro3mes6 ,indexLabel: ""+parametro3mes6+"" },
				    { label: "Jul", y: +parametro3mes7 ,indexLabel: ""+parametro3mes7+"" },                                    
				    { label: "Ago", y: +parametro3mes8 ,indexLabel: ""+parametro3mes8+"" },
				    { label: "Sep", y: +parametro3mes9 ,indexLabel: ""+parametro3mes9+"" },
				    { label: "Oct", y: +parametro3mes10 ,indexLabel: ""+parametro3mes10+"" },
				    { label: "Nov", y: +parametro3mes11 ,indexLabel: ""+parametro3mes11+"" },                                    
				    { label: "Dic", y: +parametro3mes12 ,indexLabel: ""+parametro3mes12+"" }
			    ]
			    }

			    ],
			 /** Set axisY properties here*/
			    axisY:{
			    	prefix: "N°",
			    	//suffix: "K"
			    	labelFontSize: 14,
			    	labelFontColor: "#337ab7",
			    	labelFontWeight: "bold"
			    },

			    axisX:{
   					labelFontSize: 14,
   					labelFontColor: "black"
 				}   
			});

			chart.render();
		}
	</script>
</head>
<body>
	<h3 class="text-center">Insumo de Datos Informe de Gestión</h3>
	<br /><br />
	<center>	
	<div class="btn-group">
		<a href="?mod=insumo"><button type="button" class="btn btn-primary active">Generar Reporte de Insumo</button></a>
  		<a href="?mod=insumo-ing-otrs"><button type="button" class="btn btn-primary">Ingresar Reportes OTRS</button></a>
	</div>
	</center>
	<br /><br />
	<div class="container">
		<form name="formulario">
			<section style="float:left">
				<label><h5 style="color:#000000"><strong>Seleccione el Tipo de Reporte a Generar:</strong></h4></label>
				<label style="margin-top:0px;" class="radio-inline">
					<input type="radio" value="report_general.php" name="tip_rep" onclick="asignarvalor(this.value)" checked>Sala de Servidores
				</label>
				<label class="radio-inline">
					<input type="radio" value="im.php" name="tip_rep" onclick="asignarvalor(this.value)">IM
				</label>
				<label class="radio-inline">
					<input type="radio" value="i1.php" name="tip_rep" onclick="asignarvalor(this.value)">I1
				</label>
				<label class="radio-inline">
					<input type="radio" value="i2.php" name="tip_rep" onclick="asignarvalor(this.value)">I2
				</label>
				<label class="radio-inline">
					<input type="radio" value="eficiencia.php" name="tip_rep" onclick="asignarvalor(this.value)">Efectividad
				</label>
				<label class="radio-inline">
					<input type="radio" value="mttr_servicio.php" name="tip_rep" onclick="asignarvalor(this.value)">MTTR Servicios
				</label>
				<label class="radio-inline">
					<input type="radio" value="mttr_sistema.php" name="tip_rep" onclick="asignarvalor(this.value)">MTTR Sistemas
				</label>
			</section>
			<br /><br /><br />
			<select class="form-control" name="seleccionar">
				<?php for ($x = date("Y") - 5; $x <= date("Y"); $x++) { ?>
					<option value="<?php echo $x; ?>" selected><?php echo $x; ?></option>
				<?php }  ?>
			</select>
			<span class="help-block text-left">Seleccione el año a generar</span>
		</form>
		<br />
		<button class="btn btn-default" type="button" onclick="loadreport(formulario.seleccionar.value)">Generar</button>
		<br />
		<div id="contenedor"></div>
	</div>
</body>
</html>
