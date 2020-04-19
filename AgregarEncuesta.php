<style type="text/css" media="all">
 #opciones {
  width: 390px; height: 170px; background-color: gray; 
  position: absolute ; left: 500px; top: 95px;
  border: 5px solid #000;
 }
 .select-css {
 display: block;
 font-size: 16px;
 font-family: 'Arial', sans-serif;
 font-weight: 400;
 color: #444;
 line-height: 1.3;
 padding: .4em 1.4em .3em .8em;
 width: 320px;
 max-width: 100%; 
 box-sizing: border-box;
 margin: 0;
 border: 1px solid #aaa;
 box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
 border-radius: .3em;
 -moz-appearance: none;
 -webkit-appearance: none;
 appearance: none;
 background-color: #fff;
 background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
   linear-gradient(to bottom, #ffffff 0%,#f7f7f7 100%);
 background-repeat: no-repeat, repeat;
 background-position: right .7em top 50%, 0 0;
 background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
 display: none;
}
.select-css:hover {
 border-color: #888;
}
.select-css:focus {
 border-color: #aaa;
 box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
 box-shadow: 0 0 0 3px -moz-mac-focusring;
 color: #222; 
 outline: none;
}
.select-css option {
 font-weight:normal;
}


.myButton {
	background-color:#599bb3;
	border-radius:13px;
	border:3px solid #29668f;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:16px;
	padding:3px 45px;
	text-decoration:none;
	text-shadow:0px 0px 0px #3d768a;
}
.myButton:hover {
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}
input[type=text] {
  width: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
 
</style>
<body background="Fondo3.jpg">
<div align="center">
<div id="opciones">
<br>
<?php
	$db_host="localhost";
	$db_nombre="encuestas";
	$db_usuario="root";
	$db_pass="";
	$nombreenc;
	$grado;
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno()){
	echo "fallo al conectar";
	exit();
	}
	echo "<form action='' method='POST'>";
	echo "<input type='text' name='txtname' value=''> Nombre de la Encuensta<br><br><br>";
	//echo "<input type='text' name='txtg' value=''> Grado de la Encuensta<br>";
	echo "<input type='submit' class='myButton' name='btncrear' value='Crear'>";
	echo "</form>";
	if(isset($_POST['btncrear'])){
	//global $nombreenc;
	$GLOBALS['nombreenc'] = ($_POST["txtname"]);
	//$nombreenc = ($_POST["txtname"]);
	  $consulta="CREATE TABLE  $nombreenc (Pregunta varchar(255),R1 varchar(255),R2 varchar(255),R3 varchar(255),R4 varchar(255),R5 varchar(255),Status varchar(255))";
		$resultados=mysqli_query($conexion,$consulta);
		if($resultados==false){
		echo "Error";
		exit;
		}else{
			echo "<script type='text/javascript'>alert('Creacion de la tabla con exito');</script>";
		$resultados=mysqli_query($conexion,$consulta2);
		}
		mysqli_close($conexion);
		}
?>
</div>
</div>