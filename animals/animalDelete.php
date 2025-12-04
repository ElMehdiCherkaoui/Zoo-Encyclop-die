<?php
header("Content-Type: application/json");
include "../database.php";


$Nom = $_POST["Nom"];
$query = "DELETE FROM animal WHERE Nom = '$Nom'";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}