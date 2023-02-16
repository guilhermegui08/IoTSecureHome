<?php
$target_dir = "upload/";
$target_file = $target_dir . "webcam.png";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["imagem"])) {
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if($check !== false) {
            echo "O ficheiro é uma imagem- " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "O ficheiro não é uma imagem.";
            $uploadOk = 0;
        }
    }



        if ($_FILES["imagem"]["size"] > 500000) {
            echo "O ficheiro é demasiado grande.";
            $uploadOk = 0;
        }


        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Formato não suportado.";
            $uploadOk = 0;
        }


        if ($uploadOk == 0) {
            echo "O ficheiro não foi carregado.";

        } else {
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                echo "O ficheiro foi enviado";
            } else {
                echo "Ocorreu um erro ao enviar o ficheiro";
            }
        }
?>