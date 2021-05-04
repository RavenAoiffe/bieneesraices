<?php
include 'includes/templates/header.php'
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro blog</h1>

    <article class="entrada-blog">
        <div class="imagen-blog">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <image loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>01/03/21</span> por: <span>Admin</span></p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugiat quam, sapiente, quis error laudantium omnis</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen-blog">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <image loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guía para decorar tu jardín</h4>
                <p>Escrito el: <span>01/03/21</span> por: <span>Admin</span></p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Quo fugiat quam, sapiente, quis error laudantium omnis  </p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen-blog">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <image loading="lazy" src="build/img/blog3.jpg" alt="Entrada blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>01/03/21</span> por: <span>Admin</span></p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugiat quam, sapiente, quis error laudantium omnis</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen-blog">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <image loading="lazy" src="build/img/blog4.jpg" alt="Entrada blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="blog.php">
                <h4>Guía para decorar tu jardín</h4>
                <p>Escrito el: <span>01/03/21</span> por: <span>Admin</span></p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Quo fugiat quam, sapiente, quis error laudantium omnis  </p>
            </a>
        </div>
    </article>
</main>
<?php
include 'includes/templates/footer.php';
?>