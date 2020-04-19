<style type="text/css" media="all">

 body {
  background-color:#ffffff;
  text-align:center;
  margin:0 auto;
 }
 #container {
  margin: 0 auto;
  text-align:left;
  /*width:780px; /* para 800 x 600 */
  width: 100%;
 }
 #opciones {
  width: 170px; height: 100px; background-color: gray; 
  position: absolute ; left: 600px; top: 95px;
  border: 5px solid #000;
 }
 #contenido {
  width: 300px; height: 50px; background-color: gray; 
  position: absolute ; left: 50px; top: 95px;
 }
  #permisos {
  width: 350px; height: 140px; background-color: gray; 
  position: absolute ; left: 800px; top: 95px;
  border: 5px solid #000;
 }
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000;
}
ul2 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: gray;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
div.ex3 {
  background-color: lightblue;
  width: 210px;
  height: 210px;
  overflow: auto;
}
/*Tabla*/
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
  padding: 3px 10px;
  margin: 3px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
#Font {
font-family: Impact, Charcoal, sans-serif;
font-size: 20px;
letter-spacing: 0px;
word-spacing: 1.2px;
color: #000000;
font-weight: 400;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;
}
</style>
<body background="Fondo3.jpg">
<?php
	if(isset($_GET['btnborrarusuario'])){
	$nombreact=$_GET["c_nombreact"];
	$db_host="localhost";
	$db_nombre="login";
	$db_usuario="root";
	$db_pass="";
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	if(mysqli_connect_errno()){
	echo "fallo al conectar";
	exit();
	}
	$consulta="delete from usuarios Where Nombre = '$nombreact'";
	$resultados=mysqli_query($conexion,$consulta);
	if($resultados==false){
	echo "Error";
	}else{
		echo "<script type='text/javascript'>alert('Borrado con exito');</script>";
	}
	mysqli_close($conexion);
	exit;
	}
	$nombreact=$_GET["c_nombreact"];
	$useract=$_GET["c_useract"];
	$passact=$_GET["c_passact"];
	$db_host="localhost";
	$db_nombre="login";
	$db_usuario="root";
	$db_pass="";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	
	if(mysqli_connect_errno()){
	echo "fallo al conectar";
	exit();
	}
	$consulta="update usuarios set Usuario = '$useract', Clave ='$passact' Where Nombre = '$nombreact'";
	$resultados=mysqli_query($conexion,$consulta);
	if($resultados==false){
	echo "Error";
	}else{
		
		echo "<div align='center' id='opciones'>";
		echo "<div align='center' id='Font'><br>";
	echo "Actualizado con exito!";
	echo "</div>";
	echo "</div>";
	}
	mysqli_close($conexion);
	
?>