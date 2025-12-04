<?php
header("Content-Type: application/json");

include "../database.php";

$Id = $_POST["Id"];

$Nom = $_POST["Nom"];

$Type = $_POST["Type_alimentaire"];

$Habitat = $_POST["Habitat_ID"];

$Image = $_POST["Image"];

$query = "UPDATE animal 
          SET Nom = '$Nom', 
                Type_alimentaire = '$Type', 
                Habitat_ID = '$Habitat', 
                Image = '$Image'
          WHERE IDAnim = '$Id';";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}