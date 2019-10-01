<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<link href="menu.css" rel="stylesheet">

<!--mapa_appa-->
  			  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
				  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" ></script>
					<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

					<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

					<script src="leaflet.rotatedMarker.js"></script>
    
<title>Incofer</title>

<?php 

$usuario = isset($_GET['u']) ?  $_GET['u'] : 0;

?>


<style>
body {
	
	font-family: 'Didact Gothic', sans-serif;
	width: 100%;
	height: 100%;
	overflow: hidden;
	margin: 0;
	padding: 0;
}

#cintillo {
	display: none;
	background: rgba(0,0,0,0.5);
	height: 8%;
	width: 89%;
	color: white;
	position: fixed;
	top: 10px;
  left: 6%;
  z-index: 10;
  border-radius: 8px;
  border: 1px solid #fff;
  box-shadow: 8px 8px 22px dimgrey;
	}

#cintillo img {
	margin-right: 10px;
	margin-left: 10px;
	margin-top: 3px;
	}

#cintillo_interno {
height: 100%;
width: 50%;
float: right;
display: flex;
   justify-content: flex-end;
   align-items: center;
	}

#cinto_logo {
	//width: 100px;
	height: 90%;
	}
	#cinto_corazon, #cinto_menu {
		float: right;
		margin-right: 10px;
		height: 50%;
	} 




/* width */
::-webkit-scrollbar {  width: 6px; }
/* Track */
::-webkit-scrollbar-track {  background:#000; }
 /* Handle */
::-webkit-scrollbar-thumb {
  background: rgba(255,255,255,0.95); 
  border-radius: 10px;
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgba(255,0,0,0.85); 
}

.redes {
		width: 100%;
		height: 100%;
}
.redes div {
	width: 100%;
	
}
.redes img {
	width: 100%;
	
}



#eleccion {
	font-size: 11px;
	color: blue;
	overflow: auto;
	height: 100px;
	
}


#mibody {
	position: fixed;
	top:0;
	left:0;	
	width: 100%;
	height: 100%;
	z-index: 1;
}

h2 {
	font-weight: normal;
	
}


iframe {
	width: 100%;
	height: 94%;
	overflow: hidden;
		
}

.ok {
    cursor: pointer;
    height: 20px;
    color: blue;
}
.ok img{
	width: 50px;
}

#tel1 {
	
 	position: absolute;
	top:10%;
	left:25%;
	width:250px;
	height:500px;
	padding:5px;
    background-image:url('s9.png');	
	background-repeat: no-repeat;
    background-position: center;
	-webkit-filter: drop-shadow(12px 12px 7px rgba(0,0,0,0.5));
}


#principal {
 	position: relative;
	top:0;
	left:0;
	width:100%;
	height:100%;
  background: #ff0;
   background-repeat: no-repeat;
    background-attachment: fixed; 
    background-position: center;
    background-size: cover;
   overflow: hidden;
    z-index: 1;
    color:white;
}

#adm {
	display: none;
 	position: absolute;
	top:30px;
	right:40px;
	width:700px;
	height:80%;
	padding:5px;
    border-radius: 13px;
    border: 1px solid lightgray;
    background: #fff;
   background-image:url('tren_nuevo.png');	
   background-repeat: no-repeat;
    //background-attachment: fixed; 
    background-position: center;
    background-size: cover;
   overflow: hidden;
    z-index: 1;
    color:white;
}

#miframe {
	position: absolute;
	top: 1px;
	width: 100%;
	height: 100%;
}



input  {
	outline: none;
	border: 1px solid lightgray;
	border-radius: 13px;
	padding: 5px;
	margin-left: 3px;
	width: 80%;
	text-align: right;
//	font-size: 120%;
}

#boton {
	width: 80%;
	height: 40px;
	border-radius: 13px;
	outline: none;
	font-size: 100%;
	background: lightgreen;
	display: none;
}

