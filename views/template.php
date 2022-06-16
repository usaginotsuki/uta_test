<html>

<head>
    <title> UTA </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
</head>

<body>
    <header>
        <img src="imagen/imagenU.png" width="%100" height="200">
    </header>
    <nav>
        <ul>
            <li><a href="index.php?action=inicio">Inicio</a></li>
            <li><a href="index.php?action=servicios">Servicios</a></li>
        </ul>
    </nav>
    <section>
    
        <?php
        

         $mvc=new MvcController();
         $mvc->enlacesPaginasController();
        ?>
    </section>
    
    <footer>
    
        ALLAUCA YADIRA
    </footer>

</body>

</html>