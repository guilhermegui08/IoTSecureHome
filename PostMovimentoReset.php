<?php
    header('Content-Type: text/html; charset=utf-8');
    $valor = "Não Detetado";
    $nome = "Movimento";
    $hora= date('d-m-y h:i:s');
        file_put_contents("api/files/Movimento/valor.txt",$valor);
        file_put_contents("api/files/Movimento/hora.txt",$hora);
        $b = $hora . "; " . "$valor";
        file_put_contents("api/files/Movimento/log.txt",$b.PHP_EOL,FILE_APPEND);
        header("refresh:0.5;url=dashboardAdmin.php");
?>
