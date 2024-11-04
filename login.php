<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gouner Games</title>
    <link rel="stylesheet" href="css/desktop.css">

</head>

<body>
    <header>
        
    </header>  

    <div class="login-section">
        <h2>Login</h2>
        <form action="login-inc.php" id="loginForm" method="post">
            <label for="Staff ID">Staff ID:</label><br>
            <input type="text" id="email" name="email" placeholder="Enter your staff ID" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>


</body>
</html>