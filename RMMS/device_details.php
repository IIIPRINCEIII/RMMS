<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Details</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="header">

        <h1>ICT Repair and Maintenance Management</h1>

    </div>
    <div class="container">

        <h2>Device Details</h2>

        <form id="deviceDetailsForm" action="includes/ticket.inc.php" method="post">

            <input type="text" id="deviceType" class="input" name="device_type" placeholder="Type of Device"><br><br>

            <input type="text" id="brand" class="input" name="brand" placeholder="Brand/Model" required><br><br>

            <textarea id="description" name="description" placeholder="Describe the problem" rows="5" cols="90" required></textarea><br><br>

            <input class="button" type="submit" value="Submit"><br><br>

        </form>
        
        <!-- Form for file upload -->
        <form id="deviceFileForm" action="ticket.inc.php" method="post" enctype="multipart/form-data">

            <input type="file" class="input-image" name="file">
            <input type="submit" class="create_button" value="Upload"><br><br>

        </form>

    </div>
    <footer>
            <a href="about.html">About</a>
    </footer>
    <script src="script.js"></script>
</body>
</html>
