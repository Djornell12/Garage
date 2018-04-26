<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>garage-zoek-klant2.php</title>
</head>
<body>
<h1>garage update auto 2</h1>
<p>
    op autokenteken gegevens zoeken uit de tabel auto van de database garage.
</p>
<?php
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto WHERE autokenteken = :autokeneteken");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<form action='gar-update-auto3php' method='post'";
foreach ($autos as $auto) {

    echo "autokenteken:" . $auto["autokenteken"];
    echo "<input type='hidden' name='autokentekenvak' ";
    echo "value='" . $auto["autokentekenid"] . "'> <br />";


    echo "automerk: <input type='text' ";
    echo "name ='automerkvak' ";
    echo "value='" . $auto["automerk"] . "' ";
    echo "> <br />";

    echo "autotype: <input type='text' ";
    echo "name ='autotypevak' ";
    echo "value='" . $auto["autotype"] . "' ";
    echo "> <br />";


    echo "autokmstand: <input type='text' ";
    echo "name ='autokmstandvak' ";
    echo "value='" . $auto["autokmstand"] . "' ";
    echo "> <br />";

    echo "klantid: <input type='text' ";
    echo "name ='klantidvak' ";
    echo "value='" . $auto["klantid"] . "' ";
    echo "> <br />";

}
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>