#seccion_noticias {
	position: absolute;
	width: 85%;
  right: 8px;
	bottom: -5px;
	border: 2px solid #fff;
	background: rgba(0,0,0,0.25);
	color: yellow;
	border-radius: 10px;
	padding: 5px;
	display: none;
	transition: height 1s linear;  
	max-height: 150px;
	z-index: 3;
}

#seccion_noticias span{
	background: rgba(0,0,0,0.45);
	color: white;
	font-size: 85%;
	border-radius: 10px;
	padding: 1px;
}

	
#seccion_noticias div{
	width: 90%;
	height: 50px;
	border: 2px solid #fff;
	background: rgba(255,255,255,1);
	color: #fff;
	border-radius: 7px;
	margin: 5px;
	box-shadow: 3px 3px 10px black;
	cursor: pointer;
				background-repeat: no-repeat;
    		background-position: center;
    		background-size: cover; 
    //text-shadow: 0 0 5px #fff, 0 0 10px #fff; 		
}


#logo {
	position: absolute;
	top:38%;
	left:20%;
	width: 60%;
	z-index: 4;
	}

#cr  {
	position: absolute;
	top:1;
	right: -1;
	width: 75px;
	z-index: 2;
	transform: rotateY(180deg);
	}


#modal {
	//background: rgba(255,255,255,0.5);
	background: rgba(0,0,0,0.55);
	width: 100%;
	height: 100%;
	position: absolute;
	top:0;
	left:0;
	transition: all 0.5;
	z-index: 10;
	text-align: center;
	font-size: 150%;
	color: #000;
	display: none;
}
#modal div{
	background: #fff;
	top:25%;
	left: 1%;
	position: absolute;
	border-radius: 13px;
	margin: 10px;
	padding: 10px;
	
	}


#push {
	width: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 89px;
    background: rgba(0,0,0,0.7);
    z-index: 25;
    display: none;
	
}

.reduce {
	animation: peke  1s both ease
}

@keyframes peke {
  0% {
    transform: scale(3);
  }

  100% {
      transform:scale(1);
  }
}

.anima {
	animation: baja  1s both ease;
	
}

@keyframes baja {
  0% {
    transform: translateY(-130px);
  }

  100% {
      transform:translateY(-17px);
  }
}

#push p  {
	font-size: 85%;
}

#push span {
width: 90%;
    float: left;
    height: 25px;
    background: #fff;
    /* border-radius: 7px; */
    margin: 6px;
    font-size: 65%;
    color: black;
    z-index: 15;
    padding: 5px;
    cursor: pointer;
    padding-bottom: 25px;
    text-align: left;
    top: 11%;
    position: absolute;
    
}

#silencio {
	    width: 20px;
    height: 20px;
    position: absolute;
    top: 36px;
    right: 60px;
    z-index: 16;
    cursor: pointer;
    display: none;
}


#icono {
	width: 32px;
    height: 42px;
    position: absolute;
    top: 306px;
    left: 116px;
    z-index: 21;
    cursor: pointer;
}


#base {
	width: 100%;
	height: 100%;
	background: #fff;
	border-radius: 13px;
	overflow: hidden;
	z-index: 1;
}

#anuncio {
	float: left;
	width:45%;	
	color: purple;
	border-radius: 13px;
	border: 1px solid #fdc300;
	padding: 10px;
	box-shadow: 3px 3px 10px black;	
	background: rgba(255,255,255,0.75);
}
#titulo {
	width:75%;	
	color: purple;
	border-radius: 13px;
	border: 1px solid gray;
	text-align: left;
}

#cierre {
	float: right;
	width:45%;	
	color: purple;
	border-radius: 13px;
	border: 1px solid #fdc300;
	padding: 10px;
	cursor: pointer;
	box-shadow: 3px 3px 10px black;
	background: rgba(255,255,255,0.75);
}

button {
	background: #03a9f4;
	color: #fff;
	padding: 5px;
	border: 1px solid blue;
	border-radius: 7px;
}

#cont_avisos {
	//border: 1px solid blue;
	width:100%;
	position: absolute;
	top: 52%;
	left: 2px;
	height: 300px;
	overflow: auto;
}

#mini_titulo {
	font-size: 1em;
}

