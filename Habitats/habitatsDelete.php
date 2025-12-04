<?php
header("Content-Type: application/json");

include "../database.php";


$NomHab = $_POST["NomHab"];

$query = "DELETE FROM habitats WHERE NomHab = '$NomHab'";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}
