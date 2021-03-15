<?php
   
    $host = "localhost";
    $dbname = "viajes";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "SELECT id_cliente, nombre, destino FROM clientes";
    $q = $cnx->prepare($sql);
    $result = $q->execute();
    $clientes = $q->fetchAll();

    $sql = "SELECT id_destino, nombre_dest FROM destinos";
    $q = $cnx->prepare($sql);
    $result = $q->execute();
    $destinos = $q->fetchAll();

 ?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear enrollment</title>
</head>
<body>
    <form action="save-enrollment.php" method="POST">
        Cliente 
        <select name="cliente" id="">
<?php
        for($i=0; $i<count($clientes); $i++){
?>
            <option value=""><?php echo $clientes[$i]["id_cliente"] ?>
            <?php echo $clientes[$i]["nombre"] ?>
            <?php echo $clientes[$i]["destino"] ?>
            </option>
<?php
        }
?>
        </select>
         <br/><br/>
         Destino 
        <select name="destino" id="">
<?php
        for($i=0; $i<count($destinos); $i++){
?>
            <option value=""><?php echo $destinos[$i]["id_destino"] ?>
            <?php echo $destinos[$i]["nombre_dest"] ?>
            </option>
<?php
        }
?>
        </select>
         <br/><br/>
        VIP <input type="radio" name="vip" value="0"/> Si
        <input type="radio" name="vip" value="1"/> No <br/>
        <br/>
        <input type="submit" value="Crear enrollment">
    </form>
</body>
</html>