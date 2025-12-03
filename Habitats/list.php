<?php
header("Content-Type: application/json");
include "../database.php";

$query = "
SELECT *
FROM habitats;
";
$result = mysqli_query($conn, $query);

$animals = [];

while ($row = mysqli_fetch_assoc($result)) {
    $animals[] = $row;
}echo json_encode($animals);