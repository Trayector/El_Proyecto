<?php
	$db_host="localhost";
	$db_nombre="login";
	$db_usuario="root";
	$db_pass="";
  	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AgregarPregunta</title>
<style type="text/css" media="all">
 #opciones {
  width: 350px; height: 170px; background-color: gray; 
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

 
</style>
</head>
<body>
<body background="Fondo3.jpg">
  <div align="center"> 
  <h1>Seleccione una encuesta del siguiente menú:</h1>
  <div id="opciones">
  <br>                       
    	<form action='' method='POST'>
    	<select class="select-css" id="mi_select" name="mi_select">
        <option value="0">Seleccione:</option>
        <?php
		global $boxselect;
		//muesta el combobox 
          $query = $conexion -> query ("Show full tables from encuestas");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[Tables_in_encuestas].'">'.$valores[Tables_in_encuestas].'</option>';
          } 
      	echo "</select> </td><br>";
        echo "<input type='submit' class='myButton' name='btnseleccion' value='Seleccionar'>"; 
		//hasta aqui llega el combobox y un boton para eleguir 
		echo"</form>";
		if(isset($_POST["btnseleccion"])){
		echo "<form action='AgregarPregunta2.php' method='GET'>";
		$boxselect = $_POST['mi_select'];
		echo "<input type='hidden' name='variable' value='$boxselect'/><br>";
		echo "<input type='submit' class='myButton' name='btnupquest' value='Siguiente'><br>";
		}
		echo"</form>";
		
	  ?>
      
  </div>
  </div>
</body>
</html>