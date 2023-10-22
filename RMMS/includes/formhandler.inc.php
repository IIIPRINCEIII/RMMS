<?php

require_once "dbh.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["client"];
    $cell_num = $_POST["contact_number"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    try {

        $query = "INSERT INTO clients (full_name, email, cell_num, department) VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$full_name, $email, $cell_num, $department]);
        
        header("Location: ../location.php");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
    
} else {
    header("Location: ../index.php");
}