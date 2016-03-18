  <script src="http://gestion-atit-guayana.corpoelec.com.ve/mod/insumo/js/canvasjs.min.js"></script>
  <script>
    function grafica() {
      var titulo = document.tabla.titulo.value;
      var parametro1 = document.tabla.parametro1.value;
      var parametro2 = document.tabla.parametro2.value;
      var parametro1mes1 = document.tabla.parametro1mes1.value; var parametro1mes2 = document.tabla.parametro1mes2.value; var parametro1mes3 = document.tabla.parametro1mes3.value; var parametro1mes4 = document.tabla.parametro1mes4.value; var parametro1mes5 = document.tabla.parametro1mes5.value; var parametro1mes6 = document.tabla.parametro1mes6.value; var parametro1mes7 = document.tabla.parametro1mes7.value; var parametro1mes8 = document.tabla.parametro1mes8.value; var parametro1mes9 = document.tabla.parametro1mes9.value; var parametro1mes10 = document.tabla.parametro1mes10.value; var parametro1mes11 = document.tabla.parametro1mes11.value; var parametro1mes12 = document.tabla.parametro1mes12.value; 
      var parametro2mes1 = document.tabla.parametro2mes1.value; var parametro2mes2 = document.tabla.parametro2mes2.value; var parametro2mes3 = document.tabla.parametro2mes3.value; var parametro2mes4 = document.tabla.parametro2mes4.value; var parametro2mes5 = document.tabla.parametro2mes5.value; var parametro2mes6 = document.tabla.parametro2mes6.value; var parametro2mes7 = document.tabla.parametro2mes7.value; var parametro2mes8 = document.tabla.parametro2mes8.value; var parametro2mes9 = document.tabla.parametro2mes9.value; var parametro2mes10 = document.tabla.parametro2mes10.value; var parametro2mes11 = document.tabla.parametro2mes11.value; var parametro2mes12 = document.tabla.parametro2mes12.value; 
      var chart = new CanvasJS.Chart("chartContainer", {

          theme: "theme2",
                
          title:{
            text: ""+titulo+""              
          },

          data: [  //array of dataSeries     
          { //dataSeries - first quarter
     /*** Change type "column" to "bar", "area", "line" or "pie"***/        
           type: "spline",
           name: ""+parametro1+"",
           showInLegend: true,
           dataPoints: [
           { label: "Ene", y: +parametro1mes1 },
           { label: "Feb", y: +parametro1mes2 },
           { label: "Mar", y: +parametro1mes3 },                                    
           { label: "Abr", y: +parametro1mes4 },
           { label: "May", y: +parametro1mes5 },
           { label: "Jun", y: +parametro1mes6 },
           { label: "Jul", y: +parametro1mes7 },                                    
           { label: "Ago", y: +parametro1mes8 },
           { label: "Sep", y: +parametro1mes9 },
           { label: "Oct", y: +parametro1mes10 },
           { label: "Nov", y: +parametro1mes11 },                                    
           { label: "Dic", y: +parametro1mes12 }
           ]
         },

         { //dataSeries - second quarter

          type: "spline",
          name: ""+parametro2+"", 
          showInLegend: true,               
          dataPoints: [
           { label: "Ene", y: +parametro2mes1 },
           { label: "Feb", y: +parametro2mes2 },
           { label: "Mar", y: +parametro2mes3 },                                    
           { label: "Abr", y: +parametro2mes4 },
           { label: "May", y: +parametro2mes5 },
           { label: "Jun", y: +parametro2mes6 },
           { label: "Jul", y: +parametro2mes7 },                                    
           { label: "Ago", y: +parametro2mes8 },
           { label: "Sep", y: +parametro2mes9 },
           { label: "Oct", y: +parametro2mes10 },
           { label: "Nov", y: +parametro2mes11 },                                    
           { label: "Dic", y: +parametro2mes12 }
          ]
        }
        ],
     /** Set axisY properties here*/
        axisY:{
          prefix: "N°"
          //suffix: "K"
        }    
      });

    chart.render();
    }
  </script>