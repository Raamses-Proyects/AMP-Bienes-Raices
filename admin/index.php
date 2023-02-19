<?php
    // Imports
    require '../includes/funciones.php';
    require '../includes/config/conexion.php';
   

    // Globales
    $db = conectarDB();


    // Validando la session
    $auth = iniciarSesion();
    if( !$auth ) {
        header('Location: /');
    }


    // Obteniendo el mensaje de la URL (los msn vienen crear.php y actualizar.php o de este mismo archivo)
    $resultado = $_GET['resultado'] ?? null;


    // Consulta para Obtener/mostrar las propiedades
    $query = "SELECT * FROM propiedades";
    $queryExe = mysqli_query($db, $query);


    // Validando que el usuario ya haya dado en submit  
    if( $_SERVER['REQUEST_METHOD'] === "POST" ) {

        // Obteniendo y validando el ID
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        // Si existe un ID valido
        if( $id ) {
            // Eliminado el archivo/img
            $query = "SELECT imagen FROM propiedades WHERE id = {$id}";
            $propiedad = find($db, $query);
            unlink( '../imagenes/' . $propiedad['imagen'] );

            // Eliminando la propiedad
            $query = "DELETE FROM propiedades WHERE id = {$id} LIMIT 1";
            execute($db, $query, 'Location: /admin?resultado=3');
        }
    }
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Administrador de Bienes Raices</h1>

        <?php if( $resultado === "1" ): ?>
            <p class="alerta-texto exito"><?php echo "Propiedad agregada correctamente"; ?></p>
        <?php elseif( $resultado === "2" ): ?>
            <p class="alerta-texto exito"><?php echo "Propiedad actualizado correctamente"; ?></p>
        <?php elseif( $resultado === "3" ): ?>
            <p class="alerta-texto exito"><?php echo "Propiedad eliminada correctamente"; ?></p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="admin-crear__enlace" title="Crear una nueva propiedad">Nueva propiedad</a>
        
        <table class="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($queryExe) ): ?>
                    <tr class="tabla-tr-datos">
                        <td><?php echo $propiedad['id']; ?></td>
                        <td><?php echo $propiedad['titulo']; ?></td>
                        <td> <img class="tabla-img" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen propiedad"> </td>
                        <td>$<?php echo $propiedad['precio']; ?></td>
                        <td class="tabla-align">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                                <input class="tabla-eliminar__enlace" type="submit" value="Eliminar">
                            </form>
                            <a class="tabla-actualizar__enlace" href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php
    incluirTemplate('footer');
    mysqli_close($db); // Cerrando la conexion
?>