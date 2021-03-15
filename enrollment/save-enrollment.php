<?php
    $cliente = $_REQUEST["cliente"];
    $destino = $_REQUEST["destino"];
    $vip = $_REQUEST["vip"];

    $host = "localhost";
    $dbname = "viajes";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO enrollment (id, cliente_id, destino_id, vip) VALUES(NULL, '$cliente', '$destino', '$vip')";

    $q = $cnx->prepare($sql);

    $result = $q->execute();
    
    if($result){
        echo "enrollment created";
    }
    else{
        echo "error in the enrollment";
    }
?>