<?php

$id = $_GET['id'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM empleados WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$empleado = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
    <div class="col-sm-6 offset-3 mt-5">
        <form action="../../includes/_functions_empleado.php" method="POST"  enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres *</label>
                        <input type="text"  id="nombres" name="nombres" value="<?php echo $empleado['nombres']; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos *</label>
                        <input type="text"  id="apellidos" name="apellidos" value="<?php echo $empleado['apellidos']; ?>" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="dpi" class="form-label">DPI *</label>
                        <input type="text"  id="dpi" name="dpi" value="<?php echo $empleado['dpi']; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad *</label>
                        <input type="text"  id="edad" name="edad" value="<?php echo $empleado['edad']; ?>" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="cargo" class="form-label">Cargo *</label>
                        <input type="text"  id="cargo" name="cargo" value="<?php echo $empleado['cargo']; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono *</label>
                        <input type="text"  id="telefono" name="telefono" value="<?php echo $empleado['telefono']; ?>" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="foto" id="foto" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="accion" value="editar_empleado">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

</body>
<?php require '../../includes/_footer.php' ?>
</html>
