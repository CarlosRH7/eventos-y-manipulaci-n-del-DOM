<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso</title>

    <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  </head>


  <!-- al iniciar la pagina se activa el evento onload que manda a llamar la funcion eventoCero -->
  <body onload="eventoCero();">



<!-- se muestra los estilos del body(todo el cuerpo de la pagina)-->  
    <style type="text/css">
      body{
        background-image: url('img/fondo.png');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-position: center;
        text-align: center;
      }
    </style>

  


<!--   Inicia el primer formulario  -->
	<div class="row">
   <!--  se muestra una etiqueta div con la clase "col-md-4" (es el tamaño se le proporcina) y col-md-offset-4 (es el espacio que se deja ) -->
<!--    igual a este mismo div se le agrega estilos (estilos incrustados) col el atributo style="aqui van mis estilos de diseño"
 -->	<div class="col-md-4 col-md-offset-4" style="margin-top:50px; box-shadow: 2px 2px 5px #999; background-color: white;">         <br>
			<form method="post">
            <h4>Validación de formulario con jquery</h4>
				<div class="form-group">
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required="true">
				</div>

				<div class="form-group">
					<input class="form-control" type="number" name="edad" id="edad" placeholder="Ingresa tu edad" required="true">
				</div>

				<div class="form-group">
					<input class="form-control" type="email" name="correo" id="correo" placeholder="Ingresa tu correo" required="true">
				</div>

				<div class="form-group">
					<input class="form-control" type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required="true">
				</div>
                <!-- aquí agrego un boton con el metodo 'Onclick' que llama a la funcion validarForm (esta funcion es la que valida mi formulario si los inputs tienen o no texto)-->
				<center><a class="btn btn-success" onclick="validarForm();">Guardar</a></center><br>												
			</form>
		</div>
	</div>
<!-- termina el primer formulario  -->





<!-- inicia div de Eventos y manipulación de DOM (javascript y jquery)-->   
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:50px; box-shadow: 2px 2px 5px #999; background-color: white;"><br>
            <form method="post">
            <h4>Eventos y manipulación de DOM</h4>
            <div class="form-group">
<!--en esta parte se activa el evento onclick que al precionar el boton manda a llamar la funcion eventoUno -->
                <a class="btn btn-primary" onclick="eventoUno();" style="width: 100%;">Onclick</a>  
            </div>
            
            <div class="form-group">    
        <!--   en este input al ingrsar texto se activa el evento onkeyup que manda a llamar la funcion enventoDos  -->
                <input type="text" class="form-control" placeholder="Ingresa tu nombre" onkeyup="eventoDos();" id="nom">
                <h1 id="resultNombre"></h1>
            </div> 

            <div class="form-group">
            <!-- en esta etiqueta select al seleccionar un elemento activa el evento onchange que manda a llamar la funcion eventoTres -->
                <select class="form-control" id="selector" onchange="eventoTres();">
                    <option value="Opción Uno">Opción Uno</option>
                    <option value="Opción Dos">Opción Dos</option>
                    <option value="3">Opción Tres</option>
                    <option value="Opción Cuatro">Opción Cuatro</option>

                </select>
             </div> 
            <div class="form-group">
            <!-- esta etiqueta es para agregar una imagen, y al pasar el cursosr sobre la imagen se activa el evento onmousemove que manda a llamar la funcion eventoCuatro -->
                <img src="https://www.frag-mutti.de/images/uploads/de/head/45767/Maus_ins_Freie_transportieren.jpg" style="width: 100%;" onmousemove='eventoCuatro();'>
            </div>
            <div class="form-group">
<!--             este es un link para ver mas tipos de eventos con javascript -->
                <a href="http://librosweb.es/libro/javascript/capitulo_6/modelo_basico_de_eventos_2.html" target="_blank">Modelo básico de eventos</a>
            </div>
            </form>
        </div>
    </div>
