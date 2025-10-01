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
                    <h1 class="text-center">Iniciar Sesion</h1>
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
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="contrasena"
                                    placeholder="Password" autocomplete="current-password">
                                <label for="floatingPassword">Contraseña</label>
                                <a href="RecuperarAcceso.php">
                                    <small>Olvidó su contraseña?</small>
                                </a>
                            </div>
                            <button class="form-control-submit-button" id="btnIniciarSesion" name="btnIniciarSesion"
                                type="submit">
                                Iniciar Sesión
                            </button>
                        </form>

                        <p class="mb-4">Aun no tienes una cuenta? Por favor ve a <a class="blue"
                                href="../Inicio/Registro.php">Registrarse</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>