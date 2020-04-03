<?php
    $db_host="localhost";
	$db_nombre="login";
	$db_usuario="root";
	$db_pass="";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass,$db_nombre);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar";
		exit();
    }
    $tabla_nombre="encuesta";
    $preg="¿Que sos?";//las preguntas y respuestas las introduce el usuario y se guardan aca
    $resp1="B";
    $resp2="Bo";
    $resp3="Bol";
    $resp4="Bolu";
    $resp5="Boludo";

    $consulta1="insert into enq_$tabla_nombre values('$preg','$resp1','$resp2','$resp3','$resp4','$resp5')";
    $consulta2="insert into res_$tabla_nombre values('$preg',0,0,0,0,0)";
    echo $consulta1 . "<br>";
    echo $consulta2 . "<br>";

    if (mysqli_query($conexion,$consulta1) && mysqli_query($conexion,$consulta2)) {
        // Mostramos mensaje si la tabla ha sido creado correctamente!
            echo "Pregunta agregada";
    } else {
        // Mostramos mensaje si hubo algún error en el proceso de creación
            echo "Error al insertar pregunta: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
?>