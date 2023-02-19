<?php
    // Para evitar arrancar un sesion que ya esta arrancada
    if( !isset($_SESSION) ) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>
    <footer class="footer mt-5">
        <div class="contenedor">
            <nav class="navegacion">
                <a href="nosotros.php" class="navegacion__link">Nosotros</a>
                <a href="anuncios.php" class="navegacion__link">Anuncios</a>
                <a href="blog.php" class="navegacion__link">Blog</a>
                <a href="contacto.php" class="navegacion__link">Contacto</a>
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
        <p class="footer__copyright">Todos los Derechos Reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>

    <script src="/js/imagenes.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>