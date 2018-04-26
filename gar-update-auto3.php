<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>garage create auto2</title>
</head>
<body>
<h1>garage update auto 3</h1>
<p>
    autogegevens wijzigen in de tabel auto van de datebase garage
</p>
<?php

$automerk  = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand   = $_POST['autokmstandvak'];
$klantid   = $_POST["klantid"];

require_once 'gar-connect.php';

$sql = $conn->prepare("UPDATE auto SET automerk = :automerk, autotype = :autotype,   autokmstand= :autokmstand, klantid =:klantid WHERE autokenteken =:autokenteken");
$sql->execute(
    [
        "automerk"       => $automerk ,
        "autotype"      => $autotype,
        "autokmstand"   => $autokmstand,
        "klantid"     => $klantid
    ]);
echo "de auto is gewijzigd. <br />";
echo "<a href='gar-menu.php'>terug naar het menu</a>";


?>
</body>
</html>