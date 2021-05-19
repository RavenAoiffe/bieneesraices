<?php

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    includeTemplate('header');
?>

    <maiin class="contenedor seccion">
        <h1>Administrador</h1>
        <a href="propiedades/crear.php"  class="boton boton-verde">Nueva propiedad</a>
        <?php 
        if( intval($resultado) === 1):   ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>
            </main>

<?php
    includeTemplate('footer');
?>