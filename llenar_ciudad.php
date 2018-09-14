<?php

$idRegion=$_POST["idRegion"];
$cone= mysqli_connect("localhost", "root", "","MisPerris" );
$reg= mysqli_query($cone, "select * from ciudad "
        ."where idRegion=$idRegion");

?>

<option value="0">Seleccione</option>
<?php

while ($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
?>