#mini_foto, #mini_texto {
width: 100%;
}
#mini-anuncio {
		width: 100%;
}

#mini {
	position: absolute;
	width: 100%;
	height: 100%;
	color: black;
	}

#mini  table {
	width: 100%;
	height: 100%;
	}

#cont_avisos table {
	float: left;
	border: 1px solid red;
	border-radius: 10px;
	padding: 5px;
	width: 45%;
	margin: 10px;
	background: rgba(255,255,255,0.75);
	}

#cont_avisos td {
	cursor: pointer;
	}

#capa_menu {
		position: absolute;
	width: 100%;
	//min-height: 500px;;
		text-align: center;
    font-size: 1.5em;
    background: #000;
    color: #fff;
    overflow-x: hidden;
}

#menu_texto {
	font-size: 0.65em;
}


.modal-contenido2 {
  background-color:white;
  //width:85%;
  height:100%;
  overflow: auto;
  top:40;
  //padding: 10px;
  margin: 1% auto;
  position: relative;
  font-family: "Century Gothic", "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; 
  //border-radius: 15px;
  font-size:  0.8em;
}

.modal-contenido{
  background-color:white;
  width:75%;
  height:75%;
  overflow: auto;
  top:40;
  padding: 1px 20px;
  margin: 1% auto;
  position: relative;
  font-family: "Century Gothic", "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; 
  border-radius: 15px;
  font-size: 25px;
}

.modal-contenido input {
  width:25%;
  height:20px;
  font-size: 25px;
  border-radius: 7px;
}

.modal{
  background-color: rgba(0,0,0,.6);
  position: absolute;
  top:0;
  right:0;
  bottom:0;
  left:0;
  opacity:1;
  display: none;
  /*pointer-events:none; */
  transition: all 0.5s;
  z-index: 10000;

}

#myImg {
	display: none;
	
}

#contenido-anuncio {
	text-align: center;
	
}

#detalle-mini {
	position: absolute;
	top:0;
	left: 0;
	display: inline-block;
	color: #000;
	width: 100%;
	height: 100%;
	font-size: 0.5em;
	
}
#detalle-mini img{
	width: 100%;
	
}
.lanoticia {
	  border: 1px solid lightgray;
    padding: 5px;
    box-shadow: 3px 3px 10px black;
    border-radius: 10px;
}
.lanoticia img {
	width: 95%;
}

#bloqueo {
	position: absolute;
	right: 1px;
	top: 100px;
	border: 2px solid #fff;
	background: rgba(255,0,0,0.75);
	border-radius: 10px;
	padding: 5px;
	transition: all 1s;
	display: none;
	animation: aparece-izquierda ease 1s backwards; 
	font-size: 80%;
	width: 70%;
	    z-index: 5;
}

@keyframes aparece-izquierda
{
    from { 
         transform: translateX(+100%); 
         opacity: 0;
            }
    to { 
         transform: translateX(0%); 
         opacity: 1;
            }
}

</style>

<script>

var paradas = Array(); 
var titulos = Array(); 
var textos = Array(); 
var fecha = Array(); 
	
	$(document).ready(function(){ 

carga_mapa();
anima();
	
	
	$("#silencio").click(function(){
		$("#alarma").get(0).pause();		
		$("#silencio").hide();
		apagado = 1;
			})
	
	
				
			$("#menu li").click(function(){
					muestra_capa(this.id);
					})
	

					$("#boton").click(function(){
					
					})
						$("#cierres").click(function(){
	        	$("#nuevo").show();
					})
					
					$(".ok").click(function(){  
	        	$(".modal").hide();
        
					})
					$(".bloc").click(function(){  
	        	   alert('clic');
  					})
					$("#gear").click(function(){  
	        	   $("#adm").toggle();
  					})					
					
					$("#push").click(function(){
	        	$("#principal2").hide();
	        	$("#push").hide();
	        	$("#principal3").show();
        
					})
	})
	
