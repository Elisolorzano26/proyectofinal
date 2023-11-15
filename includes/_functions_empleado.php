<?php

require_once ("_db.php");

if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_empleado':
            eliminar_empleado();
        break;

        case 'editar_empleado':
            editar_empleado();
        break;

        case 'insertar_empleado':
            insertar_empleado();
        break;    
    }
}

function insertar_empleado(){

    global $conexion;
    extract($_POST);

    // Variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];

    // Se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    // Se realiza la consulta correspondiente para guardar los datos
    $imagenFinal = mysqli_escape_string($conexion, $binariosImagen);

    $consulta = "INSERT INTO empleados (nombres, apellidos, dpi, edad, cargo, telefono, inventario, imagen)
                 VALUES ('$nombres', '$apellidos', '$dpi', '$edad', '$cargo', '$telefono', '$inventario', '$imagenFinal');";

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");

}

function editar_empleado(){

    global $conexion;
    extract($_POST);

    // Variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];

    // Se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    // Se realiza la consulta correspondiente para guardar los datos
    $imagenFinal = mysqli_escape_string($conexion, $binariosImagen);

    $consulta = "UPDATE empleados SET nombres = '$nombres', apellidos = '$apellidos', dpi = '$dpi', 
                 edad = '$edad', cargo = '$cargo', telefono = '$telefono', inventario = '$inventario', 
                 imagen = '$imagenFinal' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");

}

function eliminar_empleado(){

    global $conexion;
    extract($_POST);

    $consulta = "DELETE FROM empleados WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");

}
?>
