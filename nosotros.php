<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="nosotros contenedor mt-5">
        <h1 class="nosotros__heading text-center">Conoce Sobre Nosotros</h1>

        <section class="nosotros-interna">
            <picture>
                <source srcset="src/img/nosotros.webp" type="image/webp">
                <source srcset="src/img/nosotros.jpg" type="image/jpeg">
                <img class="nosotros-interna__img" src="src/img/nosotros.jpg" loading="lazy" alt="imagen nosotros">
            </picture>

            <div class="nosotros-interna__contenido">
                <blockquote class="nosotros-interna__blockquote">
                    Mas de 25 años de experiencia
                </blockquote>
                <p class="nosotros-interna__texto">Al tener ya tantos años de experiencia en mismo mercado inmobiliario hemos tenido todo tipo de experiencias con los proyectos y con nuestros clientes y te podemos decir con gran orgullo que mas del 98.7% de nuestros tratos con los clientes a sido altamente satisfactorios para todas las partes.</p>
                <p class="nosotros-interna__texto">Y bueno de seguro te estas preguntando que pasa con el otro porcentaje que no se concreto, pues no te preocupes ya que al día de hoy ya es prácticamente de 0% y nos aseguramos de darte la mejor estimación de tiempo y dinero antes de hacer un trato y nos hacemos responsables por costos extras o de tiempo.</p>
            </div>
        </section>

        <section class="nosotros__contenido mt-5">
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
                <p class="nosotros__texto">No es lo mismo hacer un un cuarto que un baño, no es lo mismo hacer una casa de 20x20 que un edificio de 10 pisos, no es lo mismo construir en un clima seco que en uno húmedo, y para calcular todo eso tenemos a nuestro grupo de ingenieros que nos ayudan a hacer los mejores cálculos para darte la mejor estimación en tiempo y dinero posibles para tu proyecto.</p>
            </div>
        </section>
    </main>


<?php
    incluirTemplate('footer');
?>