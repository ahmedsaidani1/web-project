<?php
session_start();
include_once'../Model/function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion  de stock</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style2.css">

</head>
<!-- body -->

<body class="home-content">
    <div class="overview-boxes">
        <div class="box">
         <form action="../model/ajout_art.php" method="post">
         <label for="nom_article">nom de l'article </label>
            <input type="text" name="nom_article" id="nom_article" placeholder="veuilez saisir le nom">

            <label for="categorie">categorie </label>
           <select name="categorie" id="categorie">
            <option value="ordinateur">ordinateur</option>
            <option value="imprimante">imprimante</option>
            <option value="accessoire">accessoire</option>
           </select>

            <label for="Quantite">Quantite</label>
            <input type="text" name="Quantite" id="Quantite" placeholder="veuilez saisir la quantite">

            <label for="prix_unitaire">prix</label>
            <input type="text" name="prix_unitaire" id="prix_unitaire" placeholder="veuilez saisir le prix">

            <label for="date_fabrication">date de fabrication</label>
            <input type="datetime-local" name="date_fabrication" id="date_fabrication">

            
            <label for="date_expiration">date d'expiration'</label>
            <input type="datetime-local" name="date_expiration" id="date_expiration">
            <button type="submit">valider</button>
            <?php
              if (!empty($_SESSION['message']['text'])){
              ?>                
             <div class="alert<?=$_SESSION['message']['type']?>">
             <?=$_SESSION['message']['text']?>
             
             </div>
            <?php
              }
            ?>
            

         </form>
            
         
        </div>
        <div class="box">
          <table class="mtable">
            <tr>
                <th>nom article </th>
                <th>catégorie </th>
                <th>quantité</th>
                <th>prix unitaire </th>
                <th>date fabrication </th>
                <th>date expiration</th>
                <th>action</th>

            </tr>
             <?php
             $article=getarticle();
             if (!empty($article) && is_array($article)){
              foreach ($article as $key=>$value)
              ?>
              <tr> 
                <td><?=$value['nom_article']?></td>
                <td><?=$value['categorie']?></td>
                <td><?=$value['quantite']?></td>
                <td><?=$value['prix_unitaire']?></td>
                <td><?=$value['date_expiration']?></td>
                <td><?=$value['date_fabrication']?></td>
                <td><a href="?id=<?=$value['id']?>"><box-icon name='edit-alt' type='solid' ></box-icon></a></td>
              </tr>
              <?php
             }
             ?>
          </table> 

        </div>
    </div>

 

</body>

</html>