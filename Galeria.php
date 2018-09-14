<!DOCTYPE html>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<html>
    <head class="cab_gal">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/styles.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
         <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

        <title>Galería</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body > 
 
        
    <?php
        include_once './index.php'
       
    ?>
        
     
   

        
    <center class="galeria" aling="center">
        <div class="div_gal">
            <a class="fancybox" href="img/rescatados/Bigotes.jpg" data-fancybox-group="gallery" 
                title="Bigotes: Hermoso cachorro color café, muy juguetón y cariñoso, ideal para cualquier hogar.">
                <img src="img/rescatados/Bigotes_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Chocolate.jpg" data-fancybox-group="gallery" 
                title="Chocolate: Perro regalón, es tranquilo, adora los paseos, ideal para hogares con harto espacio.">
                <img src="img/rescatados/Chocolate_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Luna.jpg" data-fancybox-group="gallery" 
               title="Luna: Adorable cachorrita negra, adora dormir, correr, saltar y jugar, ideal para cualquier hogares.">
               <img src="img/rescatados/Luna_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Maya.jpg" data-fancybox-group="gallery" 
               title="Maya: Cachorra muy tierna, juguetona, adora las caricias, excelente compañía, ideal para hogares grandes.">
               <img src="img/rescatados/Maya_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Oso.jpg" data-fancybox-group="gallery" 
                title="Oso: Adorable cachorro, muy peludo, muy saltarín, adora los paseos, ideal para cualquier hogar.">
                <img src="img/rescatados/Oso_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Pexel.jpg" data-fancybox-group="gallery" 
               title="Pexel: Perro pequeño, muy cariñoso y regalón, adora el parque, ideal para cualquier hogar.">
               <img src="img/rescatados/Pexel_tn.jpg" alt="Img-Dog">
            </a>
            <a class="fancybox" href="img/rescatados/Wifi.jpg" data-fancybox-group="gallery" 
               title="Wifi: Perro viejito, muy cariñoso y dormilón, adora las caminatas lentas, ideal para un hogar tranquilo.">
               <img src="img/rescatados/Wifi_tn.jpg" alt="Img-Dog">
            </a>  
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $('.fancybox').fancybox({ keyboard : true });
        });
    </script> 
    </body>
</html>

