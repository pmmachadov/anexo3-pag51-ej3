<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include 'funlib.php';

    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag51-ej3" . "</td>";
    echo "</tr>";
    echo "<td> " . "echo dosDecimales(153.4)" . "</td>";
    echo "<td> " . "#153.40#;" . "</td>";
    echo "</tr>";
    echo "</table>";

    echo dosDecimales(153.4);
    ?>

</body>

</html>