<?php
    function rellenarArray(){
        $array = [];

        $array = [
        "Hora"      => ["1", "2", "3", "4", "5", "6", "7"],
        "Lunes"     => ["IPP2", "Servidor", "Servidor", "Intermodular", "Despliegue", "Cliente", "Cliente"],
        "Martes"    => ["Cliente", "Cliente", "Servidor", "Servidor", "Intermodular", "Despliegue", ""],
        "Miércoles" => ["IPP2", "Cliente", "Cliente", "Servidor", "Despliegue", "Despliegue", ""],
        "Jueves"    => ["Servidor", "Servidor", "Servidor", "Sostenibilidad", "OPT1", "IPP2", ""],
        "Viernes"   => ["OPT1", "OPT2", "Digitalización", "Servidor", "Servidor", "Tutoría", ""]
        ];

        return $array;
    }
?>