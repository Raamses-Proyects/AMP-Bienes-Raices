<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Casas en venta frente al bosque</h1>

        <div class="w-80">
            <picture>
                <source srcset="src/img/destacada2.webp" type="image/webp">
                <source srcset="src/img/destacada2.jpg" type="image/jpeg">
                <img class="anuncio-interna__img" src="src/img/destacada2.jpg" loading="lazy" alt="imagen de propiedad">
            </picture>

            <div class="anuncio-interna__contenido">
                <p class="blog__texto">Escrito el: <span class="blog__span">2023/08/17</span> por Admin</p>
                <p class="nosotros-interna__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur expedita, suscipit corrupti dolore velit molestias consequuntur architecto soluta animi sit fugiat placeat quas doloremque eveniet itaque beatae dolorem deserunt modi.</p>
                <p class="nosotros-interna__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quidem quasi eos tempora, nulla alias expedita, fugiat nesciunt iure odit voluptate fugit, iste assumenda sint blanditiis dolore similique voluptatibus autem?</p>
            </div>
        </div>
    </main>


<?php
    incluirTemplate('footer');
?>