<?php
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $genero = $_REQUEST["genero"];
    $destino = $_REQUEST["destino"];

    $host = "localhost";
    $dbname = "viajes";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO clientes (id_cliente, nombre, edad, genero, destino) VALUES(NULL, '$nombre', '$edad', '$genero', '$destino')";

    $q = $cnx->prepare($sql);

    $result = $q->execute();
    
    if($result){
        echo "saved";
    }
    else{
        echo "error in client $nombre";
    }
?>