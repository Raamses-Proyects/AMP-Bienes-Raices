<?php
    require 'includes/funciones.php';
    require 'includes/config/conexion.php';
    $db = conectarDB();
    
    // Autenticar al usuario
    $errores = [];
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        
        // Obteniendo y validando los datos
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Validando errores
        if( !$email ) {
            $errores[] = "El email es obligatorio o no es valido";
        }
        if( !$password ) {
            $errores[] = "El password es obligatorio";
        }
 
        // Si no hay errores
        if( empty($errores) ) {

            // Verificamos que el usuario exista
            $query = "SELECT * FROM usuarios WHERE email = '$email';";
            $queryExe = mysqli_query($db, $query);

            // Verificando que la consulta tenga resultados
            if( $queryExe->num_rows ) {

                // Obteniendo los datos
                $usuario = mysqli_fetch_assoc($queryExe);

                // Verificar si el password es correcto 
                $auth = password_verify($password, $usuario['password']);
                if( $auth ) {

                    // Se autentica al usuario
                    session_start(); // siempre tienes que mandar a llamar a esta funcion

                    // Creando variables de sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    // Redirigiendo al usuario al admin
                    header('Location: /admin');

                }
                else {
                    $errores[] = "El password es incorrecto";
                }
            }
            else {
                $errores[] = "El usuario no existe";
            }
        }
    }
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Iniciar Sesión</h1>

        <div class="contenedor-alerta w-80">
            <?php foreach($errores as $error): ?>
                <p class="alerta-texto error"><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="formulario-contenedor w-80"> 
            <form class="formulario" method="POST">
                <fieldset>
                    <legend class="formulario__legend">Ingrese sus credenciales</legend>

                    <div class="formulario__bloque">
                        <label class="formulario__label" for="email">E-mail:</label>
                        <input class="formulario__input" type="email" id="email" name="email" placeholder="Tu email" maxlength="50" required>
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="password">Password:</label>
                        <input class="formulario__input" type="password" id="password" name="password" placeholder="Tu password" maxlength="60" required>
                    </div>
                </fieldset>

                <input class="formulario-login__enlace" type="submit" value="Enviar">
            </form>
        </div>
    </main>


<?php
    incluirTemplate('footer');
?>