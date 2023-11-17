<?php
    include '../Model/reclamation.php';
    include '../Controller/reclamationC.php';


    $error = "";
    // create user
    $reclamation = null;
    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST["submit"])     
    ) {
            $reclamation = new reclamation(
                $_POST["name"],
                $_POST["object"],
                $_POST["message"]
            );
			$reclamationC->ajouterReclamation($reclamation);
    }  
	


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NutriPeak</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="menu_sitbar">
            <ul class="menu">
               <li><button type="button" >
                  <img onclick="openNav()" src="images/menu_icon.png" alt="#"/>
                  </button>
               </li>
            </ul>
            <ul class="social_icon">
               <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
         </div>
         <div class="header_full_bg">
            <div class="header_top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" alt="#"/></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="banner_text">
                           <h1>Pro<br> Body Builder Protien</h1>
                           <a class="get_btn" href="#about" role="button" >About Protien</a> <a class="get_btn" href="#contact" role="button">Contact Us</a>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <img class="bann_img" src="images/banner_ing.png" alt="#"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Déposez Votre Réclamation</h2>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Réclamations</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method="POST">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Object" type="type" name="object"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button name="submit" class="send_btn" type="submit">Envoyer</button>
                        </div>
                     </div>
                  </form>
               </div>
               
               <div class="col-md-5 offset-md-1">
                  
                  <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">ID Réc.</th>
                         <th scope="col" colspan="3">Objet</th>
                         <th scope="col">Date</th>
                         <th scope="col">Etat</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td scope="col" colspan="3"></td>
                         <td></td>
                         <td></td>
                       </tr>
                       <tr>
                         <th scope="row">2</th>
                         <td scope="col" colspan="3"></td>
                         <td></td>
                         <td></td>
                       </tr>
                       <tr>
                         <th scope="row">3</th>
                         <td scope="col" colspan="3"></td>
                         <td></td>
                         <td></td>
                       </tr>
                       <tr>
                         <th scope="row">4</th>
                         <td scope="col" colspan="3"></td>
                         <td></td>
                         <td></td>
                       </tr>
                     </tbody>
                   </table>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>