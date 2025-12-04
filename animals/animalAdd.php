<?php
header("Content-Type: application/json");

include "../database.php";

$Nom = $_POST["Nom"];

$Type = $_POST["Type_alimentaire"];

$Habitat = $_POST["Habitat_ID"];

$Image = $_POST["Image"];

$query = "INSERT INTO animal (Nom, Type_alimentaire, Habitat_ID, Image)
            VALUES ('$Nom', '$Type', '$Habitat', '$Image')";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}
