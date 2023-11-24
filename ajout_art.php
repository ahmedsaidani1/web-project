<?php
include 'connexion.php';
var_dump($_POST);

if (
   !empty($_POST['nom_article'])
&& !empty($_POST['categorie'])
&& !empty($_POST['Quantite'])
&& !empty($_POST['prix_unitaire'])
&& !empty($_POST['date_fabrication'])
&& !empty($_POST['date_expiration'])
) {
 $sql="INSERT INTO $nom_base_donne.article(nom_article,categorie,Quantite,prix_unitaire,date_fabrication,date_expiration)
     value (?,?,?,?,?,?) ";
     $req=$connexion->prepare($sql);
     $req->execute(array(
        $_POST['nom_article'],
        $_POST['categorie'],
        $_POST['Quantite'],
        $_POST['prix_unitaire'],
        $_POST['date_fabrication'],
        $_POST['date_expiration']
     ));
   if ($req->rowCount()!=0) {
    $session ['message']['text']="article ajouté avec succés";
    $session ['message']['type']="success";

   }else {
    $session ['message']['text']="une erreur s'est produit lors de l'ajout";
    $session ['message']['type']="danger";
          }

} else {
    $session ['message']['text']="une information obligatoire non rensigné";
    $session ['message']['type']="danger";
}
header('location:../view/index2.php');