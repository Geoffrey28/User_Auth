<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil de <?php echo htmlspecialchars($_SESSION["username"]); ?></title>
</head>
<body>
<?php
    require "header.php"
?>
<section class="profile">
    <div class="user_infos">
        <p>Username: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
        <p>Mail: <?php echo htmlspecialchars($_SESSION["mail"]); ?></p>
        <p><a href="reset-password.php" class="btn btn-warning">Change Your Password</a></p>
    </div>
</section>
</body>
</html>