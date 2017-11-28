<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wissensquiz";



// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $dbname);
// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn, 'utf8');

$sql = "SELECT id, Bild, Bildbeschreibung, Frage, KORREKTE_ANTWORT, AUSWAHL1, AUSWAHL2, AUSWAHL3 FROM DialogFragen";
$result = $conn->query($sql);


$check= "Du hast keine Antwort ausgewählt.";
$answer =(@$_POST['answer']);  

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        if($row["id"] == $_GET['id']) {
echo "<img class= quizbild src='".$row["Bild"]."' alt='Bild Frage".$row["id"]."'/>";
echo "<h1 style='font-size:20px;margin-top:50px; font-weight:bold; text-align: left; '>Frage ".$row["id"].":</h1>";
echo "<p style='font-size:17px; font-weight:bold; text-align: left; '>".$row["Frage"]."</p>";
echo "<form method='post'>";
echo "<input type='radio' name='answer' value='".$row["AUSWAHL1"]."'>".$row["AUSWAHL1"]."<br>";
echo "<input type='radio' name='answer' value='".$row["AUSWAHL2"]."'>".$row["AUSWAHL2"]."<br>";
echo "<input type='radio' name='answer' value='".$row["AUSWAHL3"]."'>".$row["AUSWAHL3"]."<br>";
echo "<input style='margin-top:20px;' type='submit' name='auswahl' value='Abschicken'>";
echo "</form>";

$canswer = $row["KORREKTE_ANTWORT"];


if(@$_POST['auswahl'] == true) {
     if($answer == $canswer) {
         $check = "Diese Antwort ist richtig.";
     }
     if($answer != $canswer) {
        $check = "Diese Antwort ist leider falsch.";
    }
}
    }
}
} else {
    echo "Es sind keine Daten vorhanden.";
}


echo "<h2 style='font-size:20px; font-weight:bold; margin-top: 20px; text-align: left;'>Deine Antwort: </h2> ".$answer;
echo "<p>$check</p>";

?> 