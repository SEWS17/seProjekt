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
       
        <p><a class="homebutton" href="DialoggestaltungHauptseite.html">Zurück zur Auswahl</a></p>
</div>
</header>

<div class="content">

    <div class= "subcontent">

    
    
    <?php
    session_start();
    $sessionID = session_id();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz";
    
    // Verbindung erstellen
    $aconn = new mysqli($servername, $username, $password, $dbname);
    // Verbindung überprüfen
    if ($aconn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    mysqli_set_charset($aconn, 'utf8');
    $bewertung = "";

    if(isset($_GET["action"]) && $_GET['action'] == "auswertung") {
        include_once ("checkAbschlusstestGestaltgesetzte.php");
        include_once ("checkAbschlussquizAuswahl.php");
        
        
        $sqlauswertung = "SELECT Aufgabe, sessionID, punkte, gesamtpunkte, SUM(punkte) AS SUMpunkte FROM abschlusstest_gestaltgesetze_auswertung WHERE sessionID = '".$sessionID."'";
        $result = $conn->query($sqlauswertung);
        $gespunkte = 9;

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //print_r($row);
               
                 
                
                if($sessionID == $row["sessionID"]) {
                echo "<p><img src='Bilder/Trophäe.png' alt='Trophäe' width= 200px style = 'display:block; margin-left:auto; margin-right:auto;'></p>";
                    if($row["SUMpunkte"]<4 && $row["SUMpunkte"]!= null) {
                    $bewertung = "Das geht bestimmt noch besser!";
                    } else if($row["SUMpunkte"]>3 && $row["SUMpunkte"]<7) {
                    $bewertung = "Gratulation! Du hast ein gutes Ergebnis erreicht!";
                    } else if($row["SUMpunkte"]>6) {
                    $bewertung = "Herzlichen Glückwunsch! In dir steckt ein echter Design Profi!";
                    }
                echo "<h1 style = 'color:#3FAA34'>Du hast ".$row["SUMpunkte"]." von " .$gespunkte. " Punkten erreicht.</h1>";
                echo "<h2 style = 'color:#3FAA34'>".$bewertung."</h2>";
                }
                
            }
        }
        echo "<p><a class='auswertung' href='Abschlusstest_Gestaltgesetze.php?action=ende'>Abschlusstest abschließen!</a></p>";
    } else if(isset($_GET["action"]) && $_GET['action'] == "ende") {
        echo "<h1 class=AuswertungÜberschrift>Du hast den Abschlusstest erfolgreich abgeschlossen!</h1>";
        echo "<p><a class='AuswahlButton' href='GestaltgesetzeHauptseite.html'>Zurück zur Auswahl</a></p>";

    } else {
        include_once ("checkAbschlusstestGestaltgesetzte.php");
        include_once ("checkAbschlussquizAuswahl.php");
    }
    
    if(isset($_GET["id"])) {
        $idurl = $_GET["id"];
        $idurl++;
     

        if(isset($_GET["id"]) && $idurl < 10) {
            echo "<p><a class='weiter' href='Abschlusstest_Gestaltgesetze.php?id=".$idurl."'>weiter zu Frage $idurl</a></p>";
        } else {
            echo "<p><a class='auswertung' href='Abschlusstest_Gestaltgesetze.php?action=auswertung'>Zur Auswertung!</a></p>";
        }

        if($idurl > 2) {
            $idurl2=$idurl-2;
 
            echo "<p><a class='zurueck' href='Abschlusstest_Gestaltgesetze.php?id=".$idurl2."'>zurück zu Frage $idurl2</a></p>"; 

        }
    }
   
  
        $sqldelete = "";
        if(isset($_GET["action"])) {
            $action = (string) $_GET["action"];
            if($action == "ende") {
                $sqldelete = "DELETE FROM abschlusstest_gestaltgesetze_auswertung
                WHERE sessionID = '".$sessionID."'";

                if ($aconn->query($sqldelete) === TRUE) {
            
                } else {
                    echo "Error: " . $sqldelete . "<br>" . $conn->error;
                }
            }
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
