<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">registro de usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form action="registrar.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">registrar</button>
                        </form>
                    </div>
                    <div class="card-body">
                            <form action="mostrar.php" method="POST">
                                <button type="submit" class="btn btn-secondary btn-block"> mostrar los usuarios registrados</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
