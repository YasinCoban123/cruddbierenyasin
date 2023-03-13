<?php
require_once('functions.php');
echo "<h1>Update Bier</h1>";

echo "Data uit het vorige formulier:<br>";
$row = GetBier($_GET['biercode']);
echo "<br>";
?>

<html>
    <body>
        Biercode:<input type="" name="biercode" value="<?php echo "Biercode:" . $_GET['biercode']; ?>"><br>
        Naam: <input type="" name="naam" value="moet ik uit de databse halen"><br>
        Soort: <input type="" name="soort" value=""><br>
        Stijl: <input type="" name="stijl" value=""><br>
        Alcohol: <input type="" name="alcohol" value=""><br>
        Brouwcode: <input type="" name="brouwcode " value=""><br>
        <input type="submit" name="btn_wzg" value="Wijzigen"><br> 
    </body>
</html> 