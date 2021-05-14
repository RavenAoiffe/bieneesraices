<?php

    require '../../includes/config/database.php';

    $db = conectarDB();

    //Consultar para obtener vendedores

    $consultaVendedores = "SELECT * FROM vendedores";
    $resultadoVendedores = mysqli_query($db,$consultaVendedores);
    //Arreglo con mensaje de errores
    $errores= [];
    //Variables vacías
    $titulo ='';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc ='';
    $estacionamiento ='';
    $vendedorId = '';
    

    //codigo después de enviar el form
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       // echo "<pre>";
        //var_dump($_POST);
        //echo "</pre>";

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion =mysqli_real_escape_string($db,  $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db,  $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db,  $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db,  $_POST['vendedorId']);
        $creado= date('Y/m/d');

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }
         
        if(!$precio){
            $errores[] = "Debes añadir un precio";
        }
         
        if(strlen($descripcion) < 50){
            $errores[] = "La descripción es obligatoria y debe tener más de 50 caracteres.";
        }

        if(!$habitaciones){
            $errores[] = "Las habitaciones son obligatorias";
        }

        if(!$wc){
            $errores[] = "Los wc son obligatorios";
        }
        if(!$estacionamiento){
            $errores[] = "Los estacionamientos son obligatorios";
        }
        if(!$vendedorId){
            $errores[] = "Elige un vendedor";
        }
        
        // exit;

        //Revisar que el arreglo de errores este vacio

        if(empty($errores))
        {
            //Base de datos
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo',
            '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId' ); ";

            //echo $query;

            $resultado = mysqli_query($db,$query);

            if($resultado)
            {
                //echo "Insertado correctamente";
                //Redirreccionar a otra página
                header('Location: /bieneesraices/admin');
            }
        }


    }
    require '../../includes/funciones.php';
    includeTemplate('header');
?>

    <maiin class="contenedor seccion">
        <h1>Crear</h1>
        <a href="../index.php"  class="boton boton-verde">Volver</a>

        <?php
            foreach($errores as $error):  
        ?>
        <div class="alerta error">
        <?php        
                echo $error;
        ?>
        </div>
        <?php 
            endforeach;
        ?>
    </main>
    <form action="crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>Información general de la propiedad</legend>

            <label for="titulo">titulo:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" placeholder="Titulo Propiedades">

            <label for="precio">Propiedad:</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio; ?>" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" name="descripcion" cols="30" rows="10" > <?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones"  value="<?php echo $habitaciones; ?>" placeholder="Ej. 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc"  name="wc" placeholder="Ej. 3" min="1" max="9"  value="<?php echo $wc; ?>" >

            <label for="estacionamiento">estacionamientos:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 3" min="1" max="9"  value="<?php echo $estacionamiento; ?>" >

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedorId" id="vendedorId">
            <option value="">-- Seleccionar </option>
                <?php while($vendedor = mysqli_fetch_assoc($resultadoVendedores)) :               ?>
                    <option  <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>   value="<?php echo $vendedor ['id']; ?>"> <?php echo $vendedor ['nombre'] . " " . $vendedor ['apellido'];  ?>
                    </option>
                <?php endwhile;?>
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedades" class="boton boton-verde">
    </form>
<?php
    includeTemplate('footer');
?>