function anima(){
		
		$("#inicial").show();
		$("#fondo").hide();
		$("#icono").hide();
							//desparece el logo inicial
						setTimeout(function() {
			        $("#inicial").fadeOut(1500);
			    },2000);
}
			

	
function pone_push(Txt){
	
			var f=new Date();
			hora =f.getHours()+":"+f.getMinutes()+":"+f.getSeconds(); 

			$("#push span").html("<img  src=img/icono2.png  width=20px>Incofer   |   "+hora+" <br><p>"+Txt+"</p>");
			$("#push").show();
			
			$("#mensaje_push").get(0).play();
			
}

function muestra_anuncios(){

// Si está fondo de íconos muestra push

if($("#fondo").is(":visible") && $("#push").not(":visible")   )  {
	
	$.post('muestra_push.php',{},
					function(responseTxt, statusTxt, xhr){
						if(statusTxt == 'success') {  

					pone_push(responseTxt);
				 }
			});
}


// Si está abierta la app muestra la seccion_noticias
else {
	
	$("#seccion_noticias").html('');
	
$.post('muestra_anuncios.php',{},
					function(responseTxt, statusTxt, xhr){
						if(statusTxt == 'success') {  
							$("#seccion_noticias").html(responseTxt);
								
							 if($("#seccion_noticias").length > 0)			{ 
							 				$("#seccion_noticias").prepend('<span>Noticias y Avisos</span>');
		 					 				$("#seccion_noticias").show();		
		 						} else $("#seccion_noticias").hide();		
						}
							
				 });
	}
}
	
function carga_mapa(){	
$.post('mapa_app.php',{},
					function(responseTxt, statusTxt, xhr){
						if(statusTxt == 'success') {  
							$("#miframe").html(responseTxt);
							$("#cintillo").show();
						}  });
}
	
function muestra_tablas(){
$.post('muestra_tablas.php',{},
					function(responseTxt, statusTxt, xhr){
						if(statusTxt == 'success') {  
							$("#cont_avisos").html(responseTxt);
							muestra_anuncios();
						}  });
}


function borra(t,id){  

			$.post('borra_anuncios.php',{t,id},
			function(responseTxt, statusTxt, xhr){
						if(statusTxt == 'success') {  
							muestra_tablas();
							muestra_anuncios();
						}  });
				
}

function lista_rutas() {	
	
			$.post("filtra_rutas.php",{},
					function(responseTxt, statusTxt, xhr){
							if(statusTxt == "success") {  
								$("#contenido-filtro").html(responseTxt);
							}else alert('error generando listado de paradas');
					});
}

lista_rutas();

function muestra_anuncio(id){

					$.post("muestra_anuncio.php",{id},
					function(responseTxt, statusTxt, xhr){
							if(statusTxt == "success") {  
								$("#contenido-anuncio").html(responseTxt);
								$("#muestra").show();
							}else alert('error generando listado de paradas');
					});
}


function muestra_mini_anuncio(id){

					eltitulo = titulos[id];  
					eltexto = textos[id];
					lafecha = fecha[id];
					lafoto = "fotos/"+id+".jpg";

					$("#mini_titulo").text(eltitulo);
					$("#mini_texto").text(eltexto);
					$("#mini_fecha").text(lafecha);
					$("#mini_foto").attr("src",lafoto);
					
					$("#mini").show();  
}

function cerrar_anuncio(id) {
	
	     $('[data-ident='+id+']').remove();
	     
	     if($(".padre").length == 0)			{ 
							 	$("#seccion_noticias").hide();		
						}
	     
}

