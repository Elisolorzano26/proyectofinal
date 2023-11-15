
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REESA</title>
   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form  action="validar.php" method="POST">
<div id="login" >
<div class="background-overlay"></div>
<div id="register-link" class="text-center">

<div class="container2">
                        <img src="../../images/logo.PNG" alt="Logo de la empresa"> </div>
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                
                <div id="login-column" class="col-md-6">
                
                    <div id="login-box" class="col-md-12">
                   
                    <div id="register-link" class="text-left">
                        <form id="login-form" class="form" action="" method="post">
                        
                            <h3 class="text-center">Iniciar Sesión</h3>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="text" name="correo" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                             <br>
                                <input type="submit"class="btn btn-success btn-md space" value="Iniciar Sesión">
                                <div id="register-link" class="text-center">
                                    <br>
                                    <div class="txtsingup">¿No tienes cuenta? </div>
                                <a href="registros.php"><input type="button"  class="btn btn-primary space" value="Regístrate"></a>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>