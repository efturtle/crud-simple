<?php

$mysqli = new mysqli("localhost", "root", "treJo23@#", "tee");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>