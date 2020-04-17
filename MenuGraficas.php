<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Catálogo</title>
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
  width: 320px; height: 330px; background-color: gray;
   position: absolute ; left: 800px; top: 95px;
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
	padding:3px 90px;
	text-decoration:none;
	text-shadow:0px 0px 0px #3d768a;
}
.myButton:hover {
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:2px;
}
input[type=text] {
  width: 800px;
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

<body>
<body background="Fondo3.jpg">

Opciones<br>
<br>
 
  <form action="GraficaUno.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Promedio Bachillerato"></td>
   </form>
   <br>
   <form action="GraficaDos.php" method="get" name="addquest" id="addquest">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaddquest" id="btnaddquest" value="Escolaridad Máxima de los Padres"></td>
   </form>
   <br>
   <form action="GraficaTres.php" method="get" name="modpoll" id="modpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnmodpoll" id="btnmodpoll" value="Ocupación de los padres"></td>
   </form>
   <br>
   <form action="GraficaCuatro.php" method="get" name="delpoll" id="delpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btndelenc" id="btndelenc" value="Escuela de bachillerato proveniente"></td>
   </form>
  
   <br>
  
   <form action="GraficaCinco.php" method="get" name="actdes" id="actdes">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnstate" id="btnstate" value="Años empleados para cursar el bachillerato"></td>
   </form>
   <br>
   <form action="GraficaSeis.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Recursos económicos para actividades académicas"></td>
   </form>
   <br>
     <form action="GraficaSiete.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Medio de Transporte a la Universidad"></td>
   </form>
   <br>
     <form action="GraficaOcho.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Tiempo de Transporte a la Universidad"></td>
   </form>
   <br>
     <form action="GraficaNueve.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Oportunidades al concluir la carrera en comparación con los padres"></td>
   </form>
   <br>
     <form action="GraficaDiez.php" method="get" name="addpoll" id="addpoll">
   <td colspan="2" align="center"><input type="submit" class="myButton" name="btnaaddpoll" id="btnaaddpoll" value="Objetivo al concluir carrera"></td>
   </form>
   <br>

</body>
</html>