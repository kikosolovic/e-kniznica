<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
  <div class="container-fluid">
    <a class="navbar-brand navlinkfg" href="./../index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
  </div>
</nav><br><br><br><br>

<body>
    <div class="registerdiv">
     <form action="register.php" method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Meno</label>
        <input class="input"type="text" name="fname"><br>
        <label>Priezvisko</label>
        <input class="input"type="text" name="lname"><br>
        <label>Email</label>
        <input class="input"type="text" name="email"><br>
        <label>Heslo</label>
        <input class="input" type="password" name="password"> 
        <label>Heslo znova</label>
        <input class="input" type="password" name="passwordagain"> 
        <p>Máš účet? <a href="./../login/loginform.php">Prihlásiť</a></p>
        <div class="nehehe">
            <input class="registerbtn" type="submit" value="Register">
        </div>
        
     </form>
     </div>
</body>
</html>