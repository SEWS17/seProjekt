<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design Profi</title>

       
    <link rel="icon" type="image/png" href="Bilder/haken.png">
 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background:#ffffff">
        <div class="wrapper">
        
<header>

<div class="header">

       <a class="logoLink" href="index.html"><img class ="logo" src="Bilder\logo1.png" alt="Design Profi Logo"/></a>
       
       
        <p><a class="homebutton" href="allgHauptseite.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">
   <h1>Gestaltgesetze</h1>
  
    <div class= "subcontent2">

    <img src="Bilder\logo1.png" style="height: 55px; margin-right: 0px; float:right;" alt="Design Profi Logo"/>
     
    <div style="width: 500px;">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
             natoque penatibus et magnis dis parturient montes, nascetur
              ridiculus mus. Donec quam felis, ultricies nec, pellentesque
               eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                pedeto, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                Nullam dictum felis edunt tempus. Donec vitae sapien ut libe
    </div>
   
   
 <?php

$idurl = 1;

     $idurl++;
     
 
    //$idurl2--;

if($idurl < 10) {
   echo "<p><a class='weiter' href='gestaltgesetzSeite".$idurl.".php'>weiter</a></p>";
}

   if($idurl > 2)
{
$idurl2=$idurl-2;
 
echo "<p><a class='zurueck' href=''gestaltgesetzSeite".$idurl2.".php'>zurück</a></p>";
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
