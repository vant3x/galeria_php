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
            <h1 class="titulo">Mi Galería</h1>
        </div>
    </header>
    
    <section class="fotos">
        <div class="contenedor">
            <!-- <div class="thumb">
                <a href="#">
                    <img src="../fotos/pexels-photo-134577.jpeg" alt="" >
                </a>
                <br><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui saepe iste dolores, suscipit voluptatem quam necessitatibus officia eligendi aperiam labore temporibus reiciendis beatae cumque nisi omnis odit excepturi consequatur repellat?</p>
            </div> -->
            <?php foreach($fotos as $fotos):?>
                <div class="thumb">
                    <!-- <a href=""> -->
                        <img src="fotos/<?php echo $fotos['imagen'] ?>" alt="<?php echo $fotos['titulo'] ?>">
                        <h3 class="titulo_imagen text-center"><?php echo $fotos['titulo']?></h3>
                        <p class="description_text text-center"><?php echo $fotos['texto'] ?></p>
                        <a href="foto.php?id=<?php echo $fotos['id']; ?>" class="btn-mas mas text-center">Leer más</a>
                    <!-- </a> -->
                </div>
           <?php endforeach;?>
       
       
            <div class="paginacion">
                <?php if ($pagina_actual > 1): ?>
                     <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior </a> 
                <?php endif ?>
                <?php if ($total_paginas != $pagina_actual): ?>
                     <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"> Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif ?>
                <!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior </a>
                
                <a href="#" class="derecha"> Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                 -->
            </div>
                
        </div>
    </section>

    <footer>
        <p class="copyright">
            &copy; 2017 Alejandro
        </p>
    </footer>

    <script src="https://use.fontawesome.com/a366ac0aa5.js"></script>
    <script>
        // let pass =  prompt("Ingresa tu password");
        // if(pass == "saturn812"){
        //     alert("contraseña correcta");
        // }else{
        //     alert("Ingresa otra ")
        // }
            
        
    </script>
</body>
</html>