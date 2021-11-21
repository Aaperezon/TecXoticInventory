<?php
    include "./connection.php";
    session_start();
    $message = $nombre = $id_usuario = $id_area = "";
    if(isset($_SESSION['POST'])){
            $session = $_SESSION['POST'];
            $nombre = $session["nombre"];
            $id_usuario = $session["id_usuario"];
            $id_area = $session["area"];
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        unset($_POST['categoria']);
        $_POST['id_categoria'] = trim($_POST["id_categoria"]);
        $_POST['nombre'] = $nombre;
        $_POST['id_usuario'] = $id_usuario;
        $_POST['id_area'] = $id_area;
        $_SESSION['POST'] = $_POST;

        // print_r($_POST);
        header("location: listado.php");

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
    
    <title>Tecxotic Inventory</title>
</head>

<body class="text-center">
    <div class="container">
        <div class="row d-flex flex-wrap align-content-end justify-content-center">
            <div class="col">
                <div class="form-signin bg-light">
                    <img class="mb-3" src="img/Logo Tecxotic Azul.png" alt="" width="72">
                    <h1 class="h3 mb-4 fw-normal">Bienvenido <b><?php echo $usuario ?></b></h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <?php
                            $data = [
                            ];
                            $result = json_decode(Post("services/readcategoria.php",$data), true);
                            // print_r($result[0][0]);
                            foreach ($result as $categoria){
                                echo "<input name='text_categoria' value='$categoria[1]' hidden></input>";
                                echo "<button type='submit' class='mb-3 w-100 btn btn-lg btn-dark' name='id_categoria' value=$categoria[0] >$categoria[1]</button>";
                            }
                        ?>
                    </form>
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