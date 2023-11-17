<?php
include_once "../config.php";


class ReponseC
{
    function ajouterReponse($reponse)
    {
        $sql = "INSERT INTO reponse (message,id_reclamation) 
                VALUES (:message,:id_reclamation)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'message' => $reponse->getMessage(),
                'id_reclamation' => $reponse->getIdReclamation()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function afficherReponse()
    {
        $sql = "SELECT * FROM reponse";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimerReponse($id)
    {
        $sql = " DELETE FROM reponse WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
    function recupererReponse($id)
    {
        $sql = "SELECT * from reponse where id=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reponse = $query->fetch();
            return $reponse;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }


    function modifierReponse($reponse, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE reponse SET message = :message, id_reclamation = :id_reclamation WHERE id= :id');
            $query->execute([
                'message' => $reponse->getMessage(),
                'id_reclamation' => $reponse->getIdReclamation(),
                'id' => $id
            ]);
        } catch (Exception $e) {
            die('Erreuer: ' . $e->getMessage());
        }
    }
}
