<?php
    include('database.php');

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if(isset($data['nombre'])){
        $name = $data['nombre'];
        $description = $data['descripcion'];
        $ano = $data['ano'];
        $modelo = $data['modelo'];
        $query ="INSERT into icar(nombre, ano, marca, modelo) VALUES ('$name', '$ano', '$description', '$modelo')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('La consulta a fallado');
        }
        echo "insercion satisfactoria";
    } else {
        echo "No se recibieron los datos'";
    }
?>