<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-auto3</title>
</head>
<body>
<h1>
    garage delete auto 3
</h1>
<P>
    op autokenteken gegevens zoeken uit de tabel autos van de database garage zodat ze verwijderd kunnen worden.
</P>
<?php
$autokenteken   =$_POST["autokentekenvak"];
$verwijderen =$_POST["verwijdervak"];


if($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare('delete from auto WHERE autokenteken = :autokenteken');

    echo "de gegevens zijn verwijderd. <br />";
}
else{
    echo "gegevens zijn niet verwijderd. <br />";

}

echo "<a href='gar-menu.php'>terug naar het menu. </a>"


?>


</body>
</html>