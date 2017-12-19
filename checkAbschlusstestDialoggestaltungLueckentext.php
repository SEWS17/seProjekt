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

$sql = "SELECT id, Aufgabe, TEXT1, 1AUSWAHL1, 1AUSWAHL2, 1AUSWAHL3, 1KORREKTE_ANTWORT, TEXT2, 2AUSWAHL1, 2AUSWAHL2, 2AUSWAHL3, 2KORREKTE_ANTWORT, TEXT3, 3AUSWAHL1, 3AUSWAHL2, 3AUSWAHL3, 3KORREKTE_ANTWORT, TEXT4 FROM abschlusstest_lückentext_dialoggesetze";
$result = $conn->query($sql);

$luecke1 = "";
$luecke2 = "";
$luecke3 = "";
$luecke4 = "";
$luecke5 = "";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
       
        if(isset($_GET["id"]) && $row["id"] == $_GET['id']) {

            echo "<style type='text/css'>
            p.ltext {
                line-height: 1.5;
            }
            input {
                padding:0;
            }
            .error {
                color:#ff0000;
            }
            .ok {
                color:#00CC00;
            }
            </style>";
            
            $type = "";
            if(isset($_POST['Submit']) && $_POST['Submit'] == '0' && !isset($_POST['luecke'])) {
                $type = 'disabled';
            }
            
            $auswahlpunkte = 5;
            $punkte = 1;
            $gesamtpunkte = $punkte;
            define('anzahl_luecken', 5);
            if(isset($_POST['luecke'])){
                    $luecke1 = $_POST['luecke'][1];
                    $luecke2 = $_POST['luecke'][2];
                    $luecke3 = $_POST['luecke'][3];
                    } else {
                        
            }
            echo "<h1 style='font-size:20px;margin-top:30px; font-weight:bold; text-align: left; '>Aufgabe ".$row["id"].":</h1>";
            echo "<p style='font-size:17px; font-weight:bold; text-align: left; '>".$row["Aufgabe"]."</p>";
            echo "<form id='form1' name='form1' method='post' action=''>";
            echo "<p class = 'ltext'>";
            echo $row["TEXT1"]." ";
            echo "<select name='luecke[1]' form='form1' ".$type.">";
            echo "<option value='".$luecke1."'selected>".$luecke1."</option>";
            echo "<option value='".$row["1AUSWAHL1"]."'>A: ".$row["1AUSWAHL1"]."</option>";
            echo "<option value='".$row["1AUSWAHL2"]."'>B: ".$row["1AUSWAHL2"]."</option>";
            echo "<option value='".$row["1AUSWAHL3"]."'>C: ".$row["1AUSWAHL3"]."</option>";
            echo "</select>";
            echo " ".$row["TEXT2"]." ";
            echo "<select name='luecke[2]' form='form1'".$type.">";
            echo "<option value='".$luecke2."'selected>".$luecke2."</option>";
            echo "<option value='".$row["2AUSWAHL1"]."'>A: ".$row["2AUSWAHL1"]."</option>";
            echo "<option value='".$row["2AUSWAHL2"]."'>B: ".$row["2AUSWAHL2"]."</option>";
            echo "<option value='".$row["2AUSWAHL3"]."'>C: ".$row["2AUSWAHL3"]."</option>";
            echo "</select>";
            echo " ".$row["TEXT3"]." ";
            echo "<select name='luecke[3]' form='form1'".$type.">";
            echo "<option value='".$luecke3."'selected>".$luecke3."</option>";
            echo "<option value='".$row["3AUSWAHL1"]."'>A: ".$row["3AUSWAHL1"]."</option>";
            echo "<option value='".$row["3AUSWAHL2"]."'>B: ".$row["3AUSWAHL2"]."</option>";
            echo "<option value='".$row["3AUSWAHL3"]."'>C: ".$row["3AUSWAHL3"]."</option>";
            echo "</select>";
            echo " ".$row["TEXT4"]." ";
            echo "</p>";
            echo "<button type='submit' name='Submit' value='0'".$type.">L&uuml;ckentext auswerten</button>";
            echo "</form>";
            echo "<h2 style='font-size:20px; font-weight:bold; margin-top: 20px; text-align: left;'>Hinweis: </h2> ";

        
            
            
                $antworten = array (1 => $row["1KORREKTE_ANTWORT"],
                                2 => $row["2KORREKTE_ANTWORT"],
                                3 => $row["3KORREKTE_ANTWORT"],);

                                

                                if(isset($_POST['Submit'])) {
                                    $fehler  = false;
                                    $nachricht = "";
                                    $punktenachricht ="";
                                    $auswertung = "";
                                
                                    //prüfe für jede Lücke
                                    foreach($_POST['luecke'] AS $nr => $antwort) {
                                        if($antwort=="") {
                                            $fehler = true;
                                            $nachricht =  "Bitte alle L&uuml;cken ausf&uuml;llen.";
                                            break;
                                        } else {
                                            //Stimmt Eingabe mit Antwort überein?
                                            if($antwort != $antworten[$nr]) {
                                                $auswahlpunkte--;
                                                $nachricht = "";
                                                $fehler = true;
                                            }
                                        }
                                    }
                                    //Alle Antworten sind richtig
                                    if(!$fehler) {
                                        $nachricht = "";
                                        $auswertung = "";
                                        $punktenachricht = "Du hast ".$punkte." von 5 Punkten erreicht!";
                                    }
                                
                                    echo "<p class=\"".($fehler ? "error" : "ok")."\">$nachricht</p>";
                                    
                                    $punkte;
                                    if($auswahlpunkte > 3) {
                                        $punkte = 1;
                                    } else {
                                        $punkte = 0;
                                    }
                                
                            
                                    if($antwort!="") {
        
                                        $sqlinsert = "INSERT INTO abschlusstest_dialoggestaltung_auswertung (Aufgabe, sessionID, punkte, gesamtpunkte) 
                                        VALUES ('".$row['id']."','".$sessionID."','".$punkte."','".$gesamtpunkte."');";

                                        if ($conn->query($sqlinsert) === TRUE) {
                                        
                                        } else {
                                        echo "<p class=\"".($fehler ? "error" : "ok")."\">Aufgabe wurde schon gelöst</p>";
                                        }   
                                    }

                                    
                                }

                        } 
                    }
                } else {
                    echo "Es sind keine daten vorhanden!";
                }


                    
?>