<?php include '../includes/templates/header.php'; ?>

        <main class="contenedor seccion">
            <div class="contenido-main">
                <div class="navegacion">
                    <a class="boton"><i class="fas fa-plus fa-lg"></i> <p>Crear Contacto</p></a>
                    <div class="nav">
                        <div class="actualizar">
                            <span><i class="fa-solid fa-address-book"></i></span>                           
                            <p>Contactos: 2</p>
                        </div>
                        <div class="actualizar">
                            <span><i class="fa-solid fa-rotate-right"></i></span>
                            <p>Actualizar</p>
                        </div>
                    </div>
                    <hr>
                    <div class="info">
                        <p>Proyecto Sistemas de Información</p>
                        <p>Grupo: 2859(2022-II)</p>
                        <p>Equipo: Andrés Hernández, Carlos Gutiérrez</p>
                    </div>
                </div> <!--Navegación-->

                <div class="contactos">
                    <h2>NUEVO CONTACTO</h2>
                    <form action="#" class="formulario">
                        <div class="op">
                            <a href="#"><img src="../build/img/agregar_imagen.png" alt="Agregar imágen"></a>
                        </div>
                        <fieldset>
                            <legend>Información Personal</legend>
                            <label for="nombre"><span><i class="fa-solid fa-user"></i></span></label>
                            <input type="text" placeholder="Nombre" id="nombre">
                            <input type="text" placeholder="Apellido" id="apellido">                       
                            <label for="empresa"><span><i class="fa-solid fa-briefcase"></i></span></label>
                            <input type="text" placeholder="Empresa" id="empresa">
                            <input type="text" placeholder="Cargo" id="cargo">    
                        </fieldset>
                        <fieldset>
                            <legend>Datos de contacto</legend>
                            <label for="correo"><span><i class="fa-solid fa-envelope"></i></span></label>
                            <input type="email" placeholder="Correo electrónico" id="correo">
                            <label for="telefono"><span><i class="fa-solid fa-phone"></i></span></label>
                            <input type="tel" placeholder="Teléfono" id="telefono">   
                            <label for="direccion"><span><i class="fa-solid fa-house-chimney"></i></span></label>
                            <input type="text" placeholder="Dirección" id="direccion">
                        </fieldset>
                        <div class="formulario_boton">
                            <button type="submit" class="boton_2"><p>Guardar</p></button>
                        </div>
                    </form>
                </div> <!--Contactos-->     
            </div>
        </main>
        
        <footer class="seccion">
            <div class="contenedor contenido-footer">
            </div>
            <p class="copyright">Todos los derechos reservados 2022 &copy;</p>
        </footer>
        <script src="../build/js/script.js"></script>
    </body>
</html>