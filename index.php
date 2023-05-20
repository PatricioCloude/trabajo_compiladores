<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="proyecto/css/stilos.css">
</head>
<body>
    
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para entrar en la pagina</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

                    <!-- Formulario de Registro y Login -->
            <div class="contenedor__login-register">
                    <!--Formulario de Login-->
                <form action="" class="formulario__login">

                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="pass" placeholder="Contraseña">
                    <button>Entrar</button>

                </form>
                    <!--Formulario de Registro-->
                <form action="php/registro_usuario_be.php"  method = "POST" class="formulario__register">

                    <h2>Registrarse</h2>
                    <input type="text"      placeholder="Nombre Completo"        name = "nombre_completo">
                    <input type="text"      placeholder="Correo Electronico "    name = "correo">
                    <input type="text"      placeholder="Usuario"                name = "usuario">
                    <input type="password"  placeholder="Contraseña"             name = "contrasena">
                    <button>Registrarse</button>

                </form>

            </div>
        </div>
    </main>

    <script src="proyecto/js/scrip.js"></script>  <!-- vinculando el archivo -->

</body>
</html>