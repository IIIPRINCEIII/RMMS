<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set location</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="header">
    
    <h1>ICT Repair and Maintenance</h1>

</div>

<div class="container">
    
    <h2>Device Location</h2>

    <form id="personalInfoForm" action="includes/location.inc.php" method="post">
        <input type="text" class="input" id="building" name="building" placeholder="Building" autofocus><br><br>

        <input type="text" class="input" id="room" name="room" placeholder="Room/Office"><br><br>

        <input type="submit" class="button" value="Next">
    </form>
</div>
<footer>
    <a href="about.html">About</a>
</footer>
</body>
</html>