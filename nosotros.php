<?php
    require 'includes/funciones.php';

    $inicio = true;
    includeTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius illum expedita eligendi exercitationem. Nisi sint numquam aperiam iste aliquid eum beatae! Corporis enim laudantium facere dolore. Magni ut itaque voluptas.
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magni, ut asperiores explicabo natus est repellat doloribus, hic eum iusto quibusdam excepturi tempore officia? Dolorum iste quasi sapiente inventore est.</p>
        </div>
    </div>
</main>
<section class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure nemo perferendis aspernatur ut. Atque beatae excepturi eos laudantium eius, molestiae sint officiis perspiciatis recusandae delectus voluptas omnis dolor placeat?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure nemo perferendis aspernatur ut. Atque beatae excepturi eos laudantium eius, molestiae sint officiis perspiciatis recusandae delectus voluptas omnis dolor placeat?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure nemo perferendis aspernatur ut. Atque beatae excepturi eos laudantium eius, molestiae sint officiis perspiciatis recusandae delectus voluptas omnis dolor placeat?</p>
        </div>
    </div>
</section>

<?php
   includeTemplate('footer');
?>