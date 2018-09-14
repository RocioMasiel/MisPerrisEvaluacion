<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" media="all" href="CSS/styles.css">
    </head>
    <body>
        
        <?php
        include_once './index.php';
        include_once './controlador/DaoAnimal.php';
        $dao=new DaoAnimal();
        $perro=$_GET["id"]; 
        $reg=$dao->Buscar($perro);
        $fila= mysqli_fetch_row($reg);
        ?>
        ?>
        <br>
        <br>
        <center>
            <img src="img/true.png" class="perrito">
        <div >
            
            <div class="formulario">
            
            <form method="POST" action="GrabarAnimal.php" >
            
            <h2>FORMULARIO</h2>
            
            <input type="text" name="txtId" placeholder="Id">
            <input type="text" name="txtNombre" placeholder="Nombre">
            <input type="text" name="txtRaza" placeholder="Raza">
            <input type="number" name="txtEdad" placeholder="Edad">
            <input type="text" name="txtColor" placeholder="Color">
            
            
            <input type="submit" value="Enviar" id="botoon"/>
            <input type="reset" value="Limpiar" />
            
        </form> 

        </div>
    </center>
    <br>
        <br>

    </body>
</html>
