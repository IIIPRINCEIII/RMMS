<?php

require_once "dbh.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $building = $_POST["building"];
    $room = $_POST["room"];

    try {

        $query = "INSERT INTO location (building, room) VALUES (?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$building, $room]);
    
        header("Location: ../device_details.php");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
    
} else {
    header("Location: ../location.php");
}