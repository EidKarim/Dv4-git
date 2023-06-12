<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stijl.css">
    <script src="Snake.js"></script> 
</head>
<body>
<form method="POST" action="index.php">
    <h2>Login</h2>
    <input type="hidden" name="redirect" value="Login.php">
    <label>Naam</label>
    <input type="text" name="name" placeholder="name" required>

    
    <label>Gebruiksnaam</label>
    <input type="text" name="username" placeholder="Username" required>

     
    <label>email</label>
    <input name="email" placeholder="email@gmail.com" type="email"/>

    <label>Wachtwoord</label>
    <input type="password" name="password" placeholder="Password" required>

   
    <button type="submit" name="create" value="create">Create</button>
    
</form>

</body>
</html>






