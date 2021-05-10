<?php
    require '../../includes/funciones.php';
    includeTemplate('header');
?>

    <maiin class="contenedor seccion">
        <h1>Crear</h1>

        <a href="../index.php"  class="boton boton-verde">Volver</a>
    </main>
    <form action="" class="formulario">
        <fieldset>
            <legend>Información general de la propiedad</legend>

            <label for="titulo">titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedades">

            <label for="precio">Propiedad:</label>
            <input type="number" id="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ej. 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Ej. 3" min="1" max="9">

            <label for="estacionamientos">estacionamientos:</label>
            <input type="number" id="estacionamientos" placeholder="Ej. 3" min="1" max="9">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="vendedor">
                <option value="1">Ameyalli</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedades" class="boton boton-verde">
    </form>
<?php
    includeTemplate('footer');
?>