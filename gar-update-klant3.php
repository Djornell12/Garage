<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>garage create klant2</title>
</head>
<body>
<h1>garage update klant 3</h1>
<p>
    klantgegevens wijzigen in de tabel klant van de datebase garage
</p>
<?php

$klantnaam     = $_POST["klantnaamvak"];
$klantadres    = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats   = $_POST['klantplaatsvak'];

require_once 'gar-connect.php';

$sql = $conn->prepare("UPDATE klant SET klantnaam = :klantnaam, klantadres = :klantadres,   klantpostcode= :klantpostcode, klantplaats= :klantplaats WHERE klantid =:klantid");
$sql->execute(
    [
        "klantnaam"       => $klantnaam,
        "klantadres"      => $klantadres,
        "klantpostcode"   => $klantpostcode,
        "klantplaats"     => $klantplaats
    ]);
echo "de klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'>terug naar het menu</a>";


?>
</body>
</html>