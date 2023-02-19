<?php
    // Para evitar arrancar un sesion que ya esta arrancada
    if( !isset($_SESSION) ) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compa>tible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BienesRaices - Compra o vente tu casa con nosotros, BienesRaices empresa dedicada
    a crear los mejores tratos para todas las partes">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="icon" type="image/svg+xml" href="/src/img/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="<?php echo $inicio ? 'header-contenido' : ''; ?> contenedor">
            <div class="barra">
                <a href="/">
                    <img class="barra__img" src="/src/img/logo.svg" alt="imagen logo">
                </a>
                
                <div class="navegacion-contenedor">
                    <div class="menu-hamburguesa">
                        <h3 class="menu-hamburguesa__heading">Menu</h3>
                        <img class="menu-hamburguesa__img" src="/src/img/barras.svg" alt="imagen menu">
                    </div>
                    
                    <img class="dark-mode-img" src="/src/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a class="navegacion__link" href="nosotros.php">Nosotros</a>
                        <a class="navegacion__link" href="anuncios.php">Anuncios</a>
                        <a class="navegacion__link" href="blog.php">Blog</a>
                        <a class="navegacion__link" href="contacto.php">Contacto</a>
                        <?php if( $auth ): ?>
                            <a class="navegacion__link" href="/admin">Admin</a>
                        <?php endif; ?>

                        <?php if( $auth ): ?>
                            <a class="navegacion__link" href="/cerrar-sesion.php">Cerrar Sesion</a>
                        <?php elseif( !$auth ): ?>
                            <a class="navegacion__link" href="/login.php">Login</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <?php if( $inicio ): ?>
                <h1 class="header__heading">Venta de casas y Departamentos Exclusivos de Lujo</h1>
            <?php endif; ?>
        </div>
    </header>