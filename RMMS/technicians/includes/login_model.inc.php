<?php

declare(strict_types=1);

function get_user(object $pdo, string $username) {
    $query = "SELECT * FROM `technicians` WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username); // Use bindParam to bind the parameter
    $stmt->execute();
 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}