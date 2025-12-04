<?php
header("Content-Type: application/json");

include "../database.php";

$query = "
SELECT IDAnim,Nom, Image, NomHab,Type_alimentaire
FROM habitats,animal
WHERE
    habitats.IdHab = animal.Habitat_ID;
";

$result = mysqli_query($conn, $query);

$animals = [];

while ($row = mysqli_fetch_assoc($result)) {
    $animals[] = $row;
}

echo json_encode($animals);
