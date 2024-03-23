<?php
    include('conectDB.php');
    $identifi=$_GET["id"];
    if($resultados=obtenerResultado("SELECT * FROM `usuarios` WHERE id='$identifi'")){
        while($fila=$resultados->fecth_array(MYSQLI_NUM)){
            echo json_encode($fila);
        }
    }
?>
