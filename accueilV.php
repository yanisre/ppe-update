<?php
session_start();
require_once ("fonctions.php");
 ?>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ALU-MÉ</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />

 </head>
 <body>
     <link rel="stylesheet" type="text/css" media="screen" href="header.css">
 <link rel="stylesheet" type="text/css" media="screen" href="style.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600" rel="stylesheet">

 <header class="header">
     <a href="#"><div class="info">
         <img class="info-box info-img" src="logo.png" alt="Logo de l'entreprise"/>
         <h1 class="info-box info-title">ALU-MÉ</h1>
     </div></a>

     <nav class="header-box">
         <ul class="nav">
             <li class="list"><a class="link" href="#">Accueil</a></li>
             <!--<li class="list"><a class="link" href="partiel-sisr1-sisr2.pdf" download="partiel-sisr1-sisr2.pdf">Download</a></li>-->
             <li class="list"><a class="link" href="produitV.php">Produits</a></li>
                                         <li class="list"><a class="link" href="ContactV.php">Contact</a></li>
                     </ul>
     </nav>


             <div class="btn-right">
                 <a class="btn-style link" href="Connexion.php">Se connecter</a>
             </div>
             <div class="btn-left">
                 <a class="btn-style link" href="inscription.php">S'inscrire</a>
             </div>

 </header>



 <div class="bg">
      <h2 class="bg-title">ALU-MÉ</h2>
      </div>

</br>


<section class="section-intro center">
        <h2 class="section-title">Qu'est ce que ALU-MÉ ?</h2>
        <p class="section-text">La société ALU-MÉ, dont le siège social est à Marseille,
        est une grande entreprise spécialisée dans la menuiserie aluminium (portes, fenêtres, loggias, etc.).
        Elle travaille sur commande (appelé PROJET) de gros clients, pour équiper entièrement un immeuble par exemple.</p>
    </section>

</b>
</big></p>
</br></br></br></br>
</br></br></br></br>
<link rel="stylesheet" type="text/css" media="screen" href="footer.css">
<link rel="stylesheet" type="text/css" media="screen" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600" rel="stylesheet">
<footer class="footer">
    <div class="footer-container">
        <div class="container-box">
            <img class="box-img" src="logo.png" alt="Logo de l'entreprise"/>
            <h1 class="box-title">ALU-MÉ</h1>
        </div>
        <div class="container-box">
            <a class="link box-link" href="https://www.instagram.com/"><img class="footer-img-link" src="insta.png" alt="Instagram"/></a>
            <a class="link box-link" href="https://twitter.com/"><img class="footer-img-link" src="twi.png" alt="Logo de Twitter"/></a>
            <a class="link box-link" href="https://www.youtube.com/"><img class="footer-img-link" src="yt.png" alt="Logo de YouTube"/></a>
        </div>
    </div>
    <p class="center copyright">© 2018 - 2020 ALU-MÉ - Tous droits réservés - <a class="link underline">Mentions Légales</a></p>
</footer>
<?php
session_unset();
session_destroy();
?>
	</body>
	</html>
