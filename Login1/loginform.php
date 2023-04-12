<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="logindiv">
     <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input class="input"type="text" name="uname"><br>
        <label>Password</label>
        <input class="input" type="password" name="password"> 
        <p>Nemas ucet? <a href="./../register.php">Registrovat</a></p>
        <div class="nehehe">
            <input class="loginbtn" type="submit" value="Login">
        </div>
        
     </form>
     </div>
</body>
</html>