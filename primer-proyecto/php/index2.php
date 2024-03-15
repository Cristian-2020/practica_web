<?php

    $nombre = 'Cristian';
    echo "Hola, mi nombre es: <b style='color: red'>$nombre</b><br>";
    print $nombre."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Hola mi nombre es: <?php echo $nombre ?></label>
</body>
</html>

<?php
    unset($nombre);

    $nombre = 'Armando';
    echo "<br>";

    if ($nombre === "Armando") {
        echo "Ya es ingeniero";
    } elseif ($nombre === "Cristian") {
        echo "<b style='color: red'>YA CASI ES INGENIERO</b>";
    } else {
        echo "<b style='color: orange'>NO ES INGENIERO</b>";
    }

    echo "<br>";
    
    $mensaje = (($nombre == 'Armando') ? "Ya es ingeniero" : (($nombre == 'Cristian') ? "Ya casi es ingeniero" : "No es ingeniero"));
    echo $mensaje;

    echo "<br>";

    switch ($nombre) {
        case 'Josué':
            echo "Ya es ingeniero";
            break;
        case 'Andres':
        case 'Cristian':
            echo "Ya casi es ingeniero";
            break;
        default:
            echo "No es ingeniero";
            break;
    }

?>