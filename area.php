<?php
    include "./connection.php";
    session_start();
    $nombre = $id_usuario = "";
    $message = "";

    if(isset($_SESSION['POST'])){
        $session = $_SESSION['POST'];
        $nombre = $session["nombre"];
        $id_usuario = $session["id_usuario"];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        $data = [
            "area" => trim($_POST["area"]),
        ];
        $_POST['nombre'] = $nombre;
        $_POST['id_usuario'] = $id_usuario;
        $_SESSION['POST'] = $_POST;

        // print_r($_POST);
        header("location: categoria.php");

    }
    
?>


<!doctype html>
<html lang="es">
<head>
     
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script> 
   
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
                    <img class="mb-4" src="img/Logo Tecxotic Azul.png" alt="" width="72">
                    <h1 class="h3 mb-3 fw-normal">Bienvenido <b><?php echo $nombre; ?></b></h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <?php
                            $data = [
                            ];
                            $result = json_decode(Post("services/readarea.php",$data), true);
                            // print_r($result[0][0]);
                            foreach ($result as $area){
                                echo "<button type='submit' class='mb-3 w-100 btn btn-lg btn-dark' name='area' value=$area[0] >$area[1]</button>";
                            }
                            
                        ?>
                    </form>

                
                </div>
            </div>
            <p class="mt-5 text-muted">&copy; 2021</p>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html> 