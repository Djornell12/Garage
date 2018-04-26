<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>garage-zoek-klant2.php</title>
</head>
<body>
<h1>garage update klant 2</h1>
<p>
    op klantid gegevens zoeken uit de tabel klanten van de database garage.
</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'";
foreach ($klanten as $klant) {

    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak' ";
    echo "value='" . $klant["klantid"] . "'> <br />";


    echo "klantnaam: <input type='text' ";
    echo "name ='klantnaamvak' ";
    echo "value='" . $klant["klantnaam"] . "' ";
    echo "> <br />";

    echo "klantadres: <input type='text' ";
    echo "name ='klantadresvak' ";
    echo "value='" . $klant["klantadres"] . "' ";
    echo "> <br />";


    echo "klantpostcode: <input type='text' ";
    echo "name ='klantnaampostcode' ";
    echo "value='" . $klant["klantpostcode"] . "' ";
    echo "> <br />";

    echo "klantplaats: <input type='text' ";
    echo "name ='klantplaatsvak' ";
    echo "value='" . $klant["klantplaats"] . "' ";
    echo "> <br />";

}
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>

