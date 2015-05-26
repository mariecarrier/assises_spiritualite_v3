<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Inscription - Les Assises de la spiritualité</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="nileforest">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<!-- Favicone Icon -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="icon" type="image/png" href="img/favicon.png">
<link rel="apple-touch-icon" href="img/favicon.png">

<!-- CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/ionicons.css" rel="stylesheet" type="text/css" />
<link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
<link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Hind:400,500,600,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montez|Qwigley' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet" type="text/css">
<link href="styles/cakeform.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/formcalculations.js"></script>


</head>

<body class="full-intro page-sec" onload='rajoutParti();sectionDis();hideTotal();calculateTotal();'>

<section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
    <div class="container">
        <div class="search-wraper">
            <input type="text" class="input-sm form-full" placeholder="Search..." name="search" />
            <a class="search-bar-icon"><i class="fa fa-search"></i></a> <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a> </div>
    </div>
</section>

<div class="wrapper">


<header class="header">
    <div class="container"> 
        
     
        <div class="logo page-sec"> <a href="/assises/index.php"> <img class="l-white l-black l-color" src="img/logo-assises-de-la-spiritualite.png" /> 

            </a> </div>

   
  
     
            <?php
            include 'menu.php'
              ?>
      
        
    </div>
</header>
<section class="inner-intro sub-pages bg-img overlay-light parallax parallax-background2">
    <div class="container">
        <div class="row title"> </div>
    </div>
</section>
<div class="clearfix"></div>

