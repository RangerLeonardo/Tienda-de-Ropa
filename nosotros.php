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
        <a href="/index.php" class="navegacion__enlace ">Tienda</a>
        <a href="/productos.php" class="navegacion__enlace">Productos</a>
        <a href="/nosotros.php" class="navegacion__enlace navegacion__enlace--activo">Nosotros</a>
    </nav>

    
    <main class="contenedorPrincipal" >
        <h1 class="titulo">Sobre Nosotros</h1>

        <div class="nosotros">
                <div class="nosotros__contenido">
                <p class="contenedor__texto negro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sunt asperiores inventore nemo esse at sit vel, qui provident accusantium saepe eveniet molestiae dolore, id dolores voluptatum. Porro, illo suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nostrum quas eos atque eaque soluta ex laudantium suscipit alias ea corporis commodi assumenda iste. Perferendis et ullam vero consectetur enim! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias modi magnam ipsam, rem tempora alias laboriosam, consequatur ex sint, sed sapiente dolor possimus eaque. Reprehenderit fugiat mollitia repellendus. Libero, tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, optio enim obcaecati ipsum commodi, iste dicta reprehenderit maxime consequuntur saepe sit doloribus aliquid laudantium! Ex sit cupiditate quos id vitae?</p> 
            </div>
                <img class="nosotros__imagen" src="/img/nosotros.jpg" alt="Chica con camisa redux">
        </div>
        
      
        <section class="contenedorPrincipal comprar">

            <h2 class="titulo__h2">¿Por qué comprar con nosotros?</h2>

            <div class="iconos">
                
                    <div class="iconos__bloques">
                        <h3>El mejor precio</h3>
                        <img class="iconos__bloques--imagen " src="/img/icono_1.png" alt="porque comprar">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus possimus perferendis ex sapiente quas modi nam nesciunt laborum at cupiditate provident deserunt non adipisci nihil dolorum perspiciatis, nulla iure.</p>
                    </div>
                    <div class="iconos__bloques">
                        <h3>Para DEVS</h3>
                        <img class="iconos__bloques--imagen" src="/img/icono_2.png" alt="para devs">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus possimus perferendis ex sapiente quas modi nam nesciunt laborum at cupiditate provident deserunt non adipisci nihil dolorum perspiciatis, nulla iure.</p>
                    </div>
                    <div class="iconos__bloques">
                        <h3>Envío gratis</h3>
                        <img class="iconos__bloques--imagen" src="/img/icono_3.png" alt="Envio gratis">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus possimus perferendis ex sapiente quas modi nam nesciunt laborum at cupiditate provident deserunt non adipisci nihil dolorum perspiciatis, nulla iure.</p>
                    </div>
                    <div class="iconos__bloques">
                        <h3>La mejor calidad</h3>
                        <img class="iconos__bloques--imagen" src="/img/icono_4.png" alt="Calidad">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus possimus perferendis ex sapiente quas modi nam nesciunt laborum at cupiditate provident deserunt non adipisci nihil dolorum perspiciatis, nulla iure.</p>
                    </div>
                        
                   

        </section>












    </main>
    <?php include_once "plantillas/footer.php" ?>
</body>
</html>