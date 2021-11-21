<?php
    include "./connection.php";
    session_start();
    $id_categoria = $nombre = $id_usuario = $id_area = $text_categoria = "";
    if(isset($_SESSION['POST'])){
        $session = $_SESSION['POST'];
        $id_categoria = $session["id_categoria"];
        $id_usuario = $session["id_usuario"];
        $id_area = $session["id_area"];
        $text_categoria = $session["text_categoria"];
        // print_r($session);
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
    <link rel="stylesheet" href="css/switch.css">

    <script>
        // function check(id) {
        //     if($(id).is(":checked")){
        //         $(id).attr('disabled', true);
        //     }
        // }

        function report(id) {
            if($(id).not(":checked")){
                Swal.fire('Gracias por tu reporte');
                //Code to disable checkbox after checked
                $(id).attr('disabled', true);
            }
        }
    </script>
    
    <title>Tecxotic Inventory</title>
</head>

<body class="text-center">
    <div class="container">
        <div class="row d-flex flex-wrap align-content-end justify-content-center">
            <div class="col">
                <div class="form-signin bg-light DivWithScroll">
                 
                    <div>
                        <h1 class="mt-2 btn btn-lg btn-dark disabled fixedCenter"><?php echo($text_categoria);?></h1>
                    </div>




                    <div class="container DivToScroll">
                        <?php
                    
                            $data = [
                                "id_area" => $id_area,
                                "id_categoria" => $id_categoria
                            ];
                            $result = json_decode(Post("services/readlistado.php",$data), true);
                            foreach ($result as $lista){
                                // echo($lista[]);
                                echo ("
                                <div class='row d-flex justify-content-between align-items-center item'>
                                    <div class='col-2 item-Color'  style='background : #$lista[2];'></div>
                                    <div class='col-5 '>$lista[3]</div>
        
                                    <!-- Rounded switch -->
                                    <label class='col-2 switch'>
                                        <input type='checkbox'id='checked' onclick='check(this)'>
                                        <span class='slider round'></span>
                                    </label>
        
                                    <div class='col-3 usuario'>Aqui va pesona cambiar query</div>
                                </div>");
                            }
                        ?>
                        
                        
                        
                    </div>

                </div>
            </div>
            <p class="mt-5 text-muted ">&copy; 2021</p>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>