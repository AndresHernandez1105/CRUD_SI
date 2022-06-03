<?php 

//Conectar a base de datos
require '../includes/config/database.php';
$db = conectarDB();

if($_GET){
    $ID = $_GET['id'];

    if(!$ID){
        header('Location: ../admin/');
        exit();
    }

    $query = "SELECT * from contactos WHERE id = '$ID'";
    $resultado = mysqli_query($db,$query);

    $row = mysqli_fetch_assoc($resultado);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $empresa = $row['empresa'];
    $cargo = $row['cargo'];
    $correo = $row['correo'];
    $tel = $row['tel'];
    $dir = $row['dir'];
    $img_pasada = $row['img'];
}


$errores = [];
$resultado = FALSE;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($db, $_POST['apellido']);
    $empresa = mysqli_real_escape_string($db, $_POST['empresa']);
    $cargo = mysqli_real_escape_string($db, $_POST['cargo']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $dir = mysqli_real_escape_string($db, $_POST['direccion']);
    $img = $_FILES['img'];
    

    if(!$nombre){
        $errores[]= "Debes agregar un nombre";
    }

    if(!$apellido){
        $errores[]= "El apellido es obligatorio";
    }

    if(!$empresa){
        $errores[]= "No has escrito el nombre de la empresa";
    }

    if(!$cargo){
        $errores[]= "Ups! Debes escribir el cargo del contacto";
    }

    if(!$correo || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $errores[]= "El correo especificado no es válido";
    }

    if(!$tel || strlen($tel)!=10){
        $errores[]= "El número especificado no es correcto";
    }

    if(!$dir){
        $errores[]= "La dirección es obligatoria";
    }

    if($img['size']>(10000*100)){
        $errores[] = "La imágen debe ser menor a 1 MB";
    }

    if(empty($errores)){

        /** Subida de archivos*/
        if(!$img['name']){
            $nombre_img = $img_pasada;
        } else{
            $carpeta_img = '../user/img/';
            $nombre_img = md5(uniqid(rand(),true)) . ".jpg";
            move_uploaded_file($img['tmp_name'],$carpeta_img . $nombre_img);
        }
        
        $query =  "UPDATE contactos SET nombre='$nombre', apellido='$apellido', empresa='$empresa', cargo='$cargo', correo='$correo', dir='$dir',tel=$tel,img='$nombre_img' where id='$ID'";
        $resultado = mysqli_query($db,$query);
        
        $nombre = '';
        $apellido = '';
        $empresa = '';
        $cargo = '';
        $correo = '';
        $tel = '';
        $dir = '';

        if($resultado){
            header('Location: ../admin/');
            exit();
        }
    }
}

require '../includes/funciones.php';
incluirTemplate('header');

?>

        <main class="contenedor seccion">
            <div class="contenido-main">
                <?php incluirTemplate('nav');?> 
                <div class="contactos">
                    <?php foreach($errores as $error): ?>
                    <div class="alerta-error">
                        <?php echo $error; ?>
                    </div>
                    <?php endforeach; ?>
                    <h2>Editar Contacto</h2>
                    <form action="editar.php?id=<?php echo $ID; ?>" class="formulario" method = "POST" enctype="multipart/form-data">
                        <div class="op">
                            <img src="<?php
                            if ($img_pasada==NULL){
                                echo "../build/img/agregar_imagen.png";
                            } else{
                                echo "../user/img/".$img_pasada;
                            }
                            ?>" alt="Agregar imágen">
                        </div>
                        <fieldset>
                            <legend>Foto de contacto</legend>
                            <input type="file" id="img" accept="image/jpg, image/png" name="img">
                        </fieldset>
                        <fieldset>
                            <legend>Información Personal</legend>
                            <label for="nombre"><span><i class="fa-solid fa-user"></i></span></label>
                            <input type="text" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $nombre;?>">
                            <input type="text" placeholder="Apellido" id="apellido" name="apellido" value="<?php echo $apellido;?>">                       
                            <label for="empresa"><span><i class="fa-solid fa-briefcase"></i></span></label>
                            <input type="text" placeholder="Empresa" id="empresa" name="empresa" value="<?php echo $empresa;?>">
                            <input type="text" placeholder="Cargo" id="cargo" name="cargo" value="<?php echo $cargo;?>">    
                        </fieldset>
                        <fieldset>
                            <legend>Datos de contacto</legend>
                            <label for="correo"><span><i class="fa-solid fa-envelope"></i></span></label>
                            <input type="email" placeholder="Correo electrónico" id="correo" name="correo" value="<?php echo $correo;?>">
                            <label for="telefono"><span><i class="fa-solid fa-phone"></i></span></label>
                            <input type="tel" placeholder="Teléfono" id="tel" name="tel" value="<?php echo $tel;?>">   
                            <label for="direccion"><span><i class="fa-solid fa-house-chimney"></i></span></label>
                            <input type="text" placeholder="Dirección" id="direccion" name="direccion" value="<?php echo $dir;?>">
                        </fieldset>
                        <div class="formulario_boton">
                            <button type="submit" class="boton_2"><p>Guardar</p></button>
                        </div>
                    </form>
                </div> <!--Contactos-->     
            </div>
        </main>

<?php incluirTemplate('footer'); ?>