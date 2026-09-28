<?php
    require 'ContrHorario.php';
    $array = rellenarArray();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Abraham Garcia Nevado">
        <link rel="stylesheet" href="EstilosHorario.css">
        <title>Horario 2 DAW 26-27</title>
    </head>
    <body>
        <h2>TUTOR: Alberto Domínguez Lebrato</h2>
        <table border="1" bordercolor="black" cellspacing="0" cellpadding="5">
            <?php
                // Cabecera: foreach asociativo (las claves son los días)
                echo "<tr>";
                foreach ($array as $dia => $clases){
                    echo '<th class="info">'.$dia.'</th>';
                }
                echo "</tr>";

                // Cuerpo: for numérico (recorre las horas por índice)
                for ($hora = 0; $hora < count($array["Hora"]); $hora++){
                    echo "<tr>";

                    foreach ($array as $dia => $clases){
                        $elemento = $clases[$hora];
                        echo '<td class="'.$elemento.'">'.$elemento.'</td>';
                    }

                    echo "</tr>";
                }
            ?>

        </table>

        <h3>Profesores:</h3>

        <ul>
            <li>Luis Miguel Álvarez Recio (IPP2, OPT1)</li>
            <li>Ernesto Gonzalez Trives (Despliegue, Intermodular)</li>
            <li>Santiago Vazquez Aguilar (Digitalización)</li>
            <li>Alberto Domínguez Lebrato (Cliente, Tutoría, OPT2)</li>
            <li>Isabel Muñoz Domínguez (Servidor, Intermodular, OPT2)</li>
        </ul>
    </body>
</html>