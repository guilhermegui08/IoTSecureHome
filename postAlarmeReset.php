<?php
    header('Content-Type: text/html; charset=utf-8');
    $valor = "Ativo";
    $nome = "Alarme";
    $hora= date('d-m-y h:i:s');
        file_put_contents("api/files/Alarme/valor.txt",$valor);
        file_put_contents("api/files/Alarme/hora.txt",$hora);
        $b = $hora . "; " . "$valor";
        file_put_contents("api/files/Alarme/log.txt",$b.PHP_EOL,FILE_APPEND);
        header("refresh:0.5;url=dashboardAdmin.php");
?>