<?php
    header('Content-Type: text/html; charset=utf-8');
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET': //echo "Metodo GET";

        if (isset($_GET["nome"])){
            if($_GET["nome"] == "Distancia" || $_GET["nome"] == "Movimento" || $_GET["nome"] == "ReconhecimentoFacial" || $_GET["nome"] == "Sonoro" || $_GET["nome"] == "Alarme" || $_GET["nome"] == "Carbono"
            || $_GET["nome"] == "Fumo" || $_GET["nome"] == "DioxidoCarbono" || $_GET["nome"] == "Lampada" || $_GET["nome"] == "Porta"
            || $_GET["nome"] == "Garagem" || $_GET["nome"] == "Janela" || $_GET["nome"] == "AlarmeSonoro" || $_GET["nome"] == "Temperatura"){
                echo file_get_contents("files/".$_GET["nome"]."/valor.txt");
            }
            else{
                http_response_code(400);
                echo "Erro: sensor invalido";	
            }
        }
        else{
            http_response_code(400);
            echo "faltam parametros GET";
            
        }break;
            
        case 'POST': //echo "Metodo POST"; 
            $a = $_POST;
            
            if (isset($_POST["valor"]) && isset($_POST["nome"]) && isset($_POST["hora"])){
                file_put_contents("files/".$a["nome"]."/valor.txt",$a["valor"]);
                file_put_contents("files/".$a["nome"]."/nome.txt",$a["nome"]);
                file_put_contents("files/".$a["nome"]."/hora.txt",$a["hora"]);
                //print_r($a);
                $b = $a["hora"] . "; " . $a["valor"];
                file_put_contents("files/".$a["nome"]."/log.txt",$b.PHP_EOL,FILE_APPEND);
            }
            else {
                http_response_code(400);
                echo "Parametros recebidos nao sao validos";
            }break;
            default: http_response_code(403);
                     echo "Metodo nao permitido";   
    }
?>