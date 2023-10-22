<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Repair and Maintenance</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>ICT Repair and Maintenance</h1>
    </div>
    
    <div class="container">
        <h2>Personal Information</h2>

        <form id="personalInfoForm" action="includes/formhandler.inc.php" method="post">
            <input type="text" class="input" id="name" name="client" placeholder="Name" autofocus><br><br>

            <input type"tel" class="input" id="contact_number" name="contact_number" placeholder="Contact number"><br><br>

            <input type="email" class="input" id="email" name="email" placeholder="Email"><br><br>

            <input type="text" class="input" id="department" name="department" placeholder="Department"><br><br>

            <input type="submit" class="button" value="Next">
        </form>
    </div>
    
    <footer>
        <a href="about.html">About</a>
        <?php
        if (isset($_SESSION["username"])) {
            echo $_SESSION["username"];
        } else {
            echo "Guest"; // You can change this to "Guest" or handle it differently.
        }
        ?>
    </footer>
</body>
</html>
