<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="nosotros contenedor">
        <h1 class="nosotros__heading text-center mt-5">Contacto</h1>

        <picture>
            <source srcset="src/img/destacada3.webp" type="image/webp">
            <source srcset="src/img/destacada3.jpg" type="image/jpeg">
            <img class="formulario__img" src="src/img/destacada3.jpg" loading="lazy" alt="imagen de contacto">
        </picture>

        <div class="formulario-contenedor">
            <h2 class="formulario__heading text-center">Llene el Formulario de Contacto</h2>
            <form class="formulario" method="POST">
                <fieldset>
                    <legend class="formulario__legend">Información Personal</legend>
    
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="nombre">Nombre:</label>
                        <input class="formulario__input" type="text" id="nombre" name="nombre" placeholder="Tu nombre" maxlength="35" required>
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="email">E-mail:</label>
                        <input class="formulario__input" type="email" id="email" name="email" placeholder="Tu email" maxlength="50" required>
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="telefono">Teléfono:</label>
                        <input class="formulario__input" type="tel" id="telefono" name="telefono" placeholder="Tu teléfono" maxlength="10" required>
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="mensaje">Mensaje:</label>
                        <textarea class="formulario__input" id="mensaje" name="mensaje" cols="30" rows="10" required></textarea>
                    </div>
                </fieldset>
    
                <fieldset>
                    <legend class="formulario__legend">Información Sobre la Propiedad</legend>
    
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="opciones">Vende o Compra:</label>
                        <select class="formulario__input" id="opciones" name="">
                            <option value="" selected disabled>-- Seleccione --</option>
                            <option value="compra">Compra</option>
                            <option value="vende">Vende</option>
                        </select>
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="presupuesto">Cantidad:</label>
                        <input class="formulario__input" type="number" id="presupuesto" name="presupuesto" placeholder="Ingrese su presupuesto">
                    </div>
                </fieldset>
    
                <fieldset>
                    <legend class="formulario__legend">Como desea ser Contactado</legend>
    
                    <div class="formulario__bloque">
                        <div class="radio">
                            <div class="radio__bloque">
                                <label class="formulario__label" for="contactar-telefono">Teléfono:</label>
                                <input class="formulario__input" type="radio" name="contacto" id="contactar-telefono" value="telefono">
                            </div>
                           <div class="radio__bloque">
                                <label class="formulario__label" for="contactar-email">E-mail:</label>
                                <input class="formulario__input" type="radio" name="contacto" id="contactar-email" value="email">
                           </div>
                        </div>
                    </div>
    
                    <p>Si eligio teléfono, eliga la fecha y la hora</p>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="fecha">Fecha:</label>
                        <input class="formulario__input" type="date" name="fecha" id="fecha">
                    </div>
                    <div class="formulario__bloque">
                        <label class="formulario__label" for="hora">Hora:</label>
                        <input class="formulario__input" type="time" name="hora" id="hora" min="09:00" max="18:00">
                    </div>
                </fieldset>
    
                <input class="formulario__enlace" type="submit" value="Enviar" title="Enviar a BienesRaices">
            </form>
        </div> <!-- .formulario-contenedor -->
    </main>


<?php
    incluirTemplate('footer');
?>