<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="empleadoCategoria.php?categoria=<?php echo 'gerente'?>">
Gerente General
</a>
</div>
<div class="col-sm-4">
<a class="catcocina" href="empleadoCategoria.php?categoria=<?php echo 'recursos'?>">
Recursos Humanos
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="empleadoCategoria.php?categoria=<?php echo 'admin'?>">
Administrador
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="empleadoCategoria.php?categoria=<?php echo 'albañil'?>">
Albañil
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="empleadoCategoria.php?categoria=<?php echo 'ayudante'?>">
Ayudante de Albañil
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="empleadoCategoria.php?categoria=<?php echo 'carpintero'?>">
Carpintero
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="empleadoCategoria.php?categoria=<?php echo 'herrero'?>">
Herrero
</a>
</div>
<div class="col-sm-4">
<a class="catdeportes" href="empleadoCategoria.php?categoria=<?php echo 'piloto'?>">
Piloto
</a>
</div>
<div class="col-sm-4">
<a class="catelectronico" href="empleadoCategoria.php?categoria=<?php echo 'programador'?>">
Programador
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>