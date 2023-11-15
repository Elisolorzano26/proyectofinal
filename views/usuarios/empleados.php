<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Empleados</h1></center>
<a href="empleado_agregar.php"><input  class="btn btn-primary" type="button" value="Agregar Nuevo Empleado"></a>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Codigo</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>DPI</th>
<th>Edad</th>
<th>Cargo</th>
<th>Telefono</th>
<th>Inventario</th>
<th>Foto</th>


</tr>

</thead>

<tbody>

<!-- Cambios en la consulta SQL para obtener datos de la tabla "empleados" -->
<?php
$sql = "SELECT * FROM empleados";
$empleados = mysqli_query($conexion, $sql);
if ($empleados->num_rows > 0) {
    foreach ($empleados as $key => $row) {
        ?>
        <!-- Función y estilos para celdas en error -->
        <?php
        if ($row['edad'] <= 18) {
            $color = '#F78E8E';
            $clase = 'problema';
        } else {
            $clase = 'correcto';
        }
        ?>
        <style>
            .problema {
                background-color: <?php echo $color ?>;
                color: #000000;
            }
        </style>
        <!-- Empieza la tabla -->
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['dpi']; ?></td>
            <td <?php echo 'class="' . $clase . '"'; ?>><?php echo $row['edad']; ?></td>
            <td><?php echo $row['cargo']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['inventario']; ?></td>
            <td><img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']); ?>" alt="Foto"></td>
            <td>
                <a href="empleado_editar.php?id=<?php echo $row['id'] ?>">
                    <div>
                        Editar
                    </div>
                </a>
                <a>|</a>
                <a href="empleado_eliminar.php?id=<?php echo $row['id'] ?>">
                    <div>
                        Eliminar
                    </div>
                </a>
            </td>
        </tr>
        <?php
    }
} else {
    ?>
    <tr class="text-center">
        <td colspan="9">No existen registros de empleados</td>
    </tr>
<?php
} ?>

</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html
