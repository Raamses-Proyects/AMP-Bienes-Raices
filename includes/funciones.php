<?php
require 'app.php';

// ---------- > Funciones < ----------
// Obtener un registro
function find($db, $query, $redireccionar = '') : array {
    // Ejecutando consulta
    $queryExe = mysqli_query($db, $query);
    
    // Validando por resultados
    $num_row = $queryExe->num_rows;
    if( $num_row <= 0 ) {
        header($redireccionar);
    }
    
    // Obteniendo los valores
    $array = mysqli_fetch_assoc($queryExe);
    return $array;
}
// Insertar, Actualizar o Eliminar
function execute($db, $query, $redireccionar) : void {
    $queryExe = mysqli_query($db, $query);
    if( $queryExe ) {
        header($redireccionar);
    }
}



// ---------- > Helpers < ----------
function incluirTemplate( string $nombre, bool $inicio = false ) : void {
    include TEMPLATES_URL . "/{$nombre}.php";
}
function debuguear($variable) : void {
    echo "<pre>";
    echo var_dump($variable);
    echo "</pre>";
    exit;
}
function validarErrores($datos, $archivos, $id = 0) : array {
    // Array de Errores
    $errores = [];

    if( !$datos['titulo'] ) {
        $errores[] = 'Debes añadir un titulo'; // agregando datos al final del array
    }
    if( !$datos['precio'] ) {
        $errores[] = 'El precio es obligatorio';
    }
    if( $id === 0 ) {
        if( !$archivos['imagen']['name'] || $archivos['imagen']['error'] ) { // validar existencia de imagen
            $errores[] = "La imagen es Obligatoria";
        }
    }
    $medida = 1000 * 100;
    if( $archivos['imagen']['size'] > $medida ) { // validar por tamaño - 100kb max
        $errores[] = "La imagen es muy pesada";
    }
    if( strlen($datos['descripcion']) < 50 ) {
        $errores[] = 'La descripción es obligatoria y debe de tener al menos cincuenta caracteres';
    }
    if( !$datos['habitaciones'] ) {
        $errores[] = 'Debes agregar el número de habitaciones';
    }
    if( !$datos['wc'] ) {
        $errores[] = 'Debes agregar el número de baños';
    }
    if( !$datos['estacionamiento'] ) {
        $errores[] = 'Debes el número de lugares de estacionamientos es obligatorio';
    }
    if( !$datos['vendedores_id'] ) {
        $errores[] = 'Elige un vendedor';
    }

    return $errores;
}
function iniciarSesion() : bool {
    // Validando la session
    session_start();
    $auth = $_SESSION['login'];
    if( !$auth ) {
        return false;
    }
    return true;
}