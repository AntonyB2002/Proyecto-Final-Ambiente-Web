<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/ShareFlix/Controller/InicioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShareFlix Web</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body>

    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <a class="navbar-brand logo-text">ShareFlix</a>

        </div>
    </nav>

    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Recuperar Contraseña</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">

                        <form id="formAuthentication" action="" method="POST">
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput" name="correo"
                                    placeholder="name@example.com" autocomplete="username">
                                <label for="floatingInput">Correo Electrónico</label>
                            </div>
                            <button class="form-control-submit-button" id="btnIniciarSesion" name="btnIniciarSesion"
                                type="submit">Enviar</button>
                        </form>
                        <div class="text-center">
                            <a class="mb-4" class="blue" href="../Inicio/IniciarSesion.php">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>