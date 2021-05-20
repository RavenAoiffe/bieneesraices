<?php
    //importar la conexion

    require '../includes/config/database.php';
    $db = conectarDB();

    //query
    $query = "SELECT * FROM propiedades";
    //consultar la BD

    $resultadoConsulta = mysqli_query($db,$query);

    //Muestra mensjae condicional
    $resultado = $_GET['resultado'] ?? null;

    // Incluye un template
    require '../includes/funciones.php';
    includeTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador</h1>  
        <?php 
        if( intval($resultado) === 1):   ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>
        <a href="propiedades/crear.php"  class="boton boton-verde">Nueva propiedad</a>
      
        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!--Consultar resultados -->
                <?php 
                    while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)):
                ?>
                    <tr>
                        <td>
                        <?php
                         echo $propiedad['id'];
                        ?></td>
                        <td><?php
                         echo $propiedad['titulo'];
                        ?></td>
                        <td> <img src="../imagenes\<?php echo $propiedad['imagen'];?>" class="imagen-tabla" alt="imagen"> </td>
                        <td>$ <?php
                         echo $propiedad['precio'];
                        ?></td>
                        <td>
                            <a href="#" class="boton-rojo-block">Eliminar</a>
                            <a href="#" class="boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php
    // cerrar la conexión
    mysqli_close($db);
    includeTemplate('footer');
?>