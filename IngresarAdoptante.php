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
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var idRegion=$('#cboRegion').val();
                    /*alert('cambió'+idRegion);*/
                    $.ajax({
                        url:"llenar_ciudad.php",
                        type:'POST',
                        data:{idRegion:idRegion},
                        success:function(data){
                            $("#cboCiudad").html(data);
                        }
                    })
                });
            });
        </script>
        <?php
        include_once './index.php';
        $cone = mysqli_connect("localhost","root", "", "MisPerris");
        $reg1= mysqli_query( $cone,"select * from tipovivienda");
        $reg= mysqli_query( $cone,"select * from region");
       
        ?>
        <br>
        <br>
        <div >
        <h2 id="tittle" > Anímate a adoptar a uno de nuestros refugiados </h2>
        <h3 id="tittle" >Llena este formulario para postular a la adopción</h3>
        <br>
        <br>
        </div>
        
        <div id="contenedor5">
            <div id="caja1">
                <img src="img/perro (1).png" class="perro">
            </div>
            
            <div class="formulario" id="caja2">
            
            <form method="POST" action="GrabarAdoptante.php" >
            
            <h2>FORMULARIO</h2>
            
            <input type="text" name="txtRut" placeholder="Rut">
            <input type="text" name="txtNombre" placeholder="Nombre">
            <input type="text" name="txtDireccion" placeholder="Dirección">
            <input type="email" name="txtEmail" placeholder="Email">
            <input type="date" name="txtFecha" placeholder="Fecha">
            <input type="tel" name="txtTelefono" placeholder="Teléfono">
            <select name="cboRegion" id="cboRegion">
            <?php
            while ($row=mysqli_fetch_array($reg)) {
            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
            }
            ?>  
            </select>
            <select name="cboCiudad" id="cboCiudad" ></select>
            <select name="cboVivienda" id="cboVivienda" required>
            <?php
            while ($row=mysqli_fetch_array($reg1)) {
            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
            }
            ?>
                 
            <input type="submit" value="Enviar" id="botoon"/>
            <input type="reset" value="Limpiar" />
            
        </form> 

        </div>
            
    </div>
        
        
        
 
    <br>
    <br>
    <br>

    </body>
    
     <br>
    <br>
    <br>
</html>
