<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <title>Galería</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Titulo:
                 <?php if (!empty($foto['titulo'])) {
                     echo $foto['titulo'];
                 }else{
                     echo $foto['imagen'];
                 }
                 
                 ?>
                </h1>
        </div>
    </header>
    
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']?>" alt="">
            <p class="texto"><?php echo $foto['texto'] ?>  </p>
        </div>
        <a href="../index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
    </div>
    <footer>
        <p class="copyright">
            &copy; 2017 Alejandro
        </p>
    </footer>

    <script src="https://use.fontawesome.com/a366ac0aa5.js"></script>

</body>
</html>