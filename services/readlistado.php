<?php 
    require "connection.php";
    $bindings = [];
    $result=null;
    if($pdo!=null){
        error_log("Connection is not null");
        $parameters = ['id_area','id_categoria'];
        $received = json_decode(file_get_contents('php://input'),true);
        foreach ($parameters as $parameter){
            if(!isset( $received[$parameter]) ){
                $result =  "Parameter ".$parameter." missing";
                break;
            }else{
                $bindings[] = $received[$parameter];
            }
        }
        if($result==null){
            $sql = 'SELECT id_area,id_categoria,color.color,nombre FROM inventario INNER JOIN color ON inventario.id_color = color.id WHERE id_area='.$bindings[0].' and id_categoria='.$bindings[1];
                
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_NUM))
                $result[] = $row;
        }
    }
    else{
        $result = "Connection Error";
    }
    echo json_encode($result);
?>
