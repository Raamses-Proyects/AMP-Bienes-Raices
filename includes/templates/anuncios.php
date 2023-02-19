<?php 
// Importando BD
$ruta = 'includes/config/conexion.php';
require $ruta;

// Consulta para obtetener las propiedades
$db = conectarDB();
$query = "SELECT * FROM propiedades LIMIT {$limite}";
$queryExe = mysqli_query($db, $query);
?>

<?php while( $propiedad = mysqli_fetch_assoc($queryExe) ): ?>
    <div class="anuncio">
        <img class="anuncio__img" src="/imagenes/<?php echo $propiedad['imagen']; ?>" loading="lazy" alt="imagen anuncio">

        <div class="anuncio__contenido">
            <h3 class="anuncio__titulo max-lines"><?php echo $propiedad['titulo']; ?></h3>
            <p class="anuncio__descripcion max-lines"><?php echo $propiedad['descripcion']; ?></p>
            <p class="anuncio__precio">$<?php echo $propiedad['precio']; ?></p>

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

            <a class="anuncio__enlace" href="anuncio.php?id=<?php echo $propiedad['id']; ?>" title="Ver propiedad">Ver anuncio</a>
        </div>
    </div>
<?php endwhile; ?>

<?php 
    mysqli_close($db);
?>