<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidado con el perreo</title>
    <link rel="stylesheet" href="/styles/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="preload" href="/styles/styles.css" as="style">
    <link rel="stylesheet" href="/styles/styles.css">
    <!-- font-family: 'Poppins', sans-serif; -->
</head>
<body>

<?php include_once "plantillas/logo.php" ?>


    <nav class="navegacion">
        <a href="/index.php"  class="navegacion__enlace " >Tienda</a>
        <a href="/productos.php" class="navegacion__enlace navegacion__enlace--activo">Productos</a>
        <a href="/nosotros.php" class="navegacion__enlace">Nosotros</a>
        
    </nav>

    
    <main class="contenedorPrincipal" >
        <h1>React JS</h1>
      
        <div class="camisa camisa-producto">
                <img class="camisa__imagen" src="img/3.jpg" alt="imagen de producto">

                <div>
                    <p class="negro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim molestias eos natus, nihil inventore libero deserunt harum maiores! Expedita quos placeat voluptate incidunt reiciendis porro maxime sunt molestiae voluptatem velit!</p>

                    <div >
                        <p class="negro-text">Color: Negro</p>
                        <button class="color"></button>
                    </div>

                    <div class="alineado">
                        <button class="boton">CHI</button>
                        <button class="boton seleccionada">MED</button>
                        <button class="boton">GDE</button>
                        
                    </div>



                    <div>
                        <button class="carrito"><img src="/img/carrito.png" alt="Carrito de compras" class="img_carrito">AGREGAR AL CARRITO</button>
                    </div>




                </div>
        </div>

    </main>

    <footer class="footer footer-productos">
        <p class="footer__texto">&copy;Todos los derechos reservados 2022</p>
</footer>
</body>
</html>