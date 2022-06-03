<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos de contacto</title>
        <link rel="stylesheet" href="../build/css/style.css">
        <link rel="stylesheet" href="../build/css/normalize.css">
        <link rel="icon" href="../build/img/logo.svg">
        <script src="https://kit.fontawesome.com/916f6b891e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="header">
            <div class="contenedor contenido-header">
                <div class="barra">
                    <div class="logotipo">
                        <a href="index.php">                        
                            <img src="../build/img/logo.svg" alt="Logotipo">
                            <h1>Agenda</h1>
                        </a>
                    </div>
                    <div class="buscador">
                        <form action="buscar.php" method = "get">
                            <div class="buscador-box">
                                <span class="icon"><i class="fa-solid fa-angles-right"></i></span>
                                <input type="Buscar" placeholder="Buscar..." id="Buscar" name="buscar">
                                <button type="submit" class ="icon"><span><i class="fa fa-search fa-lg"></i></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="redes-sociales"> 
                        <a href="https://github.com/AndresHernandez1105/CRUD_SI/tree/main"><span><i class="fa-brands fa-github"></i></span><p>Repositorio</p></a>
                    </div>
                </div> <!-- Barra-->
            </div> <!--Contenido-->
        </header>
