<?php
include '../Controller/ReponseC.php';

    $reponseC=new ReponseC();
    $reponseC->supprimerReponse($_GET["id"]);

    header('Location: viewReponse.php');
?>