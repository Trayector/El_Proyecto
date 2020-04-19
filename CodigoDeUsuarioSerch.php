<style type="text/css" media="all">
table {
    width:300px;
    font:normal 13px Arial;
    text-align:center;
    border-collapse:collapse;
}
table th {
    font:bold 15px Arial;
    background-color:lightblue;
}
.fila {
    background-color:lightgray;
}
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
  width: 320px; height: 240px; background-color: gray;
   position: absolute ; left: 500px; top: 95px;
  border: 5px solid #000;
 }
 #contenido {
  background-color: #999;
  float: left;
  width: 50%;
 }
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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
<h1>Modifique usuario o contraseña</h1>
<div id="opciones"><br>
<?php
	$Serch=$_GET["c_serch"];
	$db_host="localhost";
	$db_nombre="login";
	$db_usuario="root";
	$db_pass="";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
	
	if(mysqli_connect_errno()){
	echo "fallo al conectar";
	exit();
	}
	$consulta="select * from usuarios where Usuario = '$Serch'";
	$resultados=mysqli_query($conexion,$consulta);
	if($resultados==false){
	echo "Error";
	}else{
		while ($arr=mysqli_fetch_row($resultados)){
	 echo "<form action='ActualizarUsuario.php' method='get'>";
		echo "<input type='text' name='c_nombreact' value='$arr[1]'><br>";
		echo "<input type='text' name='c_useract' value='$arr[2]'><br>";
		echo "<input type='text' name='c_passact' value='$arr[3]'><br>";
		echo "<input type='submit' class='myButton' name='btnact' value='Actualizar'><br><br>";
		echo "<input type='submit' class='myButton' name='btnborrarusuario' value='Borrar'>";
		
           echo"</tr>";
       echo "</table>";
	}
	}
	mysqli_close($conexion);
?>

<?php
if(isset($_POST['btnborrarusuario'])){
  echo "pulsado";
}
?>
</div>
</div>