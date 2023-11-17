<?php
include '../Controller/reclamationC.php';

    $reclamationC=new ReclamationC();
    $reclamationC->supprimerReclamation($_GET["id"]);

    header('Location: viewReclamation.php');
?>