<?php
include "./connection.php";
$usuario = "";
session_start();
$message = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        echo("<script> console.log('Hola')</script>");
        $data = [];
        $result = json_decode(Get("services/readusuario.php",$data), true);
        // print_r($result[0][0]);
        // for($i = 0; $i < 8;$i++){
        $usuario = $result[0][4];
        // echo "<script> console.log(".$usuario.")</script>";
        // }


    }
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Tecxotic Inventory</title>
</head>

<body class="text-center">
    <div class="container">
        <div class="row d-flex flex-wrap align-content-end justify-content-center">
            <div class="col">
                <div class="form-signin bg-light">
                    <img class="mb-3" src="img/Logo Tecxotic Azul.png" alt="" width="72">
                    <h1 class="h3 mb-4 fw-normal">Bienvenido <b><?php echo $usuario ?></b></h1>

                    <?php
                        $area = "";

                        if($_SERVER["REQUEST_METHOD"] == "GET"){
                            echo("<script> console.log('Hola')</script>");
                            $data = [];
                            $result = json_decode(Get("services/readcategoria.php",$data), true);
                            // print_r($result[0][0]);
                            // TODO: Identificar cuantos registros hay en la tabla
                            for($i = 0; $i < 2;$i++){
                                $categoria = $result[$i][2];
                                echo "<a class='mb-3 w-100 btn btn-lg btn-dark' href='listado.php'>$categoria</a>";
                            }
                            // echo "<script> console.log(".$usuario.")</script>";
                            // }
                            
                            
                        }
                        
                        ?>
            
                    <!-- <a class="mt-3 mb-5 w-100 btn btn-lg btn-dark" href="listado.php">Herramientas</a>
                    <a class="mt-5 mb-5 w-100 btn btn-lg btn-dark" href="listado.php">Materiales</a> -->
                </div>
            </div>
            <p class="mt-5 text-muted">&copy; 2021</p>
        </div>
    </div>



</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>

</html>