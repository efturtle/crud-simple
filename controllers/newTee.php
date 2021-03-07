<?php
    require '../conection.php';

    $query = "insert into names(name, flavor, grade) values(?, ?, ?)";
    /* create a prepared statement */
    if ($stmt = $mysqli->prepare($query)) {
        //bind_param
        $stmt->bind_param('ssi', $_POST['name'], $_POST['flavor'], $_POST['grade']);
        //execute
        $stmt->execute();
        //se subieron los datos
        header('Location:../index.php');
        $stmt->close();
        $mysqli->close();
    }

?>