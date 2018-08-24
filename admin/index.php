<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
</head>
<body>
<?php
    require_once "../header.php"
?>
<h2>Back-office</h2>
<div class="users-list">
    <h3>Users List</h3>
    <a href="/">Add user</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Mail</th>
                <th>Password</th>
                <th>
                    <p>Delete</p>
                    <p>Edit</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?=$row['id'] ?></th>
                <th><?=$row['username'] ?></th>
                <th><?=$row['mail'] ?></th>
                <th><?=$row['password'] ?></th>
                <th>
                    <a href="/">Del</a>
                    <a href="/">Edit</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
    
</body>
</html>