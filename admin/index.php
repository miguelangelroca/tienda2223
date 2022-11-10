<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de articulos</title>
</head>

<body>
    <?php
    require 'comunes/auxiliar.php';
    $pdo = conectar();
    $sent = $pdo->query("SELECT * FROM articulos ORDER BY articulos");
    ?>

    <table border="2">
        <thead>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <?php foreach ($sent as $fila) : ?>
                <tr>
                    <td><?= $fila['codigo'] ?></td>
                    <td><?= $fila['descripcion'] ?></td>
                    <td><?= $fila['precio'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>