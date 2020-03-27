<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PrimeraPagina</title>
<style>
/*Esto es para el titulo, se centra*/
	h1{
		text-align:center;
	}
	/*Parametros de la tabla*/
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
<!--Uso h1\-->
<h1>Introduzca su matricula</h1>
<!--En proceso de meter todo en form\-->
<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="21%" height="120" align="center">
  <!--Matricula y textarea\-->
    <tr>
      <td>Matricula:</td>
      <td><label for="txtmatricula"></label>
      <input type="text" name="Matricula" id="Matricula"></td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <!--Boton entrar\-->
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Boton_Entrar" id="Boton_Entrar" value="Entrar"></td>
    </tr>
  </table>
  <br>
  <br>
  <!--Enlace a acceder como administrador\-->
  <div align='center'><a href="Segunda_Pagina.php">Acceder como Administrador</a> </div>
  
</form>


</body>
</html>