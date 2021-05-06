<?php
    require 'includes/funciones.php';

    $inicio = true;
    includeTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="sobre nosotros">
    </picture>
     <div class="resumen-propiedad">
         <p class="precio">$3,000,000</p>
         <ul class="iconos-cara">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="wc">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p>1</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde numquam repellendus soluta laudantium minima inventore explicabo cum corporis repudiandae ullam sed commodi quaerat impedit at dolor, suscipit ab voluptatum officiis.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde repudiandae enim assumenda obcaecati porro ab facere. Veniam blanditiis, tenetur voluptatem libero dicta a nesciunt, omnis et quisquam ipsa, illum quibusdam.</p>
     </div>  

</main>

<?php
   includeTemplate('footer');
?>