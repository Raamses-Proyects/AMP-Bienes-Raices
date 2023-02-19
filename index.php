<?php
    $inicio = true;
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio);
?>

    <main class="nosotros contenedor mt-5">
        <h2 class="nosotros__heading text-center">Más Sobre Nosotros</h2>

        <section class="nosotros__contenido">
            <div class="nosotros__icono">
                <img class="nosotros__img" src="src/img/icono1.svg" loading="lazy" alt="icono seguridad">
                <h3 class="nosotros__titulo text-center">Seguridad</h3>
                <p class="nosotros__texto">Te aseguramos un trato directo, amable y cordial al momento se   ayudarte con las preguntas que puedas tener sobre la casa como el precio, formas de pago, cuestiones legales al momento de adquirir o querer vender tu vivienda, ya sea con nosotros o para otra entidad. Te ayudamos a que tengas todo claro en tiempo y forma para poder llegar al mejor trato.</p>
            </div>
            <div class="nosotros__icono">
                <img class="nosotros__img" src="src/img/icono2.svg" loading="lazy" alt="icono precio">
                <h3 class="nosotros__titulo text-center">Precio</h3>
                <p class="nosotros__texto">Manejamos unos de los mejores y mas altamente competitivos precios que podrás encontrar en el mercado ya que somos especialistas en las construcciones de viviendas ya sean chicas, medianas o gran escala, y para lograr todo esto tenemos un gran equipo de ingenieros altamente calificados para tener la mejor calidad sin llevar los precios a las nubes.
                </p>
            </div>
            <div class="nosotros__icono">
                <img class="nosotros__img" src="src/img/icono3.svg" loading="lazy" alt="icono tiempo">
                <h3 class="nosotros__titulo text-center">A tiempo</h3>
                <p class="nosotros__texto">No es lo mismo hacer un un cuarto que un baño, no es lo mismo hacer una casa de 20x20 que un edificio de 10 pisos, no es lo mismo construir en un clima seco que en uno húmedo, y para calcular todo eso tenemos a nuestro grupo de ingenieros que nos ayudan a hacer los mejores cálculos para darte la mejor estimación en tiempo y dinero posibles para tu proyecto. </p>
            </div>
        </section>
    </main>

    <section class="anuncios contenedor">
        <h2 class="anuncios__heading text-center">Casas y Departamentos en Venta</h2>
        
        <div class="anuncios__grid">
            <?php
                $limite = 3; 
                include 'includes/templates/anuncios.php'; 
            ?>
        </div>

        <div class="alinear-derecha">
            <a class="anuncios__enlace" href="anuncios.php" title="Ir a las demas propiedades">Ver todas</a>          
        </div>
    </section>    


    <section class="contacto-imagen mt-5">
        <h2 class="contacto-imagen__heading">Encuentra la casa de tus sueños</h2>
        <p class="contacto-imagen__descripcion">Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a class="contacto-imagen__enlace" href="contacto.html" title="Ir a formulario de contacto">Contactános</a>
    </section>


    <section class="blog contenedor mt-5">
        <div class="blog__grid">
            <section class="blog__articles">
                <h2 class="text-center">Nuestro Blog</h2>

                <article class="blog__bloque">
                    <picture>
                        <source srcset="src/img/blog1.webp" type="image/webp">
                        <source srcset="src/img/blog1.jpg" type="image/jpeg">
                        <img class="blog__img" src="src/img/blog1.jpg" loading="lazy" alt="imagen blog">
                    </picture>
    
                    <div class="blog__contenido">
                        <a class="blog__link" href="entrada.html" title="Ir al blog">
                            <h3 class="blog__titulo">Terraza en el techo de tu casa</h3>
                            <p class="blog__texto">Escrito el: <span class="blog__span">2023/08/17</span> por Admin</p>
                            <p class="blog__texto max-lines">Consejos para construir una terraza en e techo de tu casa, 
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
                        <a class="blog__link" href="entrada.html" title="Ir al blog">
                            <h3 class="blog__titulo">Guía para la decoración de tu hogar</h3>
                            <p class="blog__texto">Escrito el: <span class="blog__span">2023/09/17</span> por Admin</p>
                            <p class="blog__texto max-lines">Maximiza el espacio de tu hogar con esta guiá, aprende
                                a combinar muebles y colores para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article>
            </section>

            <section class="testimonial">
                <h2 class="testimonial__heading text-center">Testimoniales</h2>

                <div class="testimonial__contenido">
                    <blockquote class="testimonial__blockquote">El personal se comporto de una excelente forma, muy buena atención y la
                        casa que me ofrecieron cumple con todas mis expectativas
                    </blockquote>
                    <p class="testimonial__texto">- Raamses Chávez</p>
                </div>
            </section>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>
