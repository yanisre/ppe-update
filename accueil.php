<?php
session_start();
require_once ("fonctions.php");
if ($_SESSION != true)
{
header("Location: coco.php");
}
else{



 ?>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ALU-MÉ</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
     <link rel="stylesheet"  href="blockfinal.css" />
     <link rel="stylesheet"  href="mail.css" />
     <link rel="stylesheet"  href="droite.css" />
     <link rel="stylesheet"  href="profildroite.css" />

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
             <li class="list"><a class="link" href="produit.php">Catalogue</a></li>
             <li class="list"><a class="link" href="produitsm.php">Sur-Mesure</a></li>
             <li class="list"><a class="link" href="profil.php">Profil</a></li>
                                         <li class="list"><a class="link" href="Contact.php">Contact</a></li>
                     </ul>
     </nav>
   </header>
   <style>
   * {box-sizing: border-box}
   body {font-family: Verdana, sans-serif; margin:0}
   .mySlides {display: none}
   img {vertical-align: middle;}

   /* Slideshow container */
   .slideshow-container {
     max-width: 1000px;
     position: relative;
     margin: auto;
   }

   /* Next & previous buttons */
   .prev, .next {
     cursor: pointer;
     position: absolute;
     top: 50%;
     width: auto;
     padding: 16px;
     margin-top: -22px;
     color: white;
     font-weight: bold;
     font-size: 18px;
     transition: 0.6s ease;
     border-radius: 0 3px 3px 0;
     user-select: none;
   }

   /* Position the "next button" to the right */
   .next {
     right: 0;
     border-radius: 3px 0 0 3px;
   }

   /* On hover, add a black background color with a little bit see-through */
   .prev:hover, .next:hover {
     background-color: rgba(0,0,0,0.8);
   }

   /* Caption text */
   .text {
     color: #f2f2f2;
     font-size: 15px;
     padding: 8px 12px;
     position: absolute;
     bottom: 8px;
     width: 100%;
     text-align: center;
   }

   /* Number text (1/3 etc) */
   .numbertext {
     color: #f2f2f2;
     font-size: 12px;
     padding: 8px 12px;
     position: absolute;
     top: 0;
   }

   /* The dots/bullets/indicators */
   .dot {
     cursor: pointer;
     height: 15px;
     width: 15px;
     margin: 0 2px;
     background-color: #bbb;
     border-radius: 50%;
     display: inline-block;
     transition: background-color 0.6s ease;
   }

   .active, .dot:hover {
     background-color: #717171;
   }

   /* Fading animation */
   .fade {
     -webkit-animation-name: fade;
     -webkit-animation-duration: 1.5s;
     animation-name: fade;
     animation-duration: 1.5s;
   }

   @-webkit-keyframes fade {
     from {opacity: .4}
     to {opacity: 1}
   }

   @keyframes fade {
     from {opacity: .4}
     to {opacity: 1}
   }

   /* On smaller screens, decrease text size */
   @media only screen and (max-width: 300px) {
     .prev, .next,.text {font-size: 11px}
   }
   </style>
   <style>
.btn {
border: 2px solid black;
background-color: white;
color: black;
padding: 14px 28px;
font-size: 16px;
cursor: pointer;
float: right;
}

/* Green */
.success {
border-color: #00C3FF;
color: #00C3FF;
}

.success:hover {
background-color: #00C3FF;
color: white;
}


}
</style>
<style>
.btn1 {
border: 2px solid black;
background-color: white;
color: black;
padding: 14px 28px;
font-size: 16px;
cursor: pointer;
}

/* Green */
.success1 {
border-color: red;
color: red;
}

.success1:hover {
background-color: red;
color: white;
}


}
</style>
   <style>
   .collapsible {
     background-color: #00C3FF;
     color: white;
     cursor: pointer;
     padding: 25px;
     width: 95%;
     border: none;
     text-align: left;
     outline: none;
     font-size: 15px;
   }

   .active, .collapsible:hover {
     background-color: #00C3FF;
   }

   .content {
     padding: 0 18px;
     display: none;
     overflow: hidden;
     background-color: #f1f1f1;
   }
   </style>

    <div class="bg">
         <h2 class="bg-title">ALU-MÉ</h2>
         </div>
</br>
<img src="https://img.icons8.com/ios-filled/100/000000/shopping-cart-loaded.png"class="one">
</br></br></br></br></br></br>
<a href="panier.php"><button  type ="submit" class="btn success" name ="SeConnecter" value ="Se Connecter" class="pull-right" >Panier</button></a>


</br></br></br>
</br></br>
</br></br>

<button type="button" class="collapsible"><big>Bienvenue à toi !!! clique ici pour en savoir plus sur ALU-ME</big></button>

<div class="content">
  <p><b><font color='green'>La société ALU-MÉ, dont le siège social est à Marseille,
est une grande entreprise spécialisée dans la menuiserie aluminium (portes, fenêtres, loggias, etc.).
Elle travaille sur commande (appelé PROJET) de gros clients, pour équiper entièrement un immeuble par exemple.</font></br>
</br><u><font color='blue'>Prestations : </u></br>
</br> * réparation</br>
</br> * conseils personnalisés</br>
</br> * motorisation de fermetures</br>
</br> * pose</br>
</br> * fabrication sur-mesure</br>
</br> * charpente</br>
</br> * devis gratuits</font></br>
</br><u> Produits :</u> </br>
</br> - portes</br>
</br> - fenêtres en aluminium</br>
</br> - toit </br>
</br> - barrières</br>
</br> - portails</br>
</br> - clôtures garde-corps</br>	</p>
</div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</br></br>
</br></br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://menuiseries-jphernandez.e-monsite.com/medias/images/walpp.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://menuiserie-rieb.fr/wp-content/uploads/2017/04/Services-menuiserie-rieb-500x350.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://test.probatirenov.com/wp-content/uploads/2017/04/galerie-1.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>














</b>
</big></p>



</br></br>
</br></br>
<center>
<h3>Geo Localisation</h3>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1928.8592495278488!2d5.420308496924778!3d43.29398978646351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf3c229b7a6f%3A0xb89ae17a95a0ff74!2s40%20Chemin%20de%20la%20Parette%2C%2013012%20Marseille!5e0!3m2!1sfr!2sfr!4v1570574633480!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</center>


  <a href="accueilV.php"  ><button class="btn1 success1" type="submit" value="Se Deconnecter">DECONNECTION</button></a>


</br></br>
</br></br>

<?php
}
 ?>
