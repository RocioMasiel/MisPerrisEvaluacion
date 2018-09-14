<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html >
    <head>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>        
        <title>Mis perris</title>
        <meta charset="UTF-8">
        <meta name="vieport" content="width-device-width,user-scalable=no,
        initial-scale=1,maximum-scale=1,minimun-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
        
        <link rel="stylesheet" href="css/styles.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
     
    </head>
    
    <body>
    
        
 
    <header>
        <div class="contenedor">
            <img src="img/logo.png" >
            <input type="checkbox" id="menu-bar">
            <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="Inicio.php"><i class="fas fa-home"></i> 
                    <span class="icon"> </span>Inicio</a>
                    <a href="IngresarAnimal.php"><i class="fas fa-file-contract"></i>
                    <span class="icon"> </span>Ingreso</a>
                    <a href="Galeria.php"><i class="fas fa-images"></i>
                    <span class="icon"> </span>Galería</a>
                    <a href="ListadoAnimal.php"><i class="fas fa-list-ul"></i>
                    <span class="icon"> </span>Listar Animales</a>
                    <a href="IngresarAdoptante.php"><i class="fas fa-user-plus"></i>
                    <span class="icon"> </span>Adoptante</a>
                </nav>
            </div>
    </header>
    
        
    <div id="banner">
        <center>
            <div class="carousel"> <!--para llamar a la clase de carousel de bootstrap-->
              
                <div id="MyCarousel" class="carousel slide" date-ride="carousel"> <!--aca se llama al moviemiento del equis de y pones cuantas imagenes vay a tener -->
                    
                        <ul  class="carousel-indicators">
                          <!--esta son las imagenes mientras mas tengas tienes que ir a gregando de 1 , la primera siempre va con la clase active -->
                            <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#MyCarousel" data-slide-to="1"></li>
                            <li data-target="#MyCarousel" data-slide-to="2"></li>
                            <li data-target="#MyCarousel" data-slide-to="3"></li>
                            

                        </ul>
                   <!--llamar a la imagenes-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  src="img/dog.png" alt="Perrito" >
                            <div class="carousel-caption">
                                <center>
                                <h3>Perritos adoptados</h3>
                                <p>¡Adopta un amigo!</p>
                                </center>
                              </div> 
                        </div>
                         <div class="carousel-item ">
                             <img src="img/adoptados/Apolo.jpg" alt="Apolo" >
                              <div class="carousel-caption">
                                <h3>Apolo</h3>
                                <p>Gracias por esta felicidad</p>
                              </div>  
                        </div>
                        <div class="carousel-item">
                            <img  src="img/adoptados/Duque.jpg" alt="Duque" >
                            <div class="carousel-caption">
                                <h3>Duque</h3>
                                <p>Adoro los paseos junto a ti</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/adoptados/Tom.jpg" alt="Tom" > 
                            <div class="carousel-caption">
                                <h3>Tom</h3>
                                <p>Nada mejor que tu cariño</p>
                            </div>
                        </div>
                         
                        
                     
                    </div>
                <!--aca llamas a los botones , no se hacen solo los llamas de bootstrap lo hace todo solo xd -->
                    
                    <a class="carousel-control-prev" href="#justin" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#justin" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                
                
             <!--todo esto funciona en un div con unos div anidados onda cada imagen es un div xd eso -->   
             
            </div> 
        </center>    
    </div>
    
    
    <div id="contenedor3">
        <div id="columna1">
           <b class="telefono">  + 56 9 98765431</b>  
        </div>
        <div id="columna2">
        <center>
        <b class="rescate">  Rescate y adopción de perros callejeros</b>
        </center>
        </div>
        <div id="columna3">
        <img class="img" src="img/facebook-boton-circular-social.png" >&nbsp;&nbsp;&nbsp;&nbsp;
        <img class="img" src="img/google-plus-boton-circular-social.png" >&nbsp;&nbsp;&nbsp;&nbsp;
        <img class="img" src="img/instagram.png">&nbsp;&nbsp;&nbsp;&nbsp;
        <img class="img" src="img/email-nuevo-con-boton-circular.png" >    
        </div>
        
    </div>
        
       
        
    </body>        
    
</html>
