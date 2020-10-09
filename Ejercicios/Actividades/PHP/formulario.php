<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <section class="container border border-primary mt-3">
        <h3 class="text-center mt-2">Formulario PHP</h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Ingresa la siguiente información</p>
                <form class="form-horizonta" id="mostrar-info" name="mostrar-info" method="POST" action="backend.php" >
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-2 text-left control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingresa el nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidop"
                                class="col-sm-2 text-left control-label col-form-label">Apellido Paterno</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="apellidop" name="apellidop"
                                    placeholder="Ingresa el Apellido Paterno" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidom"
                                class="col-sm-2 text-left control-label col-form-label">Apellido Materno</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="apellidom" name="apellidom"
                                    placeholder="Ingresa el Apellido Materno" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha"
                                class="col-sm-2 text-left control-label col-form-label">Fecha de Nacimiento</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body text-center">
                        <input type="hidden" name="registro" value="nuevo">
                        <button type="submit" class="btn btn-outline-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="informacion mt-3 text-center">

    </section>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="mostrarInfo.js"></script>
</body>
</html>