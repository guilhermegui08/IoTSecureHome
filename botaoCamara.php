<?php
    $comando = "python camara.py";
    $output = null;
    exec($comando,$output);
    header("refresh:0.5;url=dashboardAdmin.php");
?>