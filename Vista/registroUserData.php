<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/userData.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
    <title>BaulPHP.com : Formulario con pasos Bootstrap usando PHP, Bootstrap y jQuery</title>
</head>

<body>
    
<div class="container" align="center">
        <h1>Registro de usuarios paso a paso</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <form id="regiration_form" novalidate action="action.php" method="post">
            <fieldset>
                <h2>Paso 1: Crear su cuenta</h2>
                <div class="form-group" >
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
            </fieldset>
            <fieldset>
                <h2> Paso 2: Agregar detalles personales</h2>
                <div class="form-group">
                    <label for="fName">Nombres</label>
                    <input type="text" class="form-control" name="data[fName]" id="fName" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="lName">Apellidos</label>
                    <input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Apellidos">
                </div>
                <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
                <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
            </fieldset>
            <fieldset>
                <h2>Paso 3: Información de contacto</h2>
                <div class="form-group">
                    <label for="mob">Numero Celular</label>
                    <input type="text" class="form-control" id="mob" name="data[mob]" placeholder="Numero Celular">
                </div>
                <div class="form-group">
                    <label for="address">Direccion</label>
                    <textarea class="form-control" name="data[address]" placeholder="Direccion"></textarea>
                </div>
                <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
                <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
            </fieldset>
        </form>
    </div>
</body>
script src="../js/infoUser.js"></script>
</html>
