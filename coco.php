<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
<title>Visiteur inconnu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" media="screen" type="text/css" title="suite" href="design_accueil.css" />
        <!-- Lien vers la favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" height="48" width="48"/>
<link rel="stylesheet"  href="bouton.css" />
<link rel="stylesheet"  href="droite.css" />

    </head>

    <body>

    <!-- Le corps -->

     <div id="corps">
      <center>
      </br>
    </br></br>
      </br></br>
<p><big><font color="red" ><b>Veuillez vous identifier pour accéder au site </big></p>
  </br>
<form action="Connexion.php" method="post">
  <p>
    <button type="submit" value="connecter" class="one"width="85  " height="85" > Connectez-vous</button>
  </p>
</form>
<form action="accueilV.php" method="post">
  <p>
    <button type="submit" value="annuler" class="one"width="85  " height="85" >Retourner à l'accueil</button>

        </div>
</center>
        <!-- Le pied de page -->

           <div id="pied_de_page1">

       </div>

    </body>
</html>
<?
if ($_SESSION != true)
{
header("Location: coco.php");
}