function muestra_capa(id){   
					
				if(id == 1)  {
														eltitulo =  "Instituto Costarricense de Ferrocarriles";
									
														eltexto = "<br><b>Misión</b><br>Somos la institución del Estado Costarricense responsable de brindar servicios de transportes ferroviarios modernos, sostenibles y eficientes; integrados en un marco de gestión empresarial que permita la participación del sector privado y que facilite la generación de actividades productivas complementarias.<br><br><b>Visión</b><br>Ser una institución ferroviaria comprometida con el mejoramiento de la calidad de vida de los costarricenses de forma sostenible, garantizando la prestación de los servicios articulados de transporte.";
								}
								else if(id == 2)  {   // noticias
														eltitulo =  "<big>Noticias y Avisos</big><br>";
														eltexto = '';
									
														titulos.forEach(function(item, index ) {
																		detalle = textos[index];
																    eltexto += "<div class=lanoticia><img src='fotos/"+index+".jpg'><br><b>"+item +"</b><br><br>"+detalle+"</div><br>";
																});
																
																//jQuery.each(substr, function(index, item) {
																		    // do something with `item` (or `this` is also `item` if you like)
																	//	});
																
								}
									else if(id == 3)  {   // rutas
														eltitulo =  "Rutas y Horarios";
														eltexto = '<iframe  src="horarios.php" scrolling="auto" frameborder=0></iframe>';
								}
									else if(id == 4)  {   // a qué hora llego
														eltitulo =  "¿A qué hora llegaré?";
														eltexto = '<iframe  src="planificar.php" scrolling="auto" frameborder=0></iframe>';
								}
									else if(id == 5)  {   // buscar parada
														eltitulo =  "";
														eltexto = '<iframe  src="buscar_parada.php" scrolling="auto" frameborder=0></iframe>';
								}
									else if(id == 6)  {   // redes
														eltitulo =  "Contáctenos";
														eltexto = "<div class=redes><div><img src=img/redes.png width=40px></div ><div>Contraloría de servicios:  cservicios@incofer.go.cr</div ><br>Teléfono:  2542-5854<br><br>Sitio web: www.incofer.go.cr</div >";
								}
									else if(id == 7)  {   // parada favorita
														eltitulo =  "";
														eltexto = '<iframe  src="favorita.php" scrolling="auto" frameborder=0></iframe>';
								}
								else {
											eltitulo =  "Opción no disponible";
											eltexto = '';
								}
								

					$("#menu_titulo").html(eltitulo);
					$("#menu_texto").html(eltexto);
					
					$("#capa").show();  
}


function no_hay(id){
	
					var pNombre =  paradas[id];

					eltexto = "La parada <big>"+pNombre+"</big> no tiene servicio de tren en este momento";

					$("#bloqueo").html(eltexto).show();

}

function favorita() {  Android.configuracion('Definición de paradas favoritas');     }
function Android_menu() {  Android.menu('Menú');     }



</script>

		<img id=silencio src=img/silencio.png>
		
		<div id=cintillo>
				<img  src=img/logo3.png id=cinto_logo></img>
				<div id=cintillo_interno>
					<img  src=img/corazon2.png id=cinto_corazon onclick="favorita()" ></img>
					<span  id=cinto_menu onclick="Android_menu()">MENÚ</span>
			</div>		
		</div>
		
				
		<div id=inicial>
				<img id=logo src=img/logo2.png class=reduce></img>
		</div>
		
		<div id=base>
		
		
		<div id=miframe  ></div>
				
		</div>
		<div id=seccion_noticias>
			</div>
			
			
				<div id="mini" class="modal">
				 	<div class="modal-contenido2">
					    <div align="right" class=ok><img src=img/salir2.png></div>
					    
					    		<div id="mini-anuncio" >
					    					<span id="mini_titulo" ></span>
					    					</br></br>
					    					<img id="mini_foto" ></img>
					    					</br></br>
					    					<i>incofer - [redacción - <span id="mini_fecha" ></span>]</i></br>
					    					<div id="mini_texto" ></div>
					    			
					    		</div>
									
					</div>	
				</div>

<!--				<div id="capa" class="modal">
				 	<div class="modal-contenido2">
					    <div align="right" class=ok><img src=img/salir2.png></div>
					    
					    		<div id="capa_menu" >
					    					<span id="menu_titulo" >aqui va el titulo</span>
					    					</br>
					    					<div id="menu_texto" >aqui del detalle</div>
					    			
					    		</div>
									
					</div>	
				</div>-->

<div id=bloqueo></div>

<audio id=mensaje_push src="push.mp3" preload="auto" >