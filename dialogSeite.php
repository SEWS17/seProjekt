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
       
       
        <p><a class="homebutton" href="info-Dialoggesetz-startseite.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">
  
  
    <div class= "subcontent2">
        <?php

 $idurl=$_GET["id"];
if(isset($_GET["id"]) && $idurl == 1) {
    
      
  echo" 
     <h1 style='text-align:left;'>Versuche Konsistenz zu erreichen</h1>
   <div style='width: 500px;'>
   Konsistente Abfolgen von Aktionen sollten in ähnlichen Situationen angewandt werden. In Menüs und Fenstern sollte die gleiche Terminologie und gleiche Befehle verwendet werden. 
    </div>
    
    ";
   
      }
      
      if(isset($_GET["id"]) && $idurl == 2) {

    echo "
    <h1 style='text-align:left;'>Biete erfahrenen Nutzern Abkürzungen an</h1>";

    echo "<div style='width: 500px';>
    Mit erhöhter Häufigkeit der Nutzung eines Programmes steigt das Bedürfnis die Interaktionen zu minimieren. Ein erfahrener Nutzer wünscht sich Abkürzungen, Shortcuts und versteckte Befehle die die Interaktion beschleunigen.
    
    </div>";


        }


        if(isset($_GET["id"]) && $idurl == 3) {
            
              
            echo" 
            <h1 style='text-align:left;'>Biete informatives Feedback</h1>
           <div style='width: 500px;'>
           Für jede Aktion des Operators sollte es eine sichtbare Reaktion des Systems geben. Für häufige und kleine Änderungen kann die Reaktion moderat ausfallen, während für seltene und große Aktionen ein deutlicheres Feedback gezeigt werden sollte.
            </div>";
        }


  if(isset($_GET["id"]) && $idurl == 4) {
                        
                          
                      echo" 
                       <h1 style='text-align:left;'>Dialoge sollten abgeschlossen sein</h1>
                       <div style='width: 500px;'>
                       Aktionssequenzen sollten in Gruppen, mit einem Anfang, einer Mitte und einem Ende organisiert sein. Das informative Feedback nach der Vervollständigung einer Gruppe von Aktionen gibt dem Operator eine Erleichterung, eine Errungenschaft und das Signal, dass es möglich ist, die nächste Aktionssequenz zu beginnen.  .
                         </div>";
                                }

                                
  if(isset($_GET["id"]) && $idurl == 5) {
    
      
  echo" 
    <h1 style='text-align:left;'>Biete einfache Fehlerbehandlung</h1>
   <div style='width: 500px;'>
   Das Programm sollte immer so funktionieren, dass es dem Nutzer nicht möglich ist fatale Fehler zu begehen. Falls ein Fehler gemacht wurde, sollte das System diesen ermitteln und einfache, verständliche Lösungsmechanismen vorschlagen.
     </div>";
            }
            
            if(isset($_GET["id"]) && $idurl == 6) {
                
                  
              echo" 
                 <h1 style='text-align:left;'>Biete einfache Rücksetzmöglichkeiten</h1>
               <div style='width: 500px;'>
               Diese Funktion erleichtert dem Nutzer die Fehlerbereinigung und ermuntert deshalb zum Ausprobieren von unbekannten Optionen.
                 </div>";
                        }


                        if(isset($_GET["id"]) && $idurl == 7) {
                            
                              
                          echo" 
                          <h1 style='text-align:left;'>Unterstütze benutzergesteuerten Dialog</h1>
                           <div style='width: 500px;'>
                           Erfahrene Nutzer sollten Aktionen initiieren, anstatt nur zu reagieren. Stattdessen soll das System auf ihre Aktionen reagieren.  So hat der Nutzer das Gefühl den Dialog im Griff zu haben. 
                             </div>";
                                    }


                                    if(isset($_GET["id"]) && $idurl == 8) {
                                        
                                          
                                      echo" 
                                      <h1 style='text-align:left;'>Reduziere die Belastung des Kurzzeitgedächtnisses</h1>
                                       <div style='width: 500px;'>
                                       Die Begrenzungen der menschlichen Informationsaufnahme des Kurzzeitgedächtnisses macht es sinnvoll, dass Anzeigen übersichtlich gehalten und reduziert sind. Sequenzen und Codes sollten eine hinreichende Trainingszeit haben.  
                                         </div>";
                                                }
                                      

echo "<div class='button-container'>";

if(isset($_GET["id"]) && $idurl < 10) {

     $idurl++;

    //$idurl2--;

if($idurl < 10) {
   echo "<a class='zurueck2' href='dialogSeite.php?id=".$idurl."'>zurück</a>";
}

   if($idurl > 2)
{
$idurl2=$idurl-2;
 
echo "<a class='weiter2' href='dialogSeite.php?id=".$idurl2."'>weiter</a>";
}


}
   
  ?>
 </div>
 
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
