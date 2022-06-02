<?php 

//Conectar a base de datos
require '../includes/config/database.php';
$db = conectarDB();

//Consultar obtener datos
$consulta = "SELECT * FROM contactos";
$resultado = mysqli_query($db,$consulta);

require '../includes/funciones.php';
incluirTemplate('header');

?>

        <main class="contenedor seccion">
            <div class="contenido-main">
                <?php incluirTemplate('nav');?> 
                <div class="contactos">
                    <h2>CONTACTOS</h2>
                    <table class="tabla">
                        <tr>
                            <td></td>
                            <th scope="row">Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Cargo y Empresa</th>
                            <th>Dirección</th>
                            <th>Opciones</th>
                        </tr>

                        <!-- Tabla de datos -->
                        <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <tr> 
                          <td>
                              <img src="../build/img/muestra_1.png" alt="Foto_Perfil">

                          </td>
                          <th><?php echo $row['nombre']." ".$row['apellido'];?></th>  
                          <td><?php echo $row['tel'];?></td>                      
                          <td><?php echo $row['correo'];?></td>                      
                          <td><?php echo $row['cargo'].", ".$row['empresa'];?></td>
                          <td><?php echo $row['dir'];?></td>
                          <td>
                              <span><i class="fa-solid fa-pen"></i></span>
                              <span><i class="fa-solid fa-trash-can"></i></span>
                           </td>
                        </tr>                                              
                        <?php endwhile; ?>
                    </table>
                </div> <!--Contactos-->     
            </div>
        </main>

<?php 

incluirTemplate('footer');

?>