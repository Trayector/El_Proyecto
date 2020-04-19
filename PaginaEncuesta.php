<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Encuesta</title>
<style type="text/css" media="all">
#opciones {
  width: 320px; height: 330px;
   position: absolute ; left: 600px; top: 25px;
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




</style>
</head>
<body>
<body background="Fondo3.jpg">
<div align="left" id="opciones">
<form name="formulario" action="" method="POST">
<?php
	session_start();
	$matricula = $_SESSION['matri'];
	$servername = "localhost";
	$database = "encuestas";
	$username = "root";
	$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
    die("Error: " . mysqli_connect_error());
	}
$sql = "SELECT * FROM nuevoingreso";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($result==false){
	echo "Error";
	}else{
		$op=0;
while($fila = mysqli_fetch_row($result)){ 
	echo "$fila[0]<br>";
	$variable = "v".$op;
	echo "<input type='radio' id='R1' name='$variable' value='R1'><label for='R1'>$fila[1]</label><br>";
	echo "<input type='radio' id='R2' name='$variable' value='R2'><label for='R2'>$fila[2]</label><br>";
	echo "<input type='radio' id='R3' name='$variable' value='R3'><label for='R3'>$fila[3]</label><br>";
	echo "<input type='radio' id='R4' name='$variable' value='R4'><label for='R4'>$fila[4]</label><br>";
	echo "<input type='radio' id='R5' name='$variable' value='R5'><label for='R5'>$fila[5]</label><br><br>";
	$op++;
}
	}
	echo "<input type='submit' class='myButton' name='btnsubir' value='Subir'><br>"; 
	if(isset($_POST['btnsubir'])){
		$sql2 = "SELECT * FROM nuevoingreso";
		$result2 = mysqli_query($conn,$sql2);
		$count2 = mysqli_num_rows($result2);
		$op2=0;
			while($fila2 = mysqli_fetch_row($result2)){ 
			$variable2 = "v".$op2;
			$var3 = ($_POST["$variable2"]);
			$sql3="INSERT INTO respuestas (Matricula,Pregunta,R1,R2,R3,R4,R5,RR) VALUES ('$matricula','$fila2[0]','$fila2[1]','$fila2[2]','$fila2[3]','$fila2[4]','$fila2[5]','$var3')";
			$result3 = mysqli_query($conn,$sql3);
			if($result3==false){
			echo "Error";
			exit;
			}else{
			echo "exito al guardar!";
			$op2++;
		}
		}
		}
?>
</form>
</div>
</body>
</html>