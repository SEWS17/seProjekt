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

// $check= "Du hast keine Antwort ausgewählt.";
// $answer =(@$_POST['answer']);  

$check= "Du hast keine Antwort ausgewählt.";
$answer =(@$_POST['Kategorie']); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        if($row["id"] == $_GET['id']) {
        
       
       
           echo"<div class= 'auswahlContainer' style='float: right;'>";
       
           echo "<h1 style='font-size:20px; font-weight:bold; text-align: left; '>Aufgabe ".$row["id"].":</h1>";
           echo "<p style='font-size:17px; text-align: left; '>".$row["ATEXT"]."</p>";
            echo "<br>";
            echo"<form method='post' action=''>
               
                   
                   <label><input type='radio'style='display:none;' name='Kategorie' value='auswahl1'> <img src='".$row["BILD1"]."'height='200px' width='360px';></label>
                   <label><input type='radio' style='display:none;' name='Kategorie' value='auswahl2'> <img src='".$row["BILD2"]."' height='200px' width='360px'></label>
                  
           <br>
           <br>
               <input type='submit' name='submit' value='Auswahl auswerten' />
           </form>";

    
      

           $canswer = $row["KORREKTE_ANTWORT"];
           
           
           
           if(@$_POST['Kategorie'] == true) {
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
           echo "<h2 style='font-size:20px; font-weight:bold; margin-top: 20px; text-align: left;'>Auswertung: </h2> ";
           echo "<p>$check</p>";

     
?>