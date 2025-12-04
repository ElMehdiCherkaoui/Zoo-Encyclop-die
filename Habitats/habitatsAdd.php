<?php
header("Content-Type: application/json");

include "../database.php";

$NomHab = $_POST["NomHab"];

$Description_Hab = $_POST["Description_Hab"];

$Image = $_POST["Image"];

$query = "INSERT INTO habitats (NomHab, Description_Hab, ImageHab)
            VALUES ('$NomHab', '$Description_Hab', '$Image')";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}