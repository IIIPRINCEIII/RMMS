<?php
require_once 'includes/config_session.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Login</title>
</head>
<body>

    <?php
    check_login_errors();
    ?>

    <h3>Log in</h3>
    
     <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
     </form>
</body>
</html>