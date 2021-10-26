<?php
include "./connection.php";
$usuario = $contraseña ="";
session_start();
$message = "";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $result = json_decode(Get("ReadSubprocess",[]), true);



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
        <!-- <div class="row"> -->
        <div class="row d-flex flex-wrap align-content-end justify-content-center">
            <div class="col">
                <div class="form-signin bg-light">
                <!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
                    <div>
                        <label for="validationDefault03">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="validationDefault03" required value="<?php echo $usuario; ?>">
                    </div>
                    <br>
                    <div>
                        <label for="validationDefault03">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control" id="validationDefault03" required value="">
                    </div>
                    <br>

                    <br><br>
                    <p style="color:#FF0000"><?php echo $message ?></p>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                    <a href="index.php" class="btn btn-default">Cancelar</a>
                </form> -->

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
                        <img class="mb-4" src="img/Logo Tecxotic Azul.png" alt="" width="72">
                        <h1 class="h3 mb-3 fw-normal">Inicio de sesi&oacute;n</h1>
            
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationDefault01" placeholder="A0xxxxxxx">
                            <label for="validationDefault01">Usuario</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="validationDefault02" placeholder="Password">
                            <label for="validationDefault02">Password</label>
                        </div>
                        <p style="color:#FF0000"><?php echo $message ?></p>
                        
                        <input type="submit" class="btn btn-primary" value="Entrar">
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