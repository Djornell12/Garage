<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant3</title>
</head>
<body>
<h1>
    garage delete klant 3
</h1>
<P>
    op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.
</P>
<?php
$klantid    =$_POST["klantidvak"];
$verwijderen =$_POST["verwijdervak"];


if($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare('delete from klant WHERE klantid = :klantid');

    echo "de gegevens zijn verwijderd. <br />";
}
else{
    echo "gegevens zijn niet verwijderd. <br />";

}

echo "<a href='gar-menu.php'>terug naar het menu. </a>"


?>


</body>
</html>