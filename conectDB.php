<?php
    header('Content-type: text/html; charset=utf-8');
    function obtenerResultado($qwery){
        $mysqli=new mysqli("localhost","root","","noche");
        if ($mysqli->connect_errno) {
            printf("F por la base de datos");
            exit();
        }
        if($mysqli->multi_query($qwery)){
            return $mysqli->store_result();
        }
        $mysqli->close();
    }
?>
