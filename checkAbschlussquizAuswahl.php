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

$sql = "SELECT id, ATEXT, BILD1, BILD2 FROM abschlusstest_auswahl_gestaltgesetze";
$result = $conn->query($sql);

// $check= "Du hast keine Antwort ausgewählt.";
// $answer =(@$_POST['answer']);  

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        if($row["id"] == $_GET['id']) {
            echo "<p>".$row["ATEXT"]."</p>";
       
       
           echo"<div class= 'auswahlContainer' style='float: right;'>";
       
            echo"<form method='post' action=''>
               
                   
                   <label><input type='radio' name='Kategorie'> <img src='".$row["BILD1"]."' height='100px' width='100px'></label>
                   <label><input type='radio' name='Kategorie'> <img src='".$row["BILD2"]."' height='100px' width='100px'></label>
                  
           
               <input type='submit' name='submit'>
           </form>";

        }
    }
}


                    
?>