<?php
include "includes/dbHandler.php";
$db = new DbHandler();

if (isset($_POST["create"])) {
    $db->MaakGebruiker($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"]);
}

$gebruikerData = $db->SelecteerGebruikers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Index.css">
    <script src="Snake.js"></script> 
</head>
<body>
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach($gebruikerData as $gebruiker): ?>
                <tr>
                    <?php foreach($gebruiker as $kolom): ?>
                        <td><?= $kolom ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="button-container">
            <form method="POST" action="Snake.php">
                <button type="submit">Play</button>
            </form>
        </div>
    </div>
</body>
</html>
