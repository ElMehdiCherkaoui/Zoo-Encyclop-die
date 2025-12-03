<?php
header("Content-Type: application/json");
include "../database.php";

$query = "
SELECT Nom, Image, NomHab,Type_alimentaire
FROM habitats
    LEFT JOIN animal ON animal.Habitat_ID = habitats.IdHab


";
$result = mysqli_query($conn, $query);

$animals = [];

while ($row = mysqli_fetch_assoc($result)) {
    $animals[] = $row;
}echo json_encode($animals);