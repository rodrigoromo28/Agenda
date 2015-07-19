<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style>
body{
    padding-top: 40px;
    padding-bottom: 40px;
}
.login{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
#sha{
    max-width: 340px;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48,50,50,0,48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48,50,50,0,48);
    box-shadow:         0px 0px 18px 0px rgba(48,50,50,0,48);
    border-radius: 6%;
}
#avatar{
    width: 96px;
    height: 96px;
    margin: 0px auto 10px;
    display: block;
    border-radius: 50%;
}
</style>

</head>
<body>
    <div class="container well" id="sha">
        <div class="row">
            <div class="col-xs-12">
                <img src="http://ar.selecciones.com/resources/images/default_user_noimage.png" class="img-responsive" id="avatar">
            </div>
        </div>
        <form class="login" action="check.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Nombre Usuario" name="email" required autofocus>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="oass" required>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>

            <div class="checkbox">
                <input type="checkbox" value="1" name="remember">No Cerrar Sesion
                </label>
                <p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a> </p>
            </div>
        </form>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>