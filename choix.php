
<?php
    // Démarrer la session
    if(session_status() == PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Esisalama</title> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link href="assets/css/esisalama.min.css" rel="stylesheet" type="text/css" /> 
        <link href="assets/img/favicon.png" rel="icon" type="image/png" /> 
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" /><![endif]--> 
    </head> 
    <body> <!-- Barre de navigation/menu --> 
        <nav class="navbar navbar-inverse navbar-fixed-top"> 
            <div class="container"> <!-- Logo et bouton toggle --> 
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="index.php"> 
                        <img src="assets/img/logo.png" alt="logo"/> 
                    </a> 
                    <span class="visible-xs titre-site" id="titre-site-xs">E.S.I.S.</span> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button> 
                </div> <!--/.navbar-header--> 
                <!-- Contenu menu/navigation --> 
                <div class="collapse navbar-collapse" id="collapse-1"> 
                    <p class="navbar-left visible-lg titre-site"> Ecole Supérieure d'Informatique Salama </p> 
                    <p class="navbar-left visible-sm visible-md titre-site"> E.S.I.S. </p> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li role="presentation" class=""> 
                            <a href="index.php" id="menu-accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a> 
                        </li>
                        <li class="dropdown active" role="presentation"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> 
                                <span class="glyphicon glyphicon-book"></span> Education <span class="caret"></span> 
                            </a> 
                            <ul class="dropdown-menu"> 
                                <!--<li><a href="index.php?module=calendrier">Calendrier académique</a></li>--> 
                                <li><a href="horaire.html">Horaire des cours</a></li> 
                                <li><a href="gestion-tfc.html">TFC</a></li>
                                <!--<li><a href="index.php?module=apropos&amp;onglet=cursus#filieres">Filières</a></li>--> 
                                <li><a href="centred'excellence.html">Centre d'Excellence</a></li> 
                                <li><a href="bibliotheque.html">Bibliothèque</a></li> 
                                <li><a href="https://esisalama.app" target="_blank">Résultats Académiques</a></li> 
                                <li><a href="https://script.google.com/a/macros/esisalama.org/s/AKfycbxtpNT6IbxrkHwV8fMTOQZLomGfk8fKRyob9QnChn5ex2wQ_bOpbVMEgb2dllogf8qMIg/exec" target="_blank">Recours</a></li> 
                                <li><a href="https://www.esisalama.net/elearning/" target="_blank">E-learning</a></li> 
                                <!--<li><a href="https://recours.credia.io" target="_blank">Recours</a></li>--> <!--<li><a href="https://colibris.credia.io" target="_blank">Suivi TFC</a></li>--> 
                                <!--<li><a href="https://jsesis2022.esisalama.com/js3sis2022/">Journée Scientifique 2022</a></li>--> 
                                <li><a href="https://jsesis2022.esisalama.com/jsEsis/2023/">Journée Scientifique 2023</a></li>
                                <li><a href="connexion-tfc.php">admin</a></li>
                            </ul> 
                        </li> 
                        <li role="presentation" class=""> 
                            <a href="index.php?module=actualite" id="menu-actualite"><span class="glyphicon glyphicon-list-alt"></span> Actualités</a> 
                        </li> 
                        <li role="presentation" class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"> 
                                <span class="glyphicon glyphicon-info-sign"></span> A propos d'esis 
                                <span class="caret"></span> 
                            </a> 
                            <ul class="dropdown-menu" id="menu-a-propos"> 
                                <li><a href="presentation.html">Présentation</a></li> 
                                    <li><a href="cursus.html">Cursus</a></li> 
                                    <li><a href="admin.html">Admission</a></li> 
                                    <li><a href="contact.html">Nous contacter</a></li>
                            </ul> 
                        </li> 
                    </ul> 
                </div> <!--/.collapse--> 
            </div> <!--/.container--> 
        </nav> <!-- Facebook Pixel Code --> 
         
        <!-- End Facebook Pixel Code --> <!--Titre de la page --> 
        <div class = "container-fluid titre-page titre-fixe-on"> 
            <div class = "row"> <div class = "col-xs-12 col-sm-6"> 
                <h1> <span class = "glyphicon glyphicon-list-alt"></span>  COMMENTAIRE SUR LE SUJET </h1> 
            </div> 
            <div class = "col-xs-12 col-sm-6 text-right">
                <ol class = "breadcrumb">
                    <li><a href = "espaceEtudiant.html">connexion</a></li>
                    <li>Espace Etudiant</li>
                </ol>
            </div> 
        </div> 
    </div> 
    <br><br><br><br><br>
    <?php 
    require_once 'back/config.php';
    $idSuject= $_GET['idSuject'];
   
    ?>
    <form action=""  methode="post">
    <div class="input-group mb-5" style="width: 800px; align-items: center; margin-left: 30vh; padding: 90px; margin:none;">
            <div class="input-group-append ">
              <span class="input-group-text">
              <div class="form-group">
  <p>
    <textarea name="commentaire" id="username" style="width: 80vh; text-align: center;" type="text" class="form-control" placeholder="commentaire sur le sujet"></textarea>

</p>


</div>
            </span>
            </div><br><br><br>
            <a href="admin.php?idSuject='.$idSuject.'" class="btn btn-primary" role="button">ENVOYER</a> 
          </div> 
        </div>
        </form>
        




    
    <!-- Inclusion fichiers JavaScript --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <!--<script src="assets/js/esisalama.min.js" type="text/javascript"></script>--> 
    <!-- to delete --> 
    <script src="assets/js/global.js" type="text/javascript"></script> 
    <script src="assets/js/accueil.js" type="text/javascript"></script> 
    <script src="assets/js/admin.js" type="text/javascript"></script> 
    <script src="assets/js/apropos.js" type="text/javascript"></script> 
    <script src="assets/js/calendrier.js" type="text/javascript"></script> 
    <script src="assets/js/horaire.js" type="text/javascript"></script> <!-- to delete --> <!-- Ferméture Body & html --> 
</body> 
</html>