<!-- termina div de Eventos y manipulación de DOM (javascript y jquery)-->   




<!-- aqui inicia el tercer div que muestar el mapa -->
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:50px; margin-bottom: 50px; box-shadow: 2px 2px 5px #999; background-color: rgba(255, 255, 255, .5);"><br>
            <form method="post">
            <h4>API de Google Maps</h4>
            <!-- en este div con la id map es donde muetro  el mapa y tiene un estilo de altura de 300px y un ancho de 100%-->
            <div id="map" style="height: 300px; width: 100%;"></div>

			<label>Latitud</label>	
            <input type="number" name="latitud" id="latitud" class="form-control">
            <label>Longitud</label>
            <input type="number" name="longitud" id="longitud" class="form-control">

            </form>
        </div>
    </div>
<!-- aqui termina el tercer div que muestar el mapa -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    



    <script type="text/javascript">

    // inicia funcion para validar el formulario

    	function validarForm(){
    		var nombre = $('#nombre').val();
    		var edad = $('#edad').val();
    		var correo = $('#correo').val();
    		var password = $('#password').val();

    		if($.trim(nombre)==="") {
    			$('#nombre').closest('div').addClass('has-error');
    		}else{
    			$('#nombre').closest('div').removeClass('has-error').addClass('has-success');;
    		}
    		if ($.trim(edad)==="") {
    			$('#edad').closest('div').addClass('has-error');
    		}else{
    			$('#edad').closest('div').removeClass('has-error').addClass('has-success');;
    		}
    		if ($.trim(correo)==="") {
    			$('#correo').closest('div').addClass('has-error');
    		}else{
    			$('#correo').closest('div').removeClass('has-error').addClass('has-success');;
    		}
    		if ($.trim(password)==="") {
    			$('#password').closest('div').addClass('has-error');
    		}else{
    			$('#password').closest('div').removeClass('has-error').addClass('has-success');;
    		}
    	}
    // termina funcion para validar el formulario



// inicia funcion  que arroja una alerta con un mensaje 
        function eventoCero(){

            alert('se activo el evento Onload');

        }
// termina funcion  que arroja una alerta con un mensaje 






// inicia funcion que se activa con el metodo onclick
        function eventoUno(){
            alert('Se activo el evento Onclick');
        }

// termina funcion que se activa con el metodo onclick




// inicia funcion  que se activa con el metodo onkeyup 
        function eventoDos(){
            var nombre = $('#nom').val();
           $('#resultNombre').html('Resultado del evento onkeyup: '+nombre);

        }
// termina funcion  que se activa con el metodo onkeyup 




// inicia funcion que se activa con el metodo onchange
        function eventoTres(){
            alert(  $('#selector').val()   );
        }
// termina funcion que se activa con el metodo onchange



// inicia funcion que se activa con el metodo onmousemove que al pasar el cursor sobre la imagen envia una alerta 
        function eventoCuatro(){
            alert('Se activo el evento Onmousemove');
        }

// termina funcion que se activa con el metodo onmousemove que al pasar el cursor sobre la imagen envia una alerta 


    </script>




    <script type="text/javascript">

    // este script es para mostrar el mapa de google maps 
        $(document).ready( function() {
            // esta es la latitud y la longitud  de la ubicacion que quiero que aparesca en el mapa 
            var latlng = new google.maps.LatLng(20.095844949494055, -98.76589542849081);
            var map = new google.maps.Map(document.getElementById('map'), {
                center: latlng,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: 'Set lat/lon values for this property',
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(a) {
                document.getElementById("latitud").value = this.getPosition().lat();
                document.getElementById("longitud").value = this.getPosition().lng();
            });

            google.maps.event.addListener(marker, 'click', function(a) {
                document.getElementById("latitud").value = event.latLng.lat();
                document.getElementById("longitud").value = event.latLng.lng();
            });


        });
    </script>





  </body>
</html>