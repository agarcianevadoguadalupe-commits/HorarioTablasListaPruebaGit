<?php
    $dias = ["Hora", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
    
    $horario = [
        ["1", "2", "3", "4", "5", "6", "7"],
        ["IPP2", "Servidor", "Servidor", "Intermodular", "Despliegue", "Cliente", "Cliente"],
        ["Cliente", "Cliente", "Servidor", "Servidor", "Intermodular", "Despliegue", ""],
        ["IPP2", "Cliente", "Cliente", "Servidor", "Despliegue", "Despliegue", ""],
        ["Servidor", "Servidor", "Servidor", "Sostenibilidad", "OPT1", "IPP2", ""],
        ["OPT1", "OPT2", "Digitalización", "Servidor", "Servidor", "Tutoría", ""]
    
        /*["1", "IPP2", "Cliente", "IPP2", "Servidor", "OPT1"],
        ["2", "Servidor", "Cliente", "Cliente", "Servidor", "OPT2"],
        ["3", "Servidor", "Servidor", "Cliente", "Servidor", "Digitalización"],
        ["4", "Intermodular", "Servidor", "Servidor", "Sostenibilidad", "Servidor"],
        ["5", "Despliegue", "Intermodular", "Despliegue", "OPT1", "Servidor"],
        ["6", "Cliente", "Despliegue", "Despliegue", "IPP2", "Tutoría"],
        ["7", "Cliente", "", "", "", ""]*/
    ];

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
                echo "<tr>";
                foreach ($dias as $dia){
                    echo '<th class="info">'.$dia.'</th>';
                }
                echo "</tr>";

                for ($hora = 0; $hora < 7; $hora++){
                    echo '<tr><td class="info">'.$horario[0][$hora].'</td>';

                    for ($dia = 1; $dia < count($horario); $dia++){
                        $elemento = $horario[$dia][$hora];
                        echo '<td class ='.$elemento.'>'.$elemento.'</td>';
                    }

                    echo "</tr>";
                }
            ?>

            <!-- <tr>
                <th class="info">Hora</th>
                <th class="info">Lunes</th>
                <th class="info">Martes</th>
                <th class="info">Miércoles</th>
                <th class="info">Jueves</th>
                <th class="info">Viernes</th>
            </tr>
            <tr>
                <td class="info">8:15-9:10</td>
                <td class="IPP2">IPP2</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="IPP2">IPP2</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="OPT1">OPT 1</td>
            </tr>
            <tr>
                <td class="info">9:10-10:05</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="OPT2">OPT 2</td>
            </tr>
            <tr>
                <td class="info">10:05-11:00</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="DIGITALIZACIÓN">DIGITALIZACIÓN</td>
            </tr>
            <tr>
                <td class="info">11:30-12:25</td>
                <td class="INTERMODULAR">INTERMODULAR</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="SERVIDOR">SERVIDOR</td>
                <td class="SOSTENIBILIDAD">SOSTENIBILIDAD</td>
                <td class="SERVIDOR">SERVIDOR</td>
            </tr>
            <tr>
                <td class="info">12:25-13:20</td>
                <td class="DESPLIEGUE">DESPLIEGUE</td>
                <td class="INTERMODULAR">INTERMODULAR</td>
                <td class="DESPLIEGUE">DESPLIEGUE</td>
                <td class="OPT1">OPT 1</td>
                <td class="SERVIDOR">SERVIDOR</td>
            </tr>
            <tr>
                <td class="info">13:20-14:15</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="DESPLIEGUE">DESPLIEGUE</td>
                <td class="DESPLIEGUE">DESPLIEGUE</td>
                <td class="IPP2">IPP2</td>
                <td class="TUTORÍA">TUTORÍA</td>
            </tr>
            <tr>
                <td class="info">14:15-15:00</td>
                <td class="CLIENTE">CLIENTE</td>
                <td class="info"> </td>
                <td class="info"> </td>
                <td class="info"> </td>
                <td class="info"> </td>
            </tr> -->
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
