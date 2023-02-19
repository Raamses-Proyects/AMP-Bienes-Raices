<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="nosotros contenedor mt-5">
        <section class="blog__articles blog-interna w-80">
            <h1 class="text-center">Nuestro Blog</h1>

            <article class="blog__bloque">
                <picture>
                    <source srcset="src/img/blog1.webp" type="image/webp">
                    <source srcset="src/img/blog1.jpg" type="image/jpeg">
                    <img class="blog__img" src="src/img/blog1.jpg" loading="lazy" alt="imagen blog">
                </picture>

                <div class="blog__contenido">
                    <a class="blog__link" href="entrada.php" title="Ir al blog">
                        <h3 class="blog__titulo">Terraza en el techo de tu casa</h3>
                        <p class="blog__texto">Escrito el: <span class="blog__span">2023/08/17</span> por Admin</p>
                        <p class="blog__texto max-lines">Consejos para construir una terraza en el techo de tu casa, 
                            con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article>

            <article class="blog__bloque">
                <picture>
                    <source srcset="src/img/blog2.webp" type="image/webp">
                    <source srcset="src/img/blog2.jpg" type="image/jpeg">
                    <img class="blog__img" src="src/img/blog2.jpg" loading="lazy" alt="imagen blog">
                </picture>

                <div class="blog__contenido">
                    <a class="blog__link" href="entrada.php" title="Ir al blog">
                        <h3 class="blog__titulo">Guia para la decoracion de tu hogar</h3>
                        <p class="blog__texto">Escrito el: <span class="blog__span">2023/09/17</span> por Admin</p>
                        <p class="blog__texto max-lines">Maximiza el espacio de tu hogar con esta guia, aprende
                            a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>

            <article class="blog__bloque">
                <picture>
                    <source srcset="src/img/blog3.webp" type="image/webp">
                    <source srcset="src/img/blog3.jpg" type="image/jpeg">
                    <img class="blog__img" src="src/img/blog3.jpg" loading="lazy" alt="imagen blog">
                </picture>

                <div class="blog__contenido">
                    <a class="blog__link" href="entrada.php" title="Ir al blog">
                        <h3 class="blog__titulo">Guia para la decoracion de tu hogar</h3>
                        <p class="blog__texto">Escrito el: <span class="blog__span">2023/09/17</span> por Admin</p>
                        <p class="blog__texto max-lines">Maximiza el espacio de tu hogar con esta guia, aprende
                            a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>

            <article class="blog__bloque">
                <picture>
                    <source srcset="src/img/blog4.webp" type="image/webp">
                    <source srcset="src/img/blog4.jpg" type="image/jpeg">
                    <img class="blog__img" src="src/img/blog4.jpg" loading="lazy" alt="imagen blog">
                </picture>

                <div class="blog__contenido">
                    <a class="blog__link" href="entrada.php" title="Ir al blog">
                        <h3 class="blog__titulo">Guia para la decoracion de tu hogar</h3>
                        <p class="blog__texto">Escrito el: <span class="blog__span">2023/09/17</span> por Admin</p>
                        <p class="blog__texto max-lines">Maximiza el espacio de tu hogar con esta guia, aprende
                            a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>
    </main>


<?php
    incluirTemplate('footer');
?>