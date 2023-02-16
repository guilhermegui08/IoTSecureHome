<?php
    header('Content-Type: text/html; charset=utf-8');
    $valor = "Aberta";
    $nome = "Janela";
    $hora= date('d-m-y h:i:s');
        file_put_contents("api/files/Janela/valor.txt",$valor);
        file_put_contents("api/files/Janela/hora.txt",$hora);
        $b = $hora . "; " . "$valor";
        file_put_contents("api/files/Janela/log.txt",$b.PHP_EOL,FILE_APPEND);
        header("refresh:0.5;url=dashboardAdmin.php");
?>