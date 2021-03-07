<?php
    //conection
    require '../conection.php';
    //query
    $query = "delete from names where id=?";
    if($stmt = $mysqli->prepare($query)){
        $stmt->bind_param("i", $_POST['id']);
        //ejecutar
        if($stmt->execute()){
            //cerrar conexiones
            $stmt->close();
            $mysqli->close();
            //redirigir
            header('Location:../views/showTee.php');
        }else{
            echo 'Error deleting this Tee';
        }
    }
    
    