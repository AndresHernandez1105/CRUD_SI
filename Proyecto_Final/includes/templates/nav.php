<div class="navegacion">
                    <a href="contacto.php" class="boton"><i class="fas fa-plus fa-lg"></i> <p>Crear Contacto</p></a>
                    <div class="nav">
                        <div class="actualizar">
                            <span><i class="fa-solid fa-address-book"></i></span>                           
                            <p>Contactos: 
                            <?php 
                            $db = conectarDB();
                            $query = "SELECT count(*) from contactos";
                            $resultado = mysqli_query($db,$query);

                            $row = mysqli_fetch_assoc($resultado);
                            $cantidad = $row['count(*)'];

                            echo $cantidad;
                            ?>
                            </p>
                        </div>
                        <div class="actualizar">
                            <a href="../admin/index.php">
                                <span><i class="fa-solid fa-rotate-right"></i></span>
                                <p>Actualizar</p>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="info">
                        <p>Proyecto Sistemas de Información</p>
                        <p>Grupo: 2859(2022-II)</p>
                        <p>Equipo: Andrés Hernández, Carlos Gutiérrez, Jocelyn Villafaña</p>
                    </div>
                </div> <!--Navegación-->