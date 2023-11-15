<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div id="content">
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <center><h1>Empleados</h1></center>
                    <!-- Puedes cambiar el enlace al archivo para agregar empleados si es necesario -->
                    <a href="empleado_agregar.php"><input class="btn btn-primary" type="button" value="Agregar empleado"></a>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>DPI</th>
                                    <th>Edad</th>
                                    <th>Cargo</th>
                                    <th>Telefono</th>
                                    <!-- Agrega más encabezados según tu estructura de datos -->
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $categoria = $_GET['categoria'];
                                    extract($_POST);
                                    $sql = "SELECT * FROM empleados WHERE cargo = '$categoria'";
                                    $empleados = mysqli_query($conexion, $sql);
                                    if ($empleados->num_rows > 0) {
                                        foreach ($empleados as $key => $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['nombres']; ?></td>
                                                <td><?php echo $row['apellidos']; ?></td>
                                                <td><?php echo $row['dpi']; ?></td>
                                                <td><?php echo $row['edad']; ?></td>
                                                <td><?php echo $row['cargo']; ?></td>
                                                <td><?php echo $row['telefono']; ?></td>
                                                <!-- Agrega más celdas según tu estructura de datos -->
                                                <td>
                                                    <a href="empleado_editar.php?id=<?php echo $row['id'] ?>">
                                                        <div>Editar</div>
                                                    </a>
                                                    <a>|</a>
                                                    <a href="empleado_eliminar.php?id=<?php echo $row['id'] ?>">
                                                        <div>Eliminar</div>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr class="text-center">
                                            <td colspan="8">No existen registros</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Puedes agregar más contenido aquí si es necesario -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php require '../../includes/_footer.php' ?>
</body>
</html>
