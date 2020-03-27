<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FF3;
		padding:5px;
		border:#666 5px solid;
	}
</style>
</head>
<body>
<body background="Fondo.jpg">
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Administración</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="21%" height="120" align="center">
    <tr>
      <td>Usuario:</td>
      <td><label for="txtusuario"></label>
      <input type="text" name="usuario" id="usuario"></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><label for="txtclave"></label>
      <input type="password" name="clave" id="usuario"></td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Boton_Entrar" id="Boton_Entrar" value="Entrar"></td>
    </tr>
  </table>
  <br>
  <br>
  <div align='center'><a href="Primera_pagina.php">Acceder como Alumno</a> </div>
  
</form>
<?php
//si pulsa el boton
if(isset ($_POST["Boton_Entrar"])){
		//guardo en la varible lo que este en num1
		$numero1=$_POST["usuario"];
		$numero2=$_POST["clave"];
		//comparo Suma con lo que el usuario selecciono
		UsuarioExiste($numero1,$numero2);
		
	}
	function UsuarioExiste($numero1,$numero2){
	$servername = "localhost";
	$database = "login";
	$username = "root";
	$password = "";
	// Conexion a la base de datos en si misma
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
    die("Error: " . mysqli_connect_error());
	}
	$res = $conn->query("SELECT * FROM usuarios WHERE Usuario = $numero1 and Clave = $numero2");
	$sql = "SELECT * FROM usuarios WHERE Usuario = '$numero1' and Clave = '$numero2'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //<a href="Tercera_Pagina.php"></a>
		 header("location:Tercera_Pagina.php");
      }else {
         echo "Contraseña o usuario incorrectos";
      }
	

mysqli_close($conn);
	}
?>

</body>
</html>