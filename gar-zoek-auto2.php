<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>garage-zoek-auto2.php</title>
</head>
<body>
<h1>garage zoek op autokenteken 2</h1>
<p>
    op kenteken gegevens zoeken uit de tabel autos van de database garage.
</p>
<?php
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" =>$autokenteken]);

echo "<table>";
foreach ($sql as $rij) {
    echo "<tr>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'> terug naar het menu</a>";
?>
</body>
</html>

