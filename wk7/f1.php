<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname">
        <label for="passwod">Password</label>
        <input type="password" name="pass" id="password">
        <!-- check the remember checkbox if cookie is set -->
        <Label>Remember Me:</Label><input type="checkbox" name="remember_me" 
         <?php echo isset($_COOKIE['remember_me']) ? 'checked' : '';?>
        >
        <button type="submit">Login</button>
    </form>
</body>
</html>
