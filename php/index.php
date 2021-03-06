<!DOCTYPE html> <!-- Défini la page en HTML-->

<html lang="fr"> <!-- Langue de la page -->

    <head> <!-- Information importante pour la page link/include/etc..-->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook - Connexion ou inscription</title> <!-- Titre de l'onglet-->
    <link rel="stylesheet" href="../css/reset.css"> <!-- reset pour remettre à zéro le css du navigateurs-->
    <link rel="stylesheet" href="../css/style.css"> <!--lien vers style.css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

    <link rel="icon" type="ico" href="../img/social-facebook-button-blue-icon.ico"/> 
    <!-- Favicon pour la barre de recherche, le . avant le /img/ permet de remonter dans le dossier actuel-->

    </head>
    <body> <!-- Corps du document-->
    <div class="bloc">
            <header> 
                
                    <img class="logo"  src="../img/facebook.svg">
                    <span class="welcome">Avec Faceboook, partagez et restez en contact avec votre entourage.</span>

            </header>

            <aside>
                <div>
                    <form action="" method="GET" class="form"> 
                        <!--formulaire de connexion/inscription-->

                        <label for="email/numerotel"></label> 
                        <!-- label représente une légende pour un objet ici email/numero de tel-->

                        <input class="input" type="text" name="identifiant" id="email/numerotel" placeholder="Adresse e-mail ou numéro de tél."> 
                        <!-- input est utilisé pour créer un contrôle interactif dans un formulaire, placeholder permets de mettre un text qui sera remplacé par le text de user-->

                        <label for="Mot de passe"></label> 
                        <!-- label représente une légende pour un objet ici email/numero de tel-->

                        <input class="input" type="password" name="mot de passe" id="password" minlength="8" placeholder="Mot de passe"> 
                        
                        <!-- input est utilisé pour créer un contrôle interactif dans un formulaire, placeholder permets de mettre un text qui sera remplacé par le text de user-->

                        <a class="button_connexion" type="button" href="./home.php">Se connecter</a>
                         <!-- button permets de soumettre un formulaire-->

                        <br> <!-- br est là pour le saut de ligne-->

                        <a class="forgotpassword" href="https://fr-fr.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMyODE2Njc1LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&ars=facebook_login">Mot de passe oublié ?</a> 
                        <!-- href renvoie sur une autre page ici #-->
                        <br>
                        <button class="createAccount" type="button">Créer nouveau compte</button>
                         <!-- button permets de soumettre un formulaire-->
                    </form>
                    <div><a href="https://fr-fr.facebook.com/pages/create/?ref_type=registration_form" class="createElement">Créer une Page</a> pour une célébrité, un groupe ou une entreprise</div>
                </div>
            </aside>
        </div>       
        </body>
    
    <footer>
        <div class="link">
        <!--onglets avec les langues dans une nav avec des ≤a-->
        <ul class="langue">
            <li><a href="">Fançais (France)</a></li>
            <li><a href="https://www.facebook.com/">English (US</a></li>
            <li><a href="https://es-la.facebook.com/">Espanol</a></li>
            <li><a href="https://tr-tr.facebook.com/">Türkçe</a></li>
            <li><a href="https://pt-pt.facebook.com/">Português (Portugal)</a></li>
            <li><a href="https://ar-ar.facebook.com/">العربية</a></li>
            <li><a href="https://it-it.facebook.com/">Italiano</a></li>
            <li><a href="https://de-de.facebook.com/">Deutsch</a></li>
            <li><a href="https://hi-in.facebook.com/">हिन्दी</a></li>
            <li><a href="https://zh-cn.facebook.com/">中文(简体)</a></li>
            <li><a href="https://ja-jp.facebook.com/">日本語</a></li>
        </ul>
        <div class="liseret"></div>
        <ul class="mentions">
            <li><a href="https://fr-fr.facebook.com/r.php">S'inscrire</a></li>
            <li><a href="https://fr-fr.facebook.com/login/">Se connecter</a></li>
            <li><a href="https://fr-fr.messenger.com/">Messenger</a></li>
            <li><a href="https://fr-fr.facebook.com/lite/">Facebook Lite</a></li>
            <li><a href="https://fr-fr.facebook.com/watch/">Watch</a></li>
            <li><a href="https://fr-fr.facebook.com/places/">Lieux</a></li>
            <li><a href="https://fr-fr.facebook.com/games/">Jeux</a></li>
            <li><a href="https://fr-fr.facebook.com/marketplace/">Marketplace</a></li>
            <li><a href="https://pay.facebook.com/">Facebook Pay</a></li>
            <li><a href="https://fr-fr.facebook.com/jobs/">Offres d'emploi</a></li>
            <li><a href="https://www.oculus.com/">Oculus</a></li>
            <li><a href="https://portal.facebook.com/"> Portal</a></li>
            <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&h=AT2K7bsXmtyHgR0AXU1eKNXmstHD2E3tNoUG3i3Dkb6bJbhydQp6Fh66QLLOkNBzwG0JpwLmcJml4TvBs-PqOguFJoQfbY-Xyxhv6rqcMhvPpu-gH7R6zGimDYFwEFwEYjoaI4A7moXIjg">Instagram</a></li>
            <li><a href="https://fr-fr.facebook.com/local/lists/245019872666104/">Local</a></li>
            <li><a href="https://fr-fr.facebook.com/fundraisers/">Collectes de Fonds</a></li>
            <!-- <li><a href="https://fr-fr.facebook.com/biz/directory/">Services</a></li> -->
            <li><a href="https://fr-fr.facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D">Centre d'information sur les élections</a></li>
            <li><a href="https://about.facebook.com/"><span class="upperCase">à</span> propos</a></li>
            <li><a href="https://fr-fr.facebook.com/ad_campaign/landing.php?placement=pflo&campaign_id=402047449186&nav_source=unknown&extra_1=auto">Créer une publicité</a></li>
            <li><a href="https://fr-fr.facebook.com/pages/create/?ref_type=site_footer">Créer une page</a></li>
            <li><a href="https://developers.facebook.com/?ref=pf">Développeurs</a></li>
            <li><a href="https://fr-fr.facebook.com/careers/?ref=pf">Emplois</a></li>
            <li><a href="https://fr-fr.facebook.com/privacy/explanation">Confidentialité</a></li>
            <li><a href="https://fr-fr.facebook.com/policies/cookies/">Cookies</a></li>
            <li><a href="https://fr-fr.facebook.com/help/568137493302217">Choisir sa pub</a></li>
            <li><a href="https://fr-fr.facebook.com/policies?ref=pf">Conditions générales</a></li>
            <li><a href="https://fr-fr.facebook.com/help/?ref=pf">Aides</a></li>
         </ul>
        <span class="FacebookLogo">Facebook &copy; 2021</span>
    </div>
    </footer>



</html>
