<?php

include 'includes/templates/header.php'
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <div class="texto-entrada">
            <p class="informacion-meta">Escrito el: <span> 20/10/2021</span> por: <span>Admin</span></p>
            <picture>
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="sobre nosotros">
            </picture>
            <div class="resumen-propiedad">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde numquam repellendus soluta laudantium
                    minima inventore explicabo cum corporis repudiandae ullam sed commodi quaerat impedit at dolor,
                    suscipit ab voluptatum officiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde repudiandae enim assumenda obcaecati
                    porro ab facere. Veniam blanditiis, tenetur voluptatem libero dicta a nesciunt, omnis et quisquam
                    ipsa, illum quibusdam.</p>
            </div>
        </div>


    </main>

    
<?php
   includeTemplate('footer');
?>