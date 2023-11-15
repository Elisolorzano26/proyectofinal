<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<body>
    <div class="container">
        <div class="col-sm-6 offset-3 mt-5">
            <form action="../../includes/_functions_empleado.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres *</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos *</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="dpi" class="form-label">DPI *</label>
                            <input type="text" id="dpi" name="dpi" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad *</label>
                            <input type="number" id="edad" name="edad" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">


                    <label for="cargo" class="form-label">Cargo *</label>
                    <select name="cargo" id="cargo" class="form-control" required>
                        <option value="" disabled selected>Seleccione un cargo</option>
                        <option value="gerente">Gerente General</option>
                        <option value="recursos">Recursos Humanos</option>
                        <option value="admin">Administrador</option>
                        <option value="albañil">Albañil</option>
                        <option value="ayudante">Ayudante de Albañil</option>
                        <option value="carpintero">Carpintero</option>
                        <option value="herrero">Herrero</option>
                        <option value="piloto">Piloto</option>
                        <option value="programador">Programdor</option>
                    </select>


                    
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono *</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="inventario" class="form-label">Inventario *</label>
                            <input type="text" id="inventario" name="inventario" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto *</label>
                            <input type="file" class="form-control-file" name="foto" id="foto" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="accion" value="insertar_empleado">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
<?php require '../../../includes/_footer.php' ?>

</html>
