
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design Profi</title>
    <?php
    $id = 0;
    echo "<base href='index.php?id=".$id++."'/>";
    ?>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

    
<body style="background:#ffffff">
<div class="wrapper">
        
<header>

<div class="header">

        <a href="Startseite.html"><img class ="logo" src="Bilder\logo1.png" alt="Design Profi Logo"/></a>
        <div class= "homebutton">
                <p><a href="#">Zurück zur Startseite</a></p>
        </div>
</div>
</header>

<div class="content">

    <div class= "subcontent">

    
    
    <?php
    include_once ('check.php');
    ?>



    </div>
       
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
