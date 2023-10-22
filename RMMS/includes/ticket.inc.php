<?php
require_once "dbh.inc.php";

if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($POST['submit']))) {
    // Retrieve form data
    $device = $_POST["device_type"];
    $brand = $_POST["brand"];
    $details = $_POST["description"];

    // Handle file upload
    $file = $_FILES["file"];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Define allowed file extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png'];

    // Check if the uploaded file is of an allowed type
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) { // 1 MB limit
                $fileNewName = uniqid('', true) . "." . $fileExt;
                $fileDestination = 'uploads/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                // Database operation
                try {
                    $query = "INSERT INTO tickets (device_type, brand_model, fault, file, image) VALUES (?, ?, ?, ?, ?);";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([$device, $brand, $details, $fileNewName, $fileNewName]);

                    header("Location: ../location.php");
                    exit();
                } catch (PDOException $e) {
                    die("Query failed: " . $e->getMessage());
                }
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
} else {
    header("Location: ../index.php");
    exit();
}
