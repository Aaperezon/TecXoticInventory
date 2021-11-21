<?php
include "./connection.php";
$usuario = $password = "";
session_start();
$message = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        $data = [
            "area" => trim($_POST["area"]),
            "usuario"=> trim($_POST["usuario"]),
            "password" => trim($_POST["password"])
        ];
        $result = json_decode(Post("services/login.php",$data), true);
        // print_r($result);
        if($result != NULL){
            session_start();
            $_POST['id_usuario'] = $result[0]; 
            $_POST['nombre'] = $result[1]; 
            unset($_POST['area'],$_POST['usuario'],$_POST['password']);
            $_SESSION['POST'] = $_POST;
            // print_r($_POST);
            header("location: area.php");

        }else{

        }
       
        
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
    <title>Tecxotic Inventario</title>
</head>

<body class="text-center">
    <div class="container">
        <!-- <div class="row"> -->
        <div class="row d-flex flex-wrap align-content-end justify-content-center">
            <div class="col">
                <div class="form-signin bg-light">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <img class="mb-4" src="img/Logo Tecxotic Azul.png" alt="" width="72">
                        <h1 class="h3 mb-3 fw-normal">Inicio de sesi&oacute;n</h1>
            
                        
                        <input type="text" name="usuario" class="form-control" id="validationCustom01" placeholder="A0xxxxxxx" required value="<?php echo $usuario; ?>"></input>
                        <br>
                        <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Password" required value=""></input>


                        <p style="color:#FF0000"><?php echo $message ?></p>
                        <input type="submit" class="btn btn-primary" value="entrar">
                        <button href="index.php" class="btn btn-default">Cancelar</button>
                    </form>

                </div>
                <p class="mt-5 text-muted">&copy; 2021</p>
        </div>
    </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>