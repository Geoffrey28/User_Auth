<?php
// session_start();
?>

<header style="display: flex; justify-content: space-around">
    <a href="index.php">
        <h1>Title</h1>
    </a>
<?php
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
?>
    <div>
        <a href="register.php" class="btn btn-primary">Register</a><br>
        <a href="login.php" class="btn btn-success">Login</a> 
    </div>
<?php
} elseif (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
?>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
<?php
}
?>
</header>