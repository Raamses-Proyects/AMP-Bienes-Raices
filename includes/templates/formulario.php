<fieldset>
    <legend class="formulario__legend">Información General</legend>

    <div class="formulario__bloque">
        <label class="formulario__label" for="titulo">Nombre:</label>
        <input class="formulario__input" type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" placeholder="Ingresa el titulo" required maxlength="45">
    </div>
    <div class="formulario__bloque">
        <label class="formulario__label" for="precio">Precio:</label>
        <input class="formulario__input" type="number" id="precio" name="precio" value="<?php echo $precio; ?>" placeholder="Ingresa el titulo">
    </div>
    <div class="formulario__bloque">
        <label class="formulario__label" for="imagen">Imagen:</label>
        <input class="formulario__input" type="file" accept="image/jpeg, image/png" id="imagen" name="imagen">

        <?php if( isset($id) ): ?>
            <img class="imagen-actualizar" src="/imagenes/<?php echo $imagenPropiedad; ?>" alt="imagen actual"> 
        <?php endif; ?> 
    </div>
    <div class="formulario__bloque">
        <label class="formulario__label" for="descripcion">Mensaje:</label>
        <textarea class="formulario__input" id="descripcion" name="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
    </div>
</fieldset>

<fieldset>
    <legend class="formulario__legend">Información de la Propiedad</legend>

    <div class="formulario__bloque">
        <label class="formulario__label" for="habitaciones">Habitaciones:</label>
        <input class="formulario__input" type="number" id="habitaciones" name="habitaciones"  value="<?php echo $habitaciones; ?>" min="1" max="9" placeholder="Numero de  habitaciones">
    </div>
    <div class="formulario__bloque">
        <label class="formulario__label" for="wc">Baños:</label>
        <input class="formulario__input" type="number" id="wc" name="wc"  value="<?php echo $wc; ?>" min="1" max="9" placeholder="Numero de baños">
    </div>
    <div class="formulario__bloque">
        <label class="formulario__label" for="estacionamiento">Estacionamiento:</label>
        <input class="formulario__input" type="number" id="estacionamiento" name="estacionamiento" value="<?php echo $estacionamiento; ?>"  min="1" max="9" placeholder="Numero de estacionamientos">
    </div>
</fieldset>

<fieldset>
    <legend class="formulario__legend">Vendedor</legend>

    <div class="formulario__bloque">
        <label class="formulario__label" for="vendedores_id">Seleccione al vendedor:</label>
        <select class="formulario__input" name="vendedores_id" id="vendedores_id">
            <option value="" selected>-- Selecione --</option>

            <?php while( $vendedor = mysqli_fetch_assoc($result) ): ?>
                <option 
                    <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?>
                    value="<?php echo $vendedor['id']; ?>"
                    >
                    <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                </option>
            <?php endwhile; ?>

        </select>
    </div>
</fieldset>