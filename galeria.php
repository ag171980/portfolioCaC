<?php include 'componentes/header.php'; ?>
<?php
include './conexion.php';
error_reporting(E_ALL);
if ($_POST) { #si hay envio de datos, los inserto en la base de datos  
    echo "<script>alert('aca entra')</script>";
    $nombre_proyecto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $descripcion_detallada = $_POST['descripcion_detallada'];
    $link_demo = $_POST['link_demo'];
    #nombre de la imagen
    $imagen = $_FILES['archivo']['name'];
    #tenemos que guardar la imagen en una carpeta 
    $imagen_temporal = $_FILES['archivo']['tmp_name'];
    #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp() . "_" . $imagen;
    move_uploaded_file($imagen_temporal, "imagenes/" . $imagen);

    #creo una instancia(objeto) de la clase de conexion
    $conexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id_proyecto`,`nombre`, `imagen`, `descripcion`, `descripcion_detallada`, `link_demo`) VALUES ( NULL, '$nombre_proyecto' , '$imagen', '$descripcion', '$descripcion_detallada', '$link_demo')";
    $id_proyecto = $conexion->ejecutar($sql);
    #para que no intente borrar muchas veces
    header("Location: ./galeria.php");
    die();
}
#si nos envian por url, get 
if ($_GET) {

    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
    if (isset($_GET['borrar'])) {
        $id = $_GET['borrar'];
        $conexion = new conexion();

        #recuperamos la imagen de la base antes de borrar 
        $imagen = $conexion->consultar("SELECT imagen FROM  `proyectos` where id_proyecto=" . $id);
        #la borramos de la carpeta 
        unlink("imagenes/" . $imagen[0]['imagen']);

        #borramos el registro de la base 
        $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id_proyecto` =" . $id;
        $id_proyecto = $conexion->ejecutar($sql);
        #para que no intente borrar muchas veces
        header("Location: ./galeria.php");
        die();
    }

    if (isset($_GET['modificar'])) {
        $id = $_GET['modificar'];
        header("Location:modificar.php?modificar=" . $id);
        die();
    }
}
#vamos a consultar para llenar la tabla 
$conexion = new conexion();
$proyectos = $conexion->consultar("SELECT * FROM `proyectos`");
?>

<br>
<!--ya tenemos un container en el header que cierra en el footer-->

<div class="row d-flex justify-content-center mb-5">
    <div class="col-md-10 col-sm-12">
        <div class="card" style="background-color:#CDB3A6;">
            <div class="card-header">
                Datos del Proyecto
            </div>
            <div class="card-body">
                <!--para recepcionar archivos uso enctype-->
                <form action="galeria.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="nombre">Nombre del Proyecto</label>
                        <input required class="form-control" type="text" name="nombre" id="nombre">
                    </div>

                    <div>
                        <label for="archivo">Imagen del Proyecto</label>
                        <input required class="form-control" type="file" name="archivo" id="archivo">
                    </div>
                    <br>
                    <div>
                        <label for="descripcion">Indique Descripción del Proyecto</label>
                        <textarea required class="form-control" name="descripcion" id="descripcion" cols="30" rows="4"></textarea>
                    </div>
                    <div>
                        <label for="descripcion_detallada">Indique Descripción mas elaborada del Proyecto</label>
                        <textarea required class="form-control" name="descripcion_detallada" id="descripcion_detallada" cols="30" rows="4"></textarea>
                    </div>
                    <div>
                        <label for="link_demo">Indique algun link donde se pueda ver el proyecto en produccion</label>
                        <input required class="form-control" name="link_demo" id="link_demo" />
                    </div>
                    <div>
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </div>

                </form>
            </div>
            <!--cierra el body-->

        </div>
        <!--cierra el card-->

    </div>
    <!--cierra el col-->
</div>
<!--cierra el row-->
<div style="background-color:#CDB3A6;">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col-md-10 col-sm-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php #leemos proyectos 1 por 1
                    foreach ($proyectos as $proyecto) { ?>

                        <tr>
                            <!--<td scope="row"><?php #echo $proyecto['id'];
                                                ?></td> -->
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td> <img width="200" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt=""> </td>
                            <td class="texto"><?php echo $proyecto['descripcion']; ?></td>
                            <td><a name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id_proyecto']; ?>">Eliminar</a></td>
                            <td><a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $proyecto['id_proyecto']; ?>">Modificar</a></td>
                        </tr>

                    <?php #cerramos la llave del foreach
                    } ?>
                </tbody>
            </table>
        </div>
        <!--cierra el col-->
    </div>
</div>

<?php include 'componentes/footer.php'; ?>