<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="all" href="CSS/styles.css">
        <title></title>

    </head>
    <body>
        
       <?php
        include_once'./index.php'
       
        ?>
        <br>
        <br>
        <center>
    
    
         <table>
             <thead>
          
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td> Raza </td>
                <td></td>
                <td></td>
                
            </tr>
             
            </thead>
            <?php
            
            include_once'./controlador/DaoAnimal.php';
            $dao=new DaoAnimal();
            $reg=$dao->Listar();
            while($row= mysqli_fetch_array($reg)){
                echo '<tr>';
                echo '<td>'.$row[0]."</td>";
                echo '<td>'.$row[1]."</td>";
                echo '<td>'.$row[2]."</td>";

                echo '<td><a href="Eliminar.php?id='.$row[0].' "> Eliminar </a></td>';
                echo '<td><a href="modificar.php?id='.$row[0].' "> Modificar </a></td>';
                
                echo '</tr>';
            }
            ?>
        
        </table>
   
      </center>
</body>
</html>
