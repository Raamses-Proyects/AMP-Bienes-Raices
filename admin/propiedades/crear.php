<?php
    // Imports
    require '../../includes/config/conexion.php';
    require '../../includes/funciones.php';


    // Variables Globales
    $db = conectarDB();
    $titulo = '';
    $precio = '';
    // $imagen = $_POST['imagen'];
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $creado = '';
    $vendedores_id = '';
    $errores = [];


    // Validando sesion
    $auth = iniciarSesion();
    if( !$auth ) {
        header('Location: /');
    }
    
  
    // Consulta para Obtener/mostrar los vendedores
    $consulta = "SELECT * FROM vendedores";
    $result = mysqli_query($db, $consulta);
 

    // Validando que el usuario ya haya dado en submit  
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

        // Obteniendo y sanitizando los valores
        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $imagen = $_FILES['imagen'];
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $creado = date('Y/m/d');
        $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
      
  
        // Validando errores/campos vacios
        $errores = validarErrores($_POST, $_FILES);
        if( empty($errores)) {

            /* ----- > SUBIR ARCHIVOS < ----- */
            // 1.- Crear una carpeta
            $carpetaImagenes = '../../imagenes/';
            // Validando si la carpeta ya existe
            if( !is_dir($carpetaImagenes) ) {
                // Si no existe se crea la carpeta
                mkdir($carpetaImagenes);
            }
            
            // 2.- Crear nombre unico
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            // 3.- Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


            // Insertando registros
            $query = "INSERT INTO propiedades(titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id)
            VALUES('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id');";
            execute($db, $query, 'Location: /admin?resultado=1');
        }
    }
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Crear</h1>

        <a href="/admin" class="admin-volver__enlace" title="Volver al panel de administración">Volver</a>

        <div class="contenedor-alerta w-100">
            <?php foreach($errores as $error): ?>
                <p class="alerta-texto error"><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="formulario-contenedor w-100">
            <form class="formulario" method="POST" enctype="multipart/form-data">
                <?php 
                    include '../../includes/templates/formulario.php';
                ?>
                <input class="admin-submit__enlace" type="submit" value="Crear Propiedad">
            </form>
        </div>
    </main>

<?php
    incluirTemplate('footer');
    mysqli_close($db);
?>