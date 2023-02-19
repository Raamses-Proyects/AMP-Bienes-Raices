<?php
    // Imports
    require 'includes/funciones.php';
    require 'includes/config/conexion.php';


    // Variables GlobaleS
    $db = conectarDB();
   

    // Obteniendo y validando el ID para la consulta
    $id_get = $_GET['id'];
    $id = filter_var($id_get, FILTER_VALIDATE_INT);
    if( !$id ) {
        header('Location: /');
    }


    // Consulta obtener una propiedad especifica
    $query = "SELECT * FROM propiedades WHERE id = {$id}";
    $propiedad = find($db, $query, 'Location: /');


    // Incluyendo el header
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center"><?php echo $propiedad['titulo']; ?></h1>

        <div class="w-80">
            <img class="anuncio-interna__img" src="/imagenes/<?php echo $propiedad['imagen']; ?>" loading="lazy" alt="imagen de propiedad">

            <div class="anuncio-interna__contenido">
                <p class="anuncio-interna__precio">$<?php echo $propiedad['precio']; ?></p>
                <ul class="anuncio__iconos">
                    <li>
                        <img class="anuncio__icono" src="src/img/icono_wc.svg" loading="lazy" alt="icono wc">
                        <p class="anuncio__texto"><?php echo $propiedad['wc']; ?></p>
                    </li>
                    <li>
                        <img class="anuncio__icono" src="src/img/icono_estacionamiento.svg" loading="lazy" alt="icono estacionamiento">
                        <p class="anuncio__texto"><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="anuncio__icono" src="src/img/icono_dormitorio.svg" loading="lazy" alt="icono dormitorio">
                        <p class="anuncio__texto"><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>

                <p class="nosotros-interna__texto"><?php echo $propiedad['descripcion']; ?></p>
            </div>
        </div>
    </main>


<?php
    incluirTemplate('footer');
    mysqli_close($db);
?>