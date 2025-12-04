<?php
header("Content-Type: application/json");

include "../database.php";

$IdHab = $_POST["IdHab"];

$NomHab = $_POST["NomHab"];

$Description_Hab = $_POST["Description_Hab"];

$ImageHab = $_POST["Image"];

$query = "UPDATE habitats 
          SET NomHab = '$NomHab', 
                Description_Hab = '$Description_Hab', 
                ImageHab = '$ImageHab'
          WHERE IDHab = '$IdHab';";

if (mysqli_query($conn, $query)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
}