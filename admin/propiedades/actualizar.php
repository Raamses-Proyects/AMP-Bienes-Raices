<?php
    // Imports
    require '../../includes/config/conexion.php';
    require '../../includes/funciones.php';


    // Variables
    $db = conectarDB();
    $errores = [];


    // Validando sesion
    $auth = iniciarSesion();
    if( !$auth ) {
        header('Location: /');
    }


    // Obteniendo y validando el id para actualizar
    $id_get = $_GET['id'];
    $id = filter_var($id_get, FILTER_VALIDATE_INT);
    if( !$id ) {
        header('Location: /admin');
    }


    // Consulta para obtener la propiedad por id
    $query = "SELECT * FROM propiedades WHERE id = {$id}";
    $propiedad = find($db, $query, 'Location: /admin');


    // Declarado las variables
    $titulo = $propiedad['titulo'] ?? '';
    $precio = $propiedad['precio'] ?? '';
    $imagenPropiedad = $propiedad['imagen'] ?? '';
    $descripcion = $propiedad['descripcion'] ?? '';
    $habitaciones = $propiedad['habitaciones'] ?? '';
    $wc = $propiedad['wc'] ?? '';
    $estacionamiento = $propiedad['estacionamiento'] ?? '';
    $creado = $propiedad['creado'] ?? '';
    $vendedores_id = $propiedad['vendedores_id'] ?? '';
    

    // Obteniendo los vendedores
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
      
  
        // Verificando que el array de errores este vacio
        $errores = validarErrores($_POST, $_FILES, $id);
        if( empty($errores)) {

            /* ----- > SUBIR ARCHIVOS < ----- */
            // 1.- Crear una carpeta
            $carpetaImagenes = '../../imagenes/';
            // Validando si la carpeta ya existe
            if( !is_dir($carpetaImagenes) ) {
                // Si no existe se crea la carpeta
                mkdir($carpetaImagenes);
            }

            // 2.- Eliminar imagen anterior
            $nombreImagen = '';
            if( $imagen['name'] ) { // Validando que el usuario haya ingresado una nueva imagen

                // 1- Eliminar la imagen previa
                unlink( $carpetaImagenes . $propiedad['imagen'] );

                // 2.- Crear nombre unico
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                // 3.- Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            }
            else { // si no se va a actualizar la imagen, no se elimina nada y se mantiene el nombre actual
                $nombreImagen = $propiedad['imagen'];
            }
            
            // Actualizando registro
            $query = "UPDATE propiedades SET titulo = '$titulo', precio = '$precio', imagen = '$nombreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, wc = $wc, estacionamiento = $estacionamiento, vendedores_id = $vendedores_id WHERE id = {$id};";
            execute($db, $query, 'Location: /admin?resultado=2');
        }
    }
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Actualizar Propiedad</h1>

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
                <input class="admin-submit__enlace" type="submit" value="Actualizar Propiedad">
            </form>
        </div>
    </main>

<?php
    incluirTemplate('footer');
    mysqli_close($db);
?>