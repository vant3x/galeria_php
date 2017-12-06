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
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>
    
    <div class="contenedor">
        <form  class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <label for="foto">Selecciona tu foto:</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Texto:</label>
            <textarea class="escrito_form" name="texto" id="texto" placeholder="Ingresa tu escrito"></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error; ?> </p>
            <?php endif ?>

            <input type="submit" value="Subir foto" class="submit">
        </form>

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