<?php 

if ($_POST['registro']=='nuevo') {

    //Datos obtenidos del formulario
    $nombre =     $_POST['nombre'];
    $apellidop =  $_POST['apellidop'];
    $apellidom =  $_POST['apellidom'];
    $fecha  =     $_POST['fecha'];

    //Establecemos la zona horaria
    setlocale(LC_TIME,"spanish");

    //Verificamos la fecha actual
    $fechaHoy =  date("d-m-Y");

    // A la fecha actual la convertimos en un formato de fecha especial para hacer calculos matematicos
    $fechaActual = date_create($fechaHoy);

    //Formateamos la fecha de nacimiento obtenida del formulario
    $fechaFormateada = date("d-m-Y",strtotime($fecha));

    //Al igual que la fecha actual la convetimos en el formato de fecha especial
    $fechaNacimiento = date_create($fechaFormateada);

    //Verificamos la diferencia que hay entre ambas fechas
    $diferenciaFechas = date_diff($fechaNacimiento,$fechaActual);    
    
    $respuesta = array(
        'nombreCompleto' => $nombre.' '.$apellidop.' '.$apellidom,
        'edadEnAnios'  => $diferenciaFechas->format('%Y'),
        'edadEnDias'  => $diferenciaFechas->format('%a'),
        'mesNacimiento'  => strftime("%B",strtotime($fecha)),
        'anioNacimiento'  => strftime("%Y",strtotime($fecha))

    );

    die(json_encode($respuesta));
    
}

?> 