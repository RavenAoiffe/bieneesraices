<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';

    $inicio = true;
    includeTemplate('header', $inicio = true);
?>
<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">
    <h2>Casas y departamentos en venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg"  type="image/jpg">  
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio1">        
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa de lujo del Lago</h3>
                <p>Casa de lago con excelente vista a un excleten precio</p>
                <p class="precio"> $3,000,000</p>

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
                <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
            </div><!--Contenido-anuncio-->
        </div><!--anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg"  type="image/jpg">  
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio1">        
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa terminados de Lujo</h3>
                <p>Casa de lago con excelente vista a un excleten precio</p>
                <p class="precio"> $3,000,000</p>

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
                <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
            </div><!--Contenido-anuncio-->
        </div><!--anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg"  type="image/jpg">  
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio1">        
            </picture>

            <div class="contenido-anuncio">
                <h3>Casa con alberca</h3>
                <p>Casa de lago con excelente vista a un excleten precio</p>
                <p class="precio"> $3,000,000</p>

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
                <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
            </div><!--Contenido-anuncio-->
        </div><!--anuncio-->
    </div><!--contenedor anuncios-->
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit distinctio ab, obcaecati placeat dolorum mollitia nulla enim? Eligendi, eius.</p>
    <a href="contacto.php" class="boton-amarillo">Contáctanos</a>

</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen-blog">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <image loading="lazy" src="build/img/blog1.jpg" alt="Entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="blog.php">
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
                <a href="blog.php">
                    <h4>Guía para decorar tu jardín</h4>
                    <p>Escrito el: <span>01/03/21</span> por: <span>Admin</span></p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. Quo fugiat quam, sapiente, quis error laudantium omnis  </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, rem eveniet. Nemo voluptatem voluptatibus accusamus dolores ullam ab.
            </blockquote>
            <p>- Ameyalli Yáñez</p>
        </div>
    </section>
</div>

<?php
   includeTemplate('footer');
?>