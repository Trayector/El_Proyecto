<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Encuensta</title>
<style type="text/css" media="all">
#opciones {
  width: 350px; height: 450px; background-color: gray; 
  position: absolute ; left: 500px; top: 95px;
  border: 5px solid #000;
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
</head>
<body background='Fondo3.jpg'>
<div align="center">
<h1>Modifique las prefuntas deseadas</h1>
<div id="opciones">
<form action="" method="POST">
<?php
$servername="localhost";
$database="encuestas";
$username="root";
$password="";
$boxsec=$_GET["variable"];
$boxsec2=$_GET["variable2"];
$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
    die("Error: " . mysqli_connect_error());
	}
$res = $conn->query("SELECT * FROM $boxsec WHERE Pregunta = $boxsec2");
$sql = "SELECT * FROM $boxsec WHERE pregunta = '$boxsec2'";
$result = mysqli_query($conn,$sql);
if($result==false){
	echo "Error";
	}else{

		$op=0;
while($fila = mysqli_fetch_row($result)){
	echo "<input type='text' id='R0' name='op0' value='$fila[0]'><br>";
	//$op++;
	echo "<input type='text' id='R1' name='op1' value='$fila[1]'><br>";
	//$op++;
	echo "<input type='text' id='R2' name='op2' value='$fila[2]'><br>";
	//$op++;
	echo "<input type='text' id='R3' name='op3' value='$fila[3]'><br>";
	//$op++;
	echo "<input type='text' id='R4' name='op4' value='$fila[4]'><br>";
	//$op++;
	echo "<input type='text' id='R5' name='op5' value='$fila[5]'><br>";
	//$op++;
	//echo $op;
	echo "<br>";
}
echo "<input type='submit' class='myButton' name='btnact' value='Actualizar'>";
	}
	if(isset($_POST["btnact"])){
		$R1 = $_POST["op1"];
		$R2 = $_POST["op2"];
		$R3 = $_POST["op3"];
		$R4 = $_POST["op4"];
		$R5 = $_POST["op5"];
	$conn = mysqli_connect($servername, $username, $password, $database);	
	if(mysqli_connect_errno()){
	echo "fallo al conectar";
	exit();
	}
	$consulta="UPDATE $boxsec set R1 = '$R1',R2 = '$R2',R3 = '$R3',R4 = '$R4',R5 = '$R5' WHERE Pregunta = '$boxsec2'";
	$resultados=mysqli_query($conn,$consulta);
	if($resultados==false){
	echo "Error";
	}else{
		echo "Actualizado con exito!";
	}
	mysqli_close($conn);
		}
?>
</div>
</div>
</form>
<body>
</body>
</html>