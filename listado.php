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
                        <h1 class="mt-2 btn btn-lg btn-dark disabled fixedCenter">Herramientas</h1>
                    </div>

                    <!-- <br><br> -->

                    <div class="container DivToScroll">
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color azul"></div>
                            <div class="col-5 ">Taladro</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)">
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario">Aaron</div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color azul"></div>
                            <div class="col-5 ">Cautin</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)" checked>
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario"></div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color rojo"></div>
                            <div class="col-5 ">Martillo</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)" checked>
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario"></div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color verde"></div>
                            <div class="col-5 ">Taladro</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)" checked>
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario"></div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color azul"></div>
                            <div class="col-5 ">Taladro</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)">
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario">Dora</div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color rojo"></div>
                            <div class="col-5 ">Segueta</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)">
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario">Aaron</div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color rojo"></div>
                            <div class="col-5 ">Martillo</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)">
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario">Aaron</div>
                        </div>
                        
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-2 item-Color verde"></div>
                            <div class="col-5 ">Cautin</div>

                            <!-- Rounded switch -->
                            <label class="col-2 switch">
                                <input type="checkbox" id="checked" onclick="check(this)">
                                <span class="slider round"></span>
                            </label>

                            <div class="col-3 usuario">Aaron</div>
                        </div>

                        <!-- MATERIALES -->
                        <div class="row d-flex justify-content-between align-items-center item">
                            <div class="col-4 item-Color verde"></div>
                            <div class="col-4 ">Cable 1</div>

                            <!-- Rounded switch -->
                            <label class="col-4 switch">
                                <input type="checkbox" id="checked" onclick="report(this)" checked>
                                <span class="slider round"></span>
                            </label>

                            <!-- <div class="col-3 usuario">Aaron</div> -->
                        </div>
                        
                        
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