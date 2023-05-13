<?php
function conectar()
{
    $db_conn = new mysqli("localhost", "root", "", "e-commercemask", "3306");

    if ($db_conn) {
        print_r("Conexión exitosa!!");
        $db_conn->set_charset("utf8");
        return $db_conn;
    } else {
        die("La conexion fallo" . mysqli_connect_error());
    }
}
?>