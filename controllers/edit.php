<?php
    //conexion
    require '../conection.php';
    //query
    $query = "update names set name=?, flavor=?, grade=? where id=?";
    //preparar
    if($stmt = $mysqli->prepare($query)){
        //binding of variables
        $stmt->bind_param("sssi", $_POST['name'], $_POST['flavor'], $_POST['grade'], $_POST['id']);
        //ejectar
        if($stmt->execute()){
            //cerrar conexiones
            $stmt->close();
            $mysqli->close();
            //retornar a showTee.php
            header('Location:../views/showTee.php');
        }
    }
    
 
?>