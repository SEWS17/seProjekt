
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design Profi</title>
    <link rel="icon" type="image/png" href="Bilder/haken.png">

    <?php
    $id = 0;
    echo "<base href='Wissensquiz_Dialoggestaltung.php?id=".$id++."'/>";
    ?>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

    
<body style="background:#ffffff">
<div class="wrapper">
        
<header>

<div class="header">

        <a class="logoLink" href="index.html"><img class ="logo" src="Bilder\logo1.png" alt="Design Profi Logo"/></a>
       
        <p><a class="homebutton" href="GestaltgesetzeHauptseite.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">

    <div class= "subcontent">

    
    
    <?php
    include_once ("checkAbschlusstestGestaltgesetzte.php");
    include_once ("checkAbschlussquizAuswahl.php");

    
    $idurl = $_GET["id"];
    $idurl++;


       
   
    //$idurl2--;


   echo "<p><a class='weiter' href='Abschlusstest_Gestaltgesetze.php?id=".$idurl."'>weiter zu Frage $idurl</a></p>";


   if($idurl > 2)
{
$idurl2=$idurl-2;
 
 echo "<p><a class='zurueck' href='Abschlusstest_Gestaltgesetze.php?id=".$idurl2."'>zurück zu Frage $idurl2</a></p>"; 

}
   
  
  
   




    ?>

    </div>
      
    
    <div class="clearing"></div>
</div>


<footer>
    <div class="footer">
<p>
            <div class = "footercontent"><a href="#">Impressum</a></div>
            <div class = "footercontent"> | </div>
            <div class = "footercontent"><a href="#">AGB</a></div>
            <div class = "footercontent"> | </div>
            <div class = "footercontent"><a href="#">Datenschutzerklärung</a></div>
</p>
        
Copyright © 2017 Design Profi. Alle Rechte vorbehalten, all rights reserved.
    </div>
</footer>
</div>
</body>
</html>
