<?php 
    require 'back/config.php';
    if(session_status() == PHP_SESSION_NONE) session_start();
    $connect= isset($_SESSION["matricule"]);
    $matricule=$_SESSION["matricule"] ?? null;

?>
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
    <body> <!-- $ de navigation/menu --> 
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
                        <li role="presentation" class="none"> 
                            <a href="gestion-tfc.html" id="gestion-tfc"><span class="glyphicon glyphicon-book"></span> TFC</a> 
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
                                <li><a href="index.php?module=apropos&amp;onglet=presentation">Présentation</a></li> 
                                <li><a href="index.php?module=apropos&amp;onglet=cursus">Cursus</a></li> 
                                <li><a href="index.php?module=apropos&amp;onglet=admission">Admission</a></li> 
                                <li><a href="index.php?module=apropos&amp;onglet=contact">Nous contacter</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                </div> <!--/.collapse--> 
            </div> <!--/.container--> 
        </nav> <!-- Facebook Pixel Code --> 
        <script> 
        !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];
        t=b.createElement(e);
        t.async=!0; 
        t.src=v;s=b.getElementsByTagName(e)[0]; 
        s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); 
        fbq('init', '619752102038038'); 
        fbq('track', 'PageView'); 
        </script> 
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=619752102038038&ev=PageView&noscript=1" />
        </noscript> 
        <!-- End Facebook Pixel Code --> <!--Titre de la page --> 
        <div class = "container-fluid titre-page titre-fixe-on"> 
            <div class = "row"> <div class = "col-xs-12 col-sm-6"> 
                <h1> <span class = "glyphicon glyphicon-list-alt"></span> Sujet de TFC </h1> 
            </div> 
            <div class = "col-xs-12 col-sm-6 text-right">
                <ol class = "breadcrumb">
                    <li><a href = "connexion-tfc.html">inscription</a></li>
                    <li><a href = "login.html">login</a></li>
                </ol>
            </div> 
        </div> 
    </div> 
    <?php if($connect):?>
        <div class="container-fluid cadre-principal"> 
            <div class="container"> 
                <section class="blog">
                    <div class="container">
                        <div class="row">	
                            <div id="compte_a_rebours" class="alert alert-info alert-dismissible"><noscript>ISIG-GOMA :: Compte à rebours d'introduction de sujet.</noscript></div>
                                <script type="text/javascript">
                                    function compte_a_rebours()
                                    {
                                        var compte_a_rebours = document.getElementById("compte_a_rebours");
                                        
                                        var date_actuelle = new Date();
                                        var date_evenement = new Date("2023-08-05");
                                        var total_secondes = (date_evenement - date_actuelle) / 1000;
                                        
                                        var prefixe = "<font color='green'>!! ATTENTION !! L'introduction de sujet pour l'année académique 2022-2023 prendra fin dans ";
                                        
                                        if (total_secondes < 0)
                                        {
                                            prefixe = "<font color='red'>!! ATTENTION !! L'introduction de sujet pour l'année académique 2022-2023 s'est terminé il y a </font>"; // On modifie le préfixe si la différence est négatif
                                            total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
                                        }
                                        if (total_secondes > 0)
                                        {
                                            var jours = Math.floor(total_secondes / (60 * 60 * 24));
                                            var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
                                            minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
                                            secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));
                                            var et = "et";
                                            var mot_jour = "jours,";
                                            var mot_heure = "heures,";
                                            var mot_minute = "minutes,";
                                            var mot_seconde = "secondes";
                                        
                                            if (jours == 0)
                                            {
                                                jours = '';
                                                mot_jour = '';
                                            }
                                            else if (jours == 1)
                                            {
                                            mot_jour = "jour,";
                                            }
                                            if (heures == 0)
                                            {
                                                heures = '';
                                                mot_heure = '';
                                            }
                                            else if (heures == 1)
                                            {
                                                mot_heure = "heure,";
                                            }
                                            if (minutes == 0)
                                            {
                                                minutes = '';
                                                mot_minute = '';
                                            }
                                            else if (minutes == 1)
                                            {
                                                mot_minute = "minute,";
                                            }
                                            if (secondes == 0)
                                            {
                                            secondes = '';
                                            mot_seconde = '';
                                            et = '';
                                            }
                                            else if (secondes == 1)
                                            {
                                            mot_seconde = "seconde";
                                            }
                                            if (minutes == 0 && heures == 0 && jours == 0)
                                            {
                                            et = "";
                                            }
                                            
                                            compte_a_rebours.innerHTML = prefixe +' <font color="blue"><b> '+ jours + '</font> ' + mot_jour + ' </b><font color="blue"><b> ' + heures + ' </u></font> ' + mot_heure + ' <font color="blue"><b> ' + minutes + ' </u></font> ' + mot_minute + ' ' + et + ' <font color="blue"><b>  ' + secondes + '</font></b> ' + mot_seconde+' </b>';
                                            }
                                            else
                                            {
                                            compte_a_rebours.innerHTML = '<font color="green">!! ATTENTION !! L\'introduction de Sujet pour l\'année académique 2022-2023 est terminée.</font>';
                                            }
                                            var actualisation = setTimeout("compte_a_rebours();", 1000);
                                            }
                                        compte_a_rebours();
                                </script>		
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
            <div class = "col-xs-12 col-sm-12 text-right">
                <ol class = "breadcrumb">
                
                        <li><a href="ficheSuject.php" class="btn btn-danger">Déposer un sujet</a></li>
                        <li><a href="back/logout.php">logout</a></li>
                        
                </ol>
            </div> 
             <?php endif?>
            
            <div class= "breadcrumb" style="margin-top: 70px ">
                <form  method="post">
                    <input type="text" name="mot_cle" placeholder="Mot clé">
                    <input type="submit" value="Rechercher">
                </form>
            </div>
           
            <?php
            
             require 'back/config.php';
           
            
                $sql = 'SELECT e.idSuject,e.intitule,  e.annAcad, s.matricule,s.nom, s.postnom, s.prenom
                FROM suject e
                JOIN etudiant s ON e.matricule = s.matricule';
                $result = $pdo->query($sql);
                $results=$result->fetchAll();


         
                if (isset($_POST['mot_cle'])){
                    
                    $mot_cle = $_POST['mot_cle'];

                    

                    // Exécution de la requête SQL
                    $sql = 'SELECT e.idSuject, e.intitule, e.annAcad, s.nom, s.postnom, s.prenom,s.matricule
                    FROM suject e
                    JOIN etudiant s ON e.matricule = s.matricule
                    WHERE e.intitule LIKE  :mot_cle';
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute(["mot_cle"=>'%'.$mot_cle.'%']);
                    $results=$stmt->fetchAll();
                }
        

                echo '<table id="user_data" class="table table-bordered table-striped" border="1" style="width:100%;align:right;font-size:13px; border-style:solid; border-color:red;border-collapse:collapse">';
                echo "<tr><th>intitule</th><th>annAcad</th><th>nom</th><th>postnom</th><th>prenom</th></tr>";

                foreach ($results as $suject) {
                    echo '<tr>';
                        echo '<td>' . $suject['intitule'] . '</td>';
                        echo '<td>' . $suject['annAcad'] . '</td>';
                        echo '<td>' . $suject['nom'] . '</td>';
                        echo '<td>' . $suject['postnom'] . '</td>';
                        echo '<td>' . $suject['prenom'];
                        if ($connect){
                            if ($suject['matricule']==$matricule){
                                $idSuject=$suject['idSuject'];
                                echo '<a href="back/delete.php?idSuject='.$idSuject.'"><img src="assets/img/poubelle.png" alt="delete" style="width: 30px;"></a>';
                            }
                        }
                        echo "</td>";
                    echo '</tr>';
                    }
                echo '</table>';
                // Fermeture de la connexion à la base de données
                $conn->close();

            ?>

            <script type="text/javascript" language="javascript" >
            $(document).ready(function(){
                $('#add_button').click(function(){
                    $('#user_form')[0].reset();
                    $('.modal-title').text("Ajouter TFC");
                    $('#action').val("Add");
                    $('#operation').val("Add");
                    $('#user_uploaded_image').html('');
                });
                
                var dataTable = $('#user_data').DataTable({
                    "processing":true,
                    "serverSide":true,
                    "order":[],
                    "ajax":{
                        url:"https://isig.ac.cd/loaddata.php?action=load_tfc",
                        type:"POST"
                    },
                    "columnDefs":[
                        {
                            "targets":[-1,-2,-3],
                            "orderable":false,
                        },
                    ],
            
                });	
            });
            </script>		
                <script>
            function loadDynamicContentModal(modal){
                var options = {
                        modal: true,
                        height:300,
                        width:500
                    };
                $('#demo-modal').load('https://isig.ac.cd/loaddata.php?action=tfc-detail&modal='+modal, function() {
                    $('#bootstrap-modal').modal({show:true});
                });    
            }
            </script>		
                                        
                                      
                        </div>
            
                                
                                      </div>
                                  </div>
                            </div>
                    </div>
                </div>
            </section>
             
        </div> 
    </div><!-- Pied de page --> 
    <footer> 
        <div class="container-fluid"> 
            <div class="row" id="bloc-info-plus"> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">COORDONNEES</h3> 
                    <p> République Démocratique du Congo (RDC)<br /> 
                        <span class="glyphicon glyphicon-earphone"></span> +(243) 82 226 74 72<br /> 
                        <a href="mailto:info@esisalama.org"> 
                            <span class="glyphicon glyphicon-envelope"></span> info@esisalama.org 
                        </a> 
                    </p> 
                </div> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">QUELQUES LIENS UTILES</h3> 
                    <p><a href="index.php?module=horaire" >Horaires des cours</a></p> 
                    <!--<p><a href="index.php?module=calendrier" >Calendrier académique</a></p>--> 
                    <p><a href="index.php?module=actualite" >Voir actualités</a></p> 
                </div> 
                <div class="col-xs-12 col-md-4"> 
                    <h3 class="titre-pied">RESTONS CONNECTES</h3> 
                    <p> 
                        <a href="https://www.google.com" target="_blank"> 
                            <img src="assets/img/autres/GooglePlus.svg" alt="logo GooglePlus" /> 
                        </a> 
                        <a href="https://www.facebook.com/EsisOfficiel" target="_blank"> 
                            <img src="assets/img/autres/Facebook.svg" alt="logo Facebook" /> 
                        </a> 
                        <a href="https://www.youtube.com/channel/UCtDV8isvHNC0fli1FjYB-Xw" target="_blank"> 
                            <img src="assets/img/autres/Youtube.svg" alt="logo Youtube" /> 
                        </a> 
                    </p> 
                </div> 
            </div> 
        </div> 
        <div class="container" id="bloc-copyright"> 
            <div class="row"> 
                <div class="col-xs-12"> Copyright &copy; ESISALAMA 2023 </div> 
            </div> 
        </div> 
    </footer> 
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