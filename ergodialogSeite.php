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
       
       
        <p><a class="homebutton" href="info-ergonomischeDialoggesetze.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">
  
  
    <div class= "subcontent2">
        <?php

 $idurl=$_GET["id"];
if(isset($_GET["id"]) && $idurl == 1) {
    
      
  echo" <img src='Bilder\dialoginfo1.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Wie hier in der Abbildung zu sehen ist, sind Werte vorgegeben. Das unterstützt eine schnelle Auffassung der Funktionen. In diesem Beispiel zeigt Photoshop wie man schnell den Ebenenstil „Glanz“ einrichtet.'/>
     <h1 style='text-align:left;'>Aufgabenangemessenheit</h1>
     
   <div style='width: 500px;'>
   Zur Aufgabenangemessenheit sollten Informationen angezeigt werden, die im Zusammenhang mit der erfolgreichen Erledigung 
   der Arbeitsaufgabe stehen und keine Informationen anzeigen, die nicht für die erfolgreiche Erledigung relevanter Arbeitsaufgaben 
   benötigt werden. Zusätzlich wird Form der Ein. u. Ausgabe der Arbeitsaufgabe angepasst. Außerdem sind typische Eingabewerte als 
   voreingestellte Werte verfügbar.</div>";
   
      }
      
      if(isset($_GET["id"]) && $idurl == 2) {

    echo "<img src='Bilder\dialoginfo2.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Bei diesem Beispiel zeigt sich, dass die Änderung eines Dateinamens nicht gänzlich ohne Regeln funktioniert. Eine Sprechblase erklärt, dass bestimmte Zeichen nicht erlaubt sind.'/>
     
    <h1 style='text-align:left;'>Selbstbeschreibungsfähigkeit</h1>";

    echo "<div style='width: 500px';>
    Bei jedem Dialogschritt gibt es eine angezeigte Information, die zu einem erfolgreichen Abschluss leiten. Es wird die Notwendigkeit 
    für Handbücher und andere externe Informationen abgeschafft. Bei einer Änderung des Zustands des interaktiven Systems wird eine 
    Information an den Benutzer geleitet.  Außerdem werden Informationen über erwartete Eingaben preisgegeben. Die Dialoggestaltung muss 
    so sein, dass eine Interaktion offensichtlich und intuitiv ist. Abschließend gibt es Information über erforderliche Formate und Einheiten, 
    um alles komplett zu machen.
    
    </div>";


        }


        if(isset($_GET["id"]) && $idurl == 3) {
            
              
          echo" <img src='Bilder\dialoginfo3.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='In dieser Abbildung wird das Drop Down Menu von Photoshop angezeigt. Der Punkt „Bearbeiten“ klappt sich auf und weist alle Schritte auf, plus Shortcuts. Die Shortcuts ersparen dem User ein weiteres Klicken, somit kann er die Shortcuts lernen und schneller arbeiten.'/>
          <h1 style='text-align:left;'>Erwartungskonformität </h1>

           <div style='width: 500px;'>
           Eine Erwartungskonformität setzt dem Benutzer vertrautes Vokabular voraus. Also unmittelbare und passende Rückmeldung auf 
           Handlungen des Benutzers durch das System. Außerdem wird der User darüber unterrichtet, wenn eine Abweichung der üblichen 
           Antwortzeit überschritten wurde. Also werden alle Informationen natürlich strukturiert und Formate entsprechend kulturellen und 
           sprachlichen Konventionen angepasst.  
            </div>";
        }


  if(isset($_GET["id"]) && $idurl == 4) {
                        
                          
                      echo" <img src='Bilder\dialoginfo4.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='In diesem Bildbeispiel handelt es sich um ein Protokoll aus Photoshop. Hier lassen sich Arbeitsschritte auflisten und löschen.'/>
                      <h1 style='text-align:left;'>Steuerbarkeit</h1>

                       <div style='width: 500px;'>
                       Eine gute Steuerbarkeit bestimmt den Grad von Autonomie des Benutzers gegenüber dem System. Das heißt die 
                       Geschwindigkeit unterliegt der Kontrolle des Benutzers, außerdem die Kontrolle der Fortsetzung, 
                       Wiederaufnahmepunktes nach Unterbrechung und Rücknehmbarkeit.
                         </div>";
                                }

                                
  if(isset($_GET["id"]) && $idurl == 5) {
    
      
  echo" <img src='Bilder\dialoginfo5.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='In dieser Abbildung wieder ein Beispiel aus Photoshop. Es erscheint ein roter Punkt unten in der Leiste, der signalisiert, dass Fehler vorhanden sind. Dementsprechend lässt sich ein Fenster öffnen, das diese anzeigen kann.'/>
  <h1 style='text-align:left;'>Fehlertoleranz</h1>

   <div style='width: 500px;'>
   Ein Dialog ist fehlertolerant, wenn das beabsichtigte Arbeitsergebnis trotz erkennbar fehlerhafter Eingaben entweder mit keinem oder mit 
   minimalem Korrekturaufwand seitens des Benutzers erreicht werden kann. Also es erfolgt eine Unterstützung bei Entdeckung und Vermeidung 
   von Eingabefehlern. Systemabbrüche oder undefinierten Systemzustände werden verhindert und es gibt eine Fehlererläuterung zu 
   Korrekturzwecken. Außerdem wird eine aktive Unterstützung zur Fehlerbeseitigung angestrebt und eine automatische Fehlerkorrektur 
   erfolgt mit Information, die aber auch abschaltbar ist.
     </div>";
            }
            
            if(isset($_GET["id"]) && $idurl == 6) {
                
                  
              echo" <img src='Bilder\dialoginfo6.jpg' style='height: 300px; margin-right: 0px; float:right;' alt='Die Abbildung zeigt Photoshop und seine verschiedenen Fenster. Der User hat die Möglichkeit, seine eigenen Tools auszuwählen und an der Sidebar anzuordnen. '/>
              <h1 style='text-align:left;'>Individualisierbarkeit</h1>

               <div style='width: 500px;'>
               Ein Dialog ist individualisierbar, wenn er sich nach Vorlieben des Nutzers anpassen lässt, vor allem auch auf Berücksichtigung 
               seiner Fähigkeiten. Also man hat die Wahl zwischen verschiedenen Formen der Darstellung, Bedienung, Ein-/Ausgabe usw. zusätzlich 
               lassen sich ein eigenes Vokabular oder eigene Kommandos arrangieren. Aber Achtung, es ist kein Ersatz für fehlende Ergonomie.
                 </div>";
                        }


                        if(isset($_GET["id"]) && $idurl == 7) {
                            
                              
                          echo" <img src='Bilder\dialoginfo7.jpg' style='height: 300px; margin-right: 0px; float:right;' alt='Diese Abbildung zeigt Sketchup, welches ein Programm zur 3D-Modelierung ist. Hierbei klappt sich seitlich ein Text auf und erklärt, was jenes Tool für Funktionen hat und wie man es anwendet. Kurz verfasst in einem kleinen Text plus Shortcuts für weiteres Anwenden.'/>
                          <h1 style='text-align:left;'>Lernförderlichkeit</h1>

                           <div style='width: 500px;'>
                           Ein Dialog sollte Regeln und Konzepte zugänglich machen, um lernförderlich zu sein. Dementsprechend wird der 
                           Benutzer durch das System angeleitet und unterstützt, sowie das Gelernte wiederaufgefrischt. Das System ist 
                           also eine Unterstützung und sollte auch bei Neulingen förderlich wirken und Rückmeldungen und Erläuterungen 
                           zur Unterstützung der Bildung eines konzeptionellen Verständnisses herbeiführen.
                             </div>";
                                    }

                                      

echo "<div class='button-container'>";

if(isset($_GET["id"]) && $idurl < 10) {

     $idurl++;

    //$idurl2--;



   if($idurl > 2)
{
$idurl2=$idurl-2;
 
echo "<a class='zurueck2' href='ergodialogSeite.php?id=".$idurl2."'>zurück</a>";
}
if($idurl < 8) {
    echo "<a class='weiter2' href='ergodialogSeite.php?id=".$idurl."'>weiter</a>";
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