<section class="ptb ptb-sm-80">
<div class="container">
<div class="row">
    <div class="wrapper-box3">
        <div class="col-md-10">
            <h1>Inscription</h1>
   
            <p>Ces deuxièmes Assises de la Spiritualité ont été réalisées grâce au partenariat des Assomptionnistes canadiens, du Montmartre de Québec, des éditeurs québécois Novalis et Médiaspaul, spécialistes en publications spirituelles et des éditions Albin Michel Spiritualité, éditeurs de Jean-Yves Leloup.</p>
       <br>
            <p>Pour vous inscrire et réserver votre place, il vous suffit de remplir le formulaire ci-desous. Si vous voulez payer <strong>par chèque</strong>, veuillez s.v.p. nous téléphoner au <strong>1 866-844-2111 (poste 246</strong>).</p>
         <br>
            <p style="font-weight:bold;">Date limite pour l'inscription : 10 juin 2015</p>
     <br>
            <hr>
            <div style="clear:both"></div>

            <div style="clear:both"></div>
            <div id="participants">
                <h3>Participants</h3>

             <div class="participants-uniques" id="participants-uniques">
             
             
             
             <div class="wrapper">
             <div class="coordonnees">
             <h4>Coordonnées</h4>
             
                <p class="wrapper-input civilite">
                    <label for="courriel">Civilité</label>
                    <br>
                    <select name="dropListCivilite" id="dropListCivilite">
                        <option selected="selected" value="">Sélectionnez</option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </p>
                
                <p class="wrapper-input prenom">
                    <label for="prenom">Prénom</label>
                    <br>
                    <input name="prenom" id="prenom" type="email" class="inputbox form-enregi" alt="prenom" size="18">
                </p>
                
                <p class="wrapper-input nom">
                    <label for="nom">Nom</label>
                    <br>
                    <input name="nom" id="nom" type="text" class="inputbox form-enregi" alt="nom" size="18">
                </p>   

                    <p class="wrapper-input telephone">
                    <label for="telephone">No. de téléphone</label>
                    <br>
                    <span class="paran">( </span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="3" id="mAreaCodeDayTextBox" class="case1">
                    <span class="paran"> )</span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="3" id="mAreaCodeDayTextBox" class="case2">
                    <span class="paran"> - </span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="4" id="mAreaCodeDayTextBox" class="case3">
                </p>
                
                
                
                   
      
                <p class="wrapper-input courriel">
                    <label for="courriel">Courriel</label>
                    <br>
                    <input name="courriel" id="courriel" type="email" class="inputbox form-enregi" alt="username" size="18">
                </p>
                
               
               
              </div>   
         
                
                
               
                <div style="clear:both"></div>
                 <hr class="diviseur">
                
                
                
               
      
          <div id="wrap activites">
        <form action="" id="cakeform" onsubmit="return false;">
        <div class="wrapper-insc">
            <div class="cont_order">
               <fieldset>
    <h4>Activités</h4>
                <label class='radiolabel'><input type="radio" class="ateliervend"  name="selectedcake" value="Round6" onclick="calculateTotal()" />Conférence du vendredi seulement&nbsp;&nbsp;<strong>20$</strong></label><br/>
                <br>
                <div class="wrap-session">
                <h5>Toute la session, conférence incluse :</h5>
                <label class='radiolabel'><input type="radio" class="autres"  name="selectedcake" value="Round8" onclick="calculateTotal()" />Avec repas&nbsp;&nbsp;<strong>105$</strong></label><br/>
                <label class='radiolabel'><input type="radio" class="autres" name="selectedcake" value="Round10" onclick="calculateTotal()" />Sans repas&nbsp;&nbsp;<strong>90$</strong></label><br/>
                </div>
                
                <div class="wrap-session">
                <h5>Tarif étudiant, conférence incluse :</h5>
                <label class='radiolabel'><input type="radio" id="autres2" class="autres" name="selectedcake" value="Round12" onclick="calculateTotal()" />Avec repas&nbsp;&nbsp;<strong>95$</strong></label><br/>
                <label class='radiolabel'><input type="radio" id="autres3" class="autres" name="selectedcake" value="Round13" onclick="calculateTotal()" />Sans repas&nbsp;&nbsp;<strong>80$</strong></label><br/></div>
                <br/>
                
                <div style="clear:both"></div>
                <br>
                 <div class="wrapper-atelier" id="wrapper-atelier">
                <h5>Choix d'atelier :</h5>
               
                <div class="wrap-atelier">
                
                <label class="choix-act">1<sup>er</sup>choix</label>
         
                <select id="filling" name='filling' onchange="calculateTotal()" value='Cliquez ici'>
                <option value="choix1">Corps sacré, corps tabou, corps objet</option>
                <option value="choix2">Le corps qui danse</option>
                <option value="choix3">Un corps pèlerin, un être en déplacement</option>
                <option value="choix4">Le corps qui chante</option>
                <option value="choix5">Quand la Bible dit «corps»</option>
                <option value="choix6">Ce corps que nous sommes</option>
                <option value="choix7">La posture spirituelle: passer par le corps pour atteindre l'Esprit</option>

               </select>
               </div>
         
                <div class="wrap-atelier">
                 <label class="choix-act">2<sup>eme</sup> choix</label>
         
                <select id="filling" name='filling' onchange="calculateTotal()" value='Cliquez ici'>
                <option value="choix1">Corps sacré, corps tabou, corps objet</option>
                <option value="choix2">Le corps qui danse</option>
                <option value="choix3">Un corps pèlerin, un être en déplacement</option>
                <option value="choix4">Le corps qui chante</option>
                <option value="choix5">Quand la Bible dit «corps»</option>
                <option value="choix6">Ce corps que nous sommes</option>
                <option value="choix7">La posture spirituelle: passer par le corps pour atteindre l'Esprit</option>

               </select>
               </div>
               </div>
       
     
                
                </fieldset>
                
                
                
                
            </div>
     
        
         
       </form>
 
       
	</div>  </div>
                 
                 </div>
                 
         
            </div>
            
            
            <div class="participants">
            
            
            </div>

                <p class="wrapper-input bouton-rajout">
                    <input name="bouton-rajout" id="bouton-rajout" type="submit" class="inputbox rajout" alt="username" size="18"value="Rajouter un participant">
                </p>
                <br>
           
            
            <div style="clear:both"></div>
         
         
             <div class="wrapper-total">
                <div class="">
                <h6>Total de la commande<span id="totalPrice"></span>
                    </h6>   
                 </div>      
            </div>
                 <div style="clear:both"></div>
           
            <div class="inscription">
                <h3>Coordonnées du payeur</h3>
                <div style="clear:both"></div>
                
                <div class="wrapper-paiement">
                <p class="type-carte">
                    <label for="type-carte">Type de carte</label>
                    <br>
                <form action="">
                    <div class="carte">
                        <input type="radio" name="type-carte" value="Visa" class="radio-but">
                        &nbsp;Visa</div>
                    <br>
                    <div class="carte">
                        <input type="radio" name="type-carte" value="Mastercard" class="radio-but">
                        &nbsp;Mastercard</div>
                </form>
                </p>
                <br>
                <div style="clear:both"></div>
                <p class="no-carte">
                    <label for="no-carte">Numéro de la carte</label>
                    <br>
                    <input name="no-carte" id="no-carte" type="email" class="inputbox form-enregi" alt="no-carte" size="18">
                </p>
                <p class="expiration">
                    <label for="expiration">Date d'expiration</label>
                    <br>
                    <select name="mois" class="mois">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span class="paran">/</span>
                    <select name="annees" id="annees" class="annees">
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </p>
                <div style="clear:both"></div>
                </div>
                
                <div style="clear:both"></div>
                <p class="wrapper-input civilite">
                    <label for="courriel">Civilité</label>
                    <br>
                    <select name="dropListCivilite" id="dropListCivilite">
                        <option selected="selected" value="">Sélectionnez</option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </p>
                <p class="wrapper-input prenom">
                    <label for="prenom">Prénom</label>
                    <br>
                    <input name="prenom" id="prenom" type="email" class="inputbox form-enregi" alt="prenom" size="18">
                </p>
                <p class="wrapper-input nom">
                    <label for="nom">Nom</label>
                    <br>
                    <input name="nom" id="nom" type="text" class="inputbox form-enregi" alt="nom" size="18">
                </p>
                <p class="wrapper-input adresse">
                    <label for="adresse">Adresse</label>
                    <br>
                    <input name="adresse" id="adresse" type="text" class="inputbox form-enregi" alt="adresse" size="18">
                </p>
                <p class="wrapper-input ville">
                    <label for="ville">Ville</label>
                    <br>
                    <input name="ville" id="ville" type="text" class="inputbox form-enregi" alt="ville" size="18">
                </p>
                <p class="wrapper-input province">
                    <label for="province">Province</label>
                    <br>
                    <select name="cmbProvince" id="cmbProvince" class="textbox">
                        <option value="AB"> Alberta</option>
                        <option value="BC"> Colombie-Britannique</option>
                        <option value="MB"> Manitoba</option>
                        <option value="NB"> Nouveau-Brunswick</option>
                        <option value="NL"> Terre-Neuve-et-Labrador</option>
                        <option value="NT"> Territoires du Nord-Ouest</option>
                        <option value="NS"> Nouvelle-Écosse</option>
                        <option value="NU"> Nunavut</option>
                        <option value="ON"> Ontario</option>
                        <option value="PE"> Île-du-Prince-Édouard</option>
                        <option selected="selected" value="QC"> Québec</option>
                        <option value="SK"> Saskatchewan</option>
                        <option value="YT"> Yukon</option>
                    </select>
                </p>
                <p class="wrapper-input code-postal">
                    <label for="code-postal">Code postal</label>
                    <br>
                    <input name="code-postal" id="code-postal" type="text" class="inputbox form-enregi" alt="code-postal" size="18">
                </p>
                <p class="wrapper-input telephone">
                    <label for="telephone">No. de téléphone</label>
                    <br>
                    <span class="paran">( </span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="3" id="mAreaCodeDayTextBox" class="case1">
                    <span class="paran"> )</span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="3" id="mAreaCodeDayTextBox" class="case2">
                    <span class="paran"> - </span>
                    <input name="mAreaCodeDayTextBox" type="text" maxlength="4" id="mAreaCodeDayTextBox" class="case3">
                </p>
                <p class="wrapper-input courriel">
                    <label for="courriel">Courriel</label>
                    <br>
                    <input name="courriel" id="courriel" type="email" class="inputbox form-enregi" alt="username" size="18">
                </p>
                <p class="wrapper-input courriel">
                    <label for="courriel">Confirmation du courriel</label>
                    <br>
                    <input name="courriel" id="courriel" type="email" class="inputbox form-enregi" alt="courriel" size="18">
                </p>
                
                <div style="clear:both"></div>
                   <p class="wrapper-input infolettre">
                    <label for="infolettre" style="font-weight:bold;">Recevez nos communiqués électroniques</label>
                    <br>
                <form action="">
                    <div class="wrapper-input infolettre">
                        <input type="checkbox" name="infolettre" value="Visa" class="checkbox">
                        &nbsp;Oui, je souhaite recevoir des nouvelles des nouveautés, promotions, concours et événements des <strong>Éditions Novali</strong>s. <br> <br>
                          <div style="clear:both"></div>
                         <input type="checkbox" name="infolettre" value="Visa" class="checkbox">
                        &nbsp;Oui, je souhaite recevoir  des nouvelles des nouveautés, promotions, concours et événements de <strong>Bayard Presse Canada Inc. (Bayard Canada Livres, Prions en Église, Novalis Service aux Paroisses)</strong>.  <br>  <br><div style="clear:both"></div>
                        
                         <input type="checkbox" name="infolettre" value="Visa" class="checkbox">
                        &nbsp;Oui, je souhaite recevoir des nouvelles des nouveautés, promotions, concours et événements des <strong>Partenaires des Éditions Novalis soigneusement sélectionnés</strong>.
                  
                </form>
                
                
                
                </p>
                <br>
                <br>
                  <p class="wrapper-input payer">
                    <input name="bouton-rajout" id="bouton-rajout" type="submit" class="inputbox payer-but" alt="username" size="18"value="Soumettre">
                </p>
                
                
            </div>
            
         
            
        </div>
    </div>
    </section>

    

    <hr />
    


 
            <?php
            include 'footer.php'
              ?>

 
    <a class="scroll-top"> <i class="fa fa-angle-double-up"></i> </a> 

    
</div>


 <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

<!--<script src="js/jquery-ui.min.js" type="text/javascript"></script> 

<script src="js/plugin/jquery.easing.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script> 
<script src="js/plugin/background-check.min.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script> 
<script src="js/plugin/wow.min.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script> 
<script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script> 
<script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script> 
<script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script> 
<script src="js/plugin/jPushMenu.js" type="text/javascript"></script> 
<script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script> 
<script src="js/plugin/mediaelement-and-player.min.js"></script> 
<script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script> 
<script src="js/theme.js" type="text/javascript"></script> 
<script src="js/navigation.js" type="text/javascript"></script>!-->
</body>
</html>
