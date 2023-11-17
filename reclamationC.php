<?php
include_once "../config.php";
require_once "../Model/reclamation.php";


class ReclamationC
{
    function ajouterReclamation($reclamation)
    {
        $sql = "INSERT INTO reclamation (name,object,message) 
    VALUES (:name,:object,:message)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $reclamation->getName(),
                'object' => $reclamation->getObject(),
                'message' => $reclamation->getMessage(),
                
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function afficherReclamation($reclamation)
    {
        $sql = "SELECT * FROM reclamation WHERE id=:id";
        $db = config::getConnexion();
        $id = $reclamation->getId();
        $list = $db->prepare($sql);
        try {
            $list = $db->execute(['id' => $id]);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimerReclamation($id)
    {
        $sql = " DELETE FROM reclamation WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

    function modifierReclamation($reclamation, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE reclamation SET message = :message, capture = :capture WHERE id= :id');
            $query->execute([
                'message' => $reclamation->getMessage(),
                'capture' => $reclamation->getCapture(),
                'id' => $id
            ]);
        } catch (Exception $e) {
            die('Erreuer: ' . $e->getMessage());
        }
    }
    function triReclamtions()
    {
        $sql = "SELECT * FROM reclamation order by status";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }    
}
