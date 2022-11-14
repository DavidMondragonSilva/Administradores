<?php
function conecta(){
    $servername = "localhost";
    $database = "Lista_administradores";
    $username = "root";
    $password = "";
    // Create connection
    $con = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$con) {
        die("Conexion a fallado: " . mysqli_connect_error());
    }
}

?>