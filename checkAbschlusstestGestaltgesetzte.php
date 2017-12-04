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

$sql = "SELECT id, Aufgabe, TEXT1, 1AUSWAHL1, 1AUSWAHL2, 1AUSWAHL3, 1KORREKTE_ANTWORT, TEXT2, 2AUSWAHL1, 2AUSWAHL2, 2AUSWAHL3, 2KORREKTE_ANTWORT, TEXT3, 3AUSWAHL1, 3AUSWAHL2, 3AUSWAHL3, 3KORREKTE_ANTWORT, TEXT4, 4AUSWAHL1, 4AUSWAHL2, 4AUSWAHL3, 4KORREKTE_ANTWORT, TEXT5, 5AUSWAHL1, 5AUSWAHL2, 5AUSWAHL3, 5KORREKTE_ANTWORT, TEXT6 FROM abschlusstest_lückentext_gestaltgesetze";
$result = $conn->query($sql);

// $check= "Du hast keine Antwort ausgewählt.";
// $answer =(@$_POST['answer']);  

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        if($row["id"] == $_GET['id']) {
            echo "<style type='text/css'>
            input {
                padding:0;
            }
            form p {
                line-height:2em;
            }
            .error {
                color:#ff0000;
            }
            .ok {
                color:#00CC00;
            }
            </style>";
            $punkte = 5;
            define('anzahl_luecken', 5);
            if(isset($_POST['luecke'])){
                    $luecke1 = $_POST['luecke'][1];
                    $luecke2 = $_POST['luecke'][2];
                    $luecke3 = $_POST['luecke'][3];
                    $luecke4 = $_POST['luecke'][4];
                    $luecke5 = $_POST['luecke'][5];
                    } else {
                        
            }
            echo "<h1 style='font-size:20px;margin-top:50px; font-weight:bold; text-align: left; '>Aufgabe ".$row["id"].":</h1>";
            echo "<p style='font-size:17px; font-weight:bold; text-align: left; '>".$row["Aufgabe"]."</p>";
            echo "<form id='form1' name='form1' method='post' action=''>";
            echo "<p>".$row["TEXT1"];
            echo "<select name='luecke[1]' form='form1'>";
            echo "<option value='".$luecke1."'selected>".$luecke1."</option>";
            echo "<option value='".$row["1AUSWAHL1"]."'>".$row["1AUSWAHL1"]."</option>";
            echo "<option value='".$row["1AUSWAHL2"]."'>".$row["1AUSWAHL2"]."</option>";
            echo "<option value='".$row["1AUSWAHL3"]."'>".$row["1AUSWAHL3"]."</option>";
            echo "</select>";
            echo $row["TEXT2"];
            echo "<select name='luecke[2]' form='form1'>";
            echo "<option value='".$luecke2."'selected>".$luecke2."</option>";
            echo "<option value='".$row["2AUSWAHL1"]."'>".$row["2AUSWAHL1"]."</option>";
            echo "<option value='".$row["2AUSWAHL2"]."'>".$row["2AUSWAHL2"]."</option>";
            echo "<option value='".$row["2AUSWAHL3"]."'>".$row["2AUSWAHL3"]."</option>";
            echo "</select>";
            echo $row["TEXT3"];
            echo "<select name='luecke[3]' form='form1'>";
            echo "<option value='".$luecke3."'selected>".$luecke3."</option>";
            echo "<option value='".$row["3AUSWAHL1"]."'>".$row["3AUSWAHL1"]."</option>";
            echo "<option value='".$row["3AUSWAHL2"]."'>".$row["3AUSWAHL2"]."</option>";
            echo "<option value='".$row["3AUSWAHL3"]."'>".$row["3AUSWAHL3"]."</option>";
            echo "</select>";
            echo $row["TEXT4"];
            echo "<select name='luecke[4]' form='form1'>";
            echo "<option value='".$luecke4."'selected>".$luecke4."</option>";
            echo "<option value='".$row["4AUSWAHL1"]."'>".$row["4AUSWAHL1"]."</option>";
            echo "<option value='".$row["4AUSWAHL2"]."'>".$row["4AUSWAHL2"]."</option>";
            echo "<option value='".$row["4AUSWAHL3"]."'>".$row["4AUSWAHL3"]."</option>";
            echo "</select>";
            echo $row["TEXT5"];
            echo "<select name='luecke[5]' form='form1'>";
            echo "<option value='".$luecke5."'selected>".$luecke5."</option>";
            echo "<option value='".$row["5AUSWAHL1"]."'>".$row["5AUSWAHL1"]."</option>";
            echo "<option value='".$row["5AUSWAHL2"]."'>".$row["5AUSWAHL2"]."</option>";
            echo "<option value='".$row["5AUSWAHL3"]."'>".$row["5AUSWAHL3"]."</option>";
            echo "</select>";
            echo $row["TEXT6"];
            echo "<p>";
            echo "<input type='submit' name='Submit' value='L&uuml;ckentext auswerten' />";
            echo "</p>";
            echo "</form>";
            echo "<h2 style='font-size:20px; font-weight:bold; margin-top: 20px; text-align: left;'>Auswertung: </h2> ";

            
            $antworten = array (1 => $row["1KORREKTE_ANTWORT"],
                                2 => $row["2KORREKTE_ANTWORT"],
                                3 => $row["3KORREKTE_ANTWORT"],
                                4 => $row["4KORREKTE_ANTWORT"],
                                5 => $row["5KORREKTE_ANTWORT"]);
            
                                if(isset($_POST['Submit'])) {
                                    $fehler  = false;
                                    $nachricht = "";
                                
                                    //prüfe für jede Lücke
                                    foreach($_POST['luecke'] AS $nr => $antwort) {
                                        if($antwort=="") {
                                            $fehler = true;
                                            $nachricht =  "Bitte alle L&uuml;cken ausf&uuml;llen.";
                                            break;
                                        } else {
                                            //Stimmt Eingabe mit Antwort überein?
                                            if($antwort != $antworten[$nr]) {
                                                $punkte--;
                                                // $nachricht .= $nr.". Antwort ist leider falsch, richtig w&auml;re <b>\"".$antworten[$nr]."\"</b><br />";
                                                $nachricht = "Du hast ".$punkte." von 5 Punkten erreicht!";
                                                $fehler = true;
                                            }
                                        }
                                    }
                                    //Alle Antworten sind richtig
                                    if(!$fehler) {
                                        $nachricht = "Herzlichen Gl&uuml;ckwunsch. Du hast ".$punkte." von 5 Punkten erreicht!";
                                    }
                                
                                    echo "<p class=\"".($fehler ? "error" : "ok")."\">$nachricht</p>";
                                
                                }
        }
    }
}




                    
?>