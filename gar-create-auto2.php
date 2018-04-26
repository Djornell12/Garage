<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>garage create auto2</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    een auto toevoegen aan de tabel
    auto in de database garage.
</p>
<?php


$autokenteken     = $_POST["autokentekenvak"];
$automerk    = $_POST["automerkvak"];
$autotype   = $_POST['autotypevak'];
$autokmstand = $_POST["autokmstandvak"];
$klantid = $_POST["klantid"];


require_once 'gar-connect.php';

$sql = $conn->prepare("INSERT INTO auto VALUES ( :autokenteken, :automerk, :autotype, :autokmstand, :klantid)");

$sql->execute([ "autokenteken"  => $autokenteken, "automerk"   => $automerk, "autotype"  => $autotype, "autokmstand"  => $autokmstand, "klantid"  => $klantid]);
echo "de auto is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug neer het menu</a>";



?>
</body>
</html>