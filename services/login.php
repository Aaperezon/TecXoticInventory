<?php 
    require "connection.php";
    $result=null;
    if($pdo!=null){
        error_log("Connection is not null");
        $received = json_decode(file_get_contents('php://input'),true);
        $usuario = $password = "";
        $usuario = $received['usuario'];
        $password = $received['password'];
        $sql = "SELECT * FROM usuario where usuario = "."'".$usuario."'"." and password = "."sha2('".$password."',256)";
        $stmt = $pdo->prepare($sql);
        if($stmt->execute()){
            $area = $received['area'];
            $sql2 = "SELECT id,nombre FROM usuario where usuario = "."'".$usuario."'"." and password = "."sha2('".$password."',256)";
            $stmt2 = $pdo->prepare($sql2);
            $stmt2->execute();
            while($row = $stmt2->fetch(PDO::FETCH_NUM))
                $result = $row;
        }
        else{
            $result = false;
        }
    }else{
        $result = "Connection error";
    }
    echo json_encode($result);
?>
