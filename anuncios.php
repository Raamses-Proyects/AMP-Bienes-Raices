<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Casas y departamentos en venta</h1>

        <div class="anuncios-interna">
            <div class="anuncios__grid">
                <?php
                    $limite = 9; 
                    include 'includes/templates/anuncios.php'; 
                ?>
            </div>
        </div>
    </main>


<?php
    incluirTemplate('footer');
?>