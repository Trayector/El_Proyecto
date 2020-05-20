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
    
    $tabla_nombre="encuesta";//el nombre lo introducirá el usuario y se guardará en esta variable

    //se le agrega enq_ al nombre de la tabla para saber que es la tabla de las preguntas
    $consulta1="create table enq_$tabla_nombre (Pregunta varchar(255) not null PRIMARY KEY, Resp1 varchar(255), Resp2 varchar(255), Resp3 varchar(255), Resp4 varchar(255), Resp5 varchar(255))";

    $consulta2="create table res_$tabla_nombre (Pregunta  varchar(255) not null, Resp1 int, Resp2 int, Resp3 int, Resp4 int, Resp5 int, foreign key(Pregunta) references enq_$tabla_nombre(Pregunta))";
    
    echo $consulta1 . "<br>";
    echo $consulta2 . "<br>";

    if (mysqli_query($conexion,$consulta1) && mysqli_query($conexion,$consulta2)) {
        // Mostramos mensaje si la tabla ha sido creado correctamente!
            echo "Tablas creadas";
    } else {
            // Mostramos mensaje si hubo algún error en el proceso de creación
            echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
    // Cerramos la conexión
    mysqli_close($conexion);
?>