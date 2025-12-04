<?php 
header("Content-Type: application/json");

include "../database.php";

$sql = "
    SELECT h.NomHab, COUNT(a.IDAnim) AS animal_count
    FROM habitats h
    LEFT JOIN animal a ON h.IdHab = a.Habitat_ID
    GROUP BY h.NomHab
";

$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);