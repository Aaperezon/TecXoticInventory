<?php
include "./connection/Connection.php";
$usuario = $contraseña ="";
session_start();
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){



}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/my_style.css">
</head>
<body>
    <div id="complete_table">
        <table>
            <head>
                <tr>
                    <th>numero</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>caracteristica</th>
                </tr>
            </head>
            <body>
                <div id="data_table">
                    <tr>
                        <th>1</th>
                        <th>nombre</th>
                        <th>3</th>
                        <th>caracteristica</th>
                    </tr>
                </div>
            </body>
            
        </table>
    </div>














    <form action="" method="get">
        <div>
            <label for="text">user</label>
            <input type="text" name="user" id="">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="">
        </div>

    </form>
    
















</body>
</html>