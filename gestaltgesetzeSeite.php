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
       
       
        <p><a class="homebutton" href="info-Gestaltgesetz-startseite.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">
  
  
    <div class= "subcontent2">
        <?php

 $idurl=$_GET["id"];
if(isset($_GET["id"]) && $idurl == 1) {
    
      
  echo" <img src='Bilder\bild_frage3.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Es gibt fünf Zeilen und acht Spalten. Jede Zeile hat abwechselnd einen schwarzen Quader oder einen schwarzen Kreis. Also auf Platz eins ist ein Quader, Platz zwei besitzt einen Kreis, Platz drei wieder einen Quader und so weiter bis Platz acht. Ein Gatter aus regelmäßig angeordneten verschieden aussehenden Teilchen. Das Auge erkennt die Spalten durch die ähnlich aussehenden Elemente.'/>
     <h1 style='text-align:left;'>Gesetz der Ähnlichkeit</h1>
     
   <div style='width: 500px;'>
   Das Gesetz der Ähnlichkeit besagt, dass Dinge, die ähnlich gestaltet sind,
    als zusammengehörig wahrgenommen werden. Dagegen werden Dinge, die sich 
    in wichtigen Merkmalen unterscheiden, als voneinander getrennt oder unabhängig
     wahrgenommen. <br> <br> Die Ähnlichkeit kann sich auf Merkmale wie Farbe, Form, Größe,
      Helligkeit oder Orientierung beziehen. Je mehr Gemeinsamkeiten die Dinge 
      aufweisen, desto stärker ist die Gruppierungstendenz in unserer Wahrnehmung.
   Das Gesetz der Ähnlichkeit kann direkt aufs Webdesign übertragen werden. Die 
   Elemente einer Website, die gleich aussehen und sich eindeutig von den anderen
    unterscheiden, werden zu einer Gruppe zusammengeschlossen. </div>";
   
      }
      
      if(isset($_GET["id"]) && $idurl == 2) {

    echo "<img src='Bilder\bild_frage4.png' style='height: 200px; margin-right: 0px; float:right;' alt='Links kommen mehrere Fische wirr im Raum vor. Auf der rechten Seite formiert sich ein Fischschwarm zu einem größeren Fisch, diese Fische sind sehr nah beieinander. Somit erkennt man den Schwarm nicht als einzelne Fische, sondern als neue Form.'/>
     
    <h1 style='text-align:left;'>Gesetz der Nähe</h1>";

    echo "<div style='width: 500px';>
    Es besagt, dass gleiche Elemente (Elemente mit gleichem Reiz) mit geringeren
     Abständen zueinander als zusammengehörig wahrgenommen werden.
      In dieser Abbildung sehen wir links eine wilde Anordnung an
       Fischen und rechts eine Einheit bildende. Wir nehmen diese Zusammengehörigkeit 
       so wahr, weil die Elemente sich näher sind.
    
    </div>";


        }


        if(isset($_GET["id"]) && $idurl == 3) {
            
              
          echo" <img src='Bilder\bild_frage6.png' style='height: 200px; margin-right: 0px; float:right;' alt='Durch viele Kreise wird eine Welle dargestellt. Erst steigt sie langsam an, hat einen Hochpunkt und fällt wieder mit Schwung. Es entsteht eine harmonische Bewegung in die Leserichtung und sieht gut aus'/>
          <h1 style='text-align:left;'>Gesetz der guten Fortsetzung</h1>
           <div style='width: 500px;'>
           Das Gesetz der guten Fortsetzung besagt, dass Elemente, 
           die sich auf einer durchgehenden Linie oder Kurve befinden,
            als Einheit wahrgenommen oder als zusammengehörig aufgefasst werden.
             Das liegt daran, dass das Gehirn dazu neigt,
            einen einmal erhaltenen Richtungsimpuls fortzusetzen.   
            </div>";
        }


  if(isset($_GET["id"]) && $idurl == 4) {
                        
                          
                      echo" <img src='Bilder\bild_frage1.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Durch Aussparung und Weißraum wird ein Panda dargestellt. Mit schwarzen Kreisen die Ohren, Nase, Augen und Beine. Der Betrachter vervollständigt das Tier automatisch, obwohl es nur angedeutet wird'/>
                      <h1 style='text-align:left;'>Gesetz der Geschlossenheit</h1>
                       <div style='width: 500px;'>
                       Das Gesetz der Geschlossenheit besagt, dass Dinge mit geschlossenem Umriss
                        oder Elemente, die von einer Linie umfasst sind, von unserer Wahrnehmung 
                        gruppiert, also als zusammengehörig aufgefasst werden. Dinge, die durch
                         Linien getrennt sind, wirken nicht zusammengehörig.
                       Das Gesetz der Geschlossenheit ist ein sehr wichtiges Werkzeug zum
                        Ordnen von Informationen, zum Hervorheben von Zusammenhängen und 
                        zum Erleichtern der Orientierung. Im Webdesign spielt es deshalb eine
                         große Rolle. Jeder Button und jede Tabelle werden von unserer Wahrnehmung
                          als visuelle Einheit erkannt. Umgekehrt gilt: Wenn Dinge, die
                           zusammengehören, in unterschiedlichen Kästen platziert oder durch
                            Trennlinien abgegrenzt sind, ist es den Benutzern fast unmöglich,
                             sie gemeinsam zu beachten. Dies gilt auch dann, wenn die Distanz
                              gering oder die Ähnlichkeit groß ist.
                       Wichtig ist, dass eine vollständige Geschlossenheit nicht erforderlich ist,
                        damit das Gesetz wirkt. Es genügt bereits, wenn eine geschlossene Figur
                         angedeutet wird. Das Gehirn ergänzt einfach die unvollständigen Formen.
                         </div>";
                                }

                                
  if(isset($_GET["id"]) && $idurl == 5) {
    
      
  echo" <img src='Bilder\bild_frage5.png' style='height: 200px; margin-right: 0px; float:right;' alt='Es werden Kreise mit Klammern dargestellt. Eine Klammer öffnet sich und lässt ein wenig Weissraum, danach schließt sie wieder. Das wiederholt sich zwei weitere Male. Der Betrachter erkennt direkt die Mittelachsen durch die Kreise und die resultierende Symmetrie der Klammern'/>
  <h1 style='text-align:left;'>Gesetz der Symmetrie</h1>
   <div style='width: 500px;'>
   Bei den Gestaltgesetzen aus der Gestaltpsychologie hat das Gesetz der Symmetrie
    eine besondere Rolle.
    Symmetrisch angeordnete Elemente schaffen Strukturen und werden dadurch als
     einander zugehörig wahrgenommen. Daher sehr wichtig: Elemente, die symmetrisch
      angeordnet sind, werden als zusammengehörig angesehen.
     </div>";
            }
            
            if(isset($_GET["id"]) && $idurl == 6) {
                
                  
              echo" <img src='Bilder\bild_frage2.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Sieben schwarze Kreise kommen ungeordnet im Raum vor. Darüber spannt sich ein Quader in weiß auf und wird erkennbar dadurch, dass jede Ecke jeweils durch einen Kreis hinterlegt ist. Nur die Ecken werden erkenntlich gemacht und man erkennt die Figur durch zusammenführen der Seiten. Der Quader ist eine Grundform, was bei diesem Gesetz wichtig ist, jeder muss die Figur kennen.'/>
              <h1 style='text-align:left;'>Gesetz der guten Gestalt</h1>
               <div style='width: 500px;'>
               Das Gesetz der Einfachheit besagt, dass das menschliche Gehirn Formen so interpretiert, 
               dass sie möglichst einfach erscheinen und leicht zu beschreiben sind.
                Es wird auch als das Gesetz der guten Gestalt oder Prägnanzgesetz bezeichnet.
                 </div>";
                        }


                        if(isset($_GET["id"]) && $idurl == 7) {
                            
                              
                          echo" <img src='Bilder\bild_frage7.png' style='height: 200px; margin-right: 0px; float:right;' alt='Sieben schwarze Kreise kommen ungeordnet im Raum vor. Darüber spannt sich ein Quader in weiß auf und wird erkennbar dadurch, dass jede Ecke jeweils durch einen Kreis hinterlegt ist. Nur die Ecken werden erkenntlich gemacht und man erkennt die Figur durch zusammenführen der Seiten. Der Quader ist eine Grundform, was bei diesem Gesetz wichtig ist, jeder muss die Figur kennen.'/>
                          <h1 style='text-align:left;'>Gesetz des gemeinsamen Schicksals</h1>
                           <div style='width: 500px;'>
                           Das Gesetz der Einfachheit besagt, dass das menschliche Gehirn Formen so interpretiert, 
                           dass sie möglichst einfach erscheinen und leicht zu beschreiben sind.
                            Es wird auch als das Gesetz der guten Gestalt oder Prägnanzgesetz bezeichnet.
                             </div>";
                                    }


                                    if(isset($_GET["id"]) && $idurl == 8) {
                                        
                                          
                                      echo" <img src='Bilder\bild_frage8.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Es werden Pfeile in jeweils drei Zeilen angeordnet. Die erste Zeile an Pfeilen zeigt in die rechte Richtung. Die zweite Zeile dann nach links und die letzte dritte wieder nach rechts. So sieht es aus, als würde jede Zeile dazu verdammt sein, eine Richtung zu gehen./>
                                      <h1 style='text-align:left;'>Gesetz der Kontinuität</h1>
                                       <div style='width: 500px;'>
                                       Das Gesetz der Einfachheit besagt, dass das menschliche Gehirn Formen so interpretiert, 
                                       dass sie möglichst einfach erscheinen und leicht zu beschreiben sind.
                                        Es wird auch als das Gesetz der guten Gestalt oder Prägnanzgesetz bezeichnet.
                                         </div>";
                                                }
                        
                                                if(isset($_GET["id"]) && $idurl == 9) {
                                                    
                                                      
                                                  echo" <img src='Bilder\bild_frage9.jpg' style='height: 200px; margin-right: 0px; float:right;' alt='Eine Linie kringelt sich durch das Bild und wird oben sowie unten angeschnitten. Sie hat also kein wahrnehmbares Ende oder Anfang.'/>
                                                  <h1 style='text-align:left;'>Kontur</h1>
                                                   <div style='width: 500px;'>
                                                   Das Gesetz der Einfachheit besagt, dass das menschliche Gehirn Formen so interpretiert, 
                                                   dass sie möglichst einfach erscheinen und leicht zu beschreiben sind.
                                                    Es wird auch als das Gesetz der guten Gestalt oder Prägnanzgesetz bezeichnet.
                                                     </div>";
                                                            }
                                      

echo "<div class='button-container'>";

if(isset($_GET["id"]) && $idurl < 10) {

     $idurl++;

    //$idurl2--;

if($idurl < 10) {
   echo "<a class='weiter2' href='gestaltgesetzeSeite.php?id=".$idurl."'>weiter</a>";
}

   if($idurl > 2)
{
$idurl2=$idurl-2;
 
echo "<a class='zurueck2' href='gestaltgesetzeSeite.php?id=".$idurl2."'>zurück</a>";
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
