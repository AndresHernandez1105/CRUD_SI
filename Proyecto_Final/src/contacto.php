<?php 

//Conectar a base de datos
require '../includes/config/database.php';
$db = conectarDB();

$nombre = '';
$apellido = '';
$empresa = '';
$cargo = '';
$correo = '';
$tel = '';
$dir = '';

$errores = [];
$resultado = FALSE;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $dir = $_POST['direccion'];

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

    if(empty($errores)){
        $query =  "INSERT INTO contactos (nombre, apellido, empresa, cargo, correo, dir,tel) VALUES ('$nombre','$apellido','$empresa','$cargo','$correo','$dir',$tel);";
        $resultado = mysqli_query($db,$query);
        
        $nombre = '';
        $apellido = '';
        $empresa = '';
        $cargo = '';
        $correo = '';
        $tel = '';
        $dir = '';

        if($resultado){
            header('Location: ../src/');
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
                    <h2>NUEVO CONTACTO</h2>
                    <form action="contacto.php" class="formulario" method = "POST">
                        <div class="op">
                            <img src="../build/img/agregar_imagen.png" alt="Agregar imágen">
                        </div>
                        <fieldset>
                            <legend>Foto de contacto</legend>
                            <input type="file" id="imagen" accept="image/jpg, image/png" name="img">
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