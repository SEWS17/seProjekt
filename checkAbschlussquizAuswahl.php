<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";



// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $dbname);
// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn, 'utf8');

$sql = "SELECT id, ATEXT, BILD1, BILD2, KORREKTE_ANTWORT FROM abschlusstest_auswahl_gestaltgesetze";
$result = $conn->query($sql);

 
$gesamtpunkte = 1;
$check= "";
$punkte = 0;
$answer =(@$_POST['Kategorie']); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        if(isset($_GET["id"]) && $row["id"] == $_GET['id']) {

            echo "<style type='text/css'>
            .error {
                color:#ff0000;
            }
            .ok {
                color:#00CC00;
            }
            </style>";
            
            $type = "";
            if(isset($_POST['Submit']) && $_POST['Submit'] == '0' && isset($_POST['Kategorie'])) {
                $type = 'disabled';
            }
       
            echo"<div class= 'auswahlContainer' style='float: right;'>";
       
            echo "<h1 style='font-size:20px; font-weight:bold; text-align: left; '>Aufgabe ".$row["id"].":</h1>";
            echo "<p style='font-size:17px; text-align: left; '>".$row["ATEXT"]."</p>";
            echo "<br>";
            echo"<form method='post' action=''>";
               
                   
            echo "<label><input type='radio'style='display:none;' name='Kategorie' value='auswahl1'";
            if(@$_POST['Kategorie'] == 'auswahl1') {echo "checked";}
            echo "> <img src='".$row["BILD1"]."'height='200px' width='360px';></label>";

            echo "<label><input type='radio'style='display:none;' name='Kategorie' value='auswahl2'";
            if(@$_POST['Kategorie'] == 'auswahl2') {echo "checked";}
            echo "> <img src='".$row["BILD2"]."'height='200px' width='360px';></label>";


                   
           echo "<br>";
           echo "<br>";
           echo "<button type='submit' name='Submit' value='0'".$type.">L&uuml;ckentext auswerten</button>";
           echo "</form>";

    
      

           $canswer = $row["KORREKTE_ANTWORT"];
           
           
           
                if(@$_POST['Kategorie'] == true) {
                    if($answer == $canswer) {
                        $punkte = 1;
                        $check= "";
                    }
                    if($answer != $canswer) {
                        $punkte = 0;
                        $check= "";
                    }
                    } else if(isset($_POST['Submit']) && $_POST['Submit'] == '0'){
                        $check= "Du hast keine Antwort ausgewählt.";
                    }
               
            
           
           
           echo "<h2 style='font-size:20px; font-weight:bold; margin-top: 20px; text-align: left;'>Hinweis: </h2> ";
           echo "<p>$check</p>";

                    if($answer!="") {
            
                        $sqlinsert = "INSERT INTO abschlusstest_gestaltgesetze_auswertung (Aufgabe, sessionID, punkte, gesamtpunkte) 
                                        VALUES ('".$row['id']."','".$sessionID."','".$punkte."','".$gesamtpunkte."');";
    
                            if ($conn->query($sqlinsert) === TRUE) {
                                            
                                } else {
                                    echo "<p class=\"".(true ? "error" : "ok")."\">Aufgabe wurde schon gelöst</p>";
                                }   
                    }

        }
    }
}else {
    echo "Es sind keine Daten vorhanden.";


}






    
?>