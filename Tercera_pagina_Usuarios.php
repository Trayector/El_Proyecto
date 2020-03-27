<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Usuarios</title>
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
  position: absolute ; left: 500px; top: 95px;
 }
 #contenido {
  width: 300px; height: 50px; background-color: gray; 
  position: absolute ; left: 50px; top: 95px;
 }
  #permisos {
  width: 170px; height: 100px; background-color: gray; 
  position: absolute ; left: 500px; top: 220px;
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

</style>
</head>
<form action="CodigoDeUsuario.php" method="post" name="Users" id="Users">
<body background="Fondo.jpg">
<ul>
  <li><a class="active" href="Tercera_pagina_Catalogo.php">Catálogo</a></li>
  <li><a href="Tercera_pagina_Usuarios.php">Usuarios</a></li>  
</ul>
<p>&nbsp;</p>

<body>


<br>
<br>
<div id="opciones">
  <div align='center'>Opciones</div>
  <ul>
   <td colspan="2" align="center"><input type="submit" name="Boton_ResgistarU" id="Boton_RegistrarU" value="Registrar"></td><br>
   <td colspan="2" align="center"><input type="submit" name="Boton_ModificarU" id="Boton_ModificarU" value="Modificar"></td>
  </ul>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
<div id="permisos">
  <div align='center'>Permisos</div>
  <br>
  <br>
  </div>
  </form>
  
  
</body>
</html>