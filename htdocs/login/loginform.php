<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>.navlinkfg{
        color: #00695C;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: #B7E0D9;">
  <div class="container-fluid">
    <a class="navbar-brand navlinkfg" href="../index.php">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
  </div>
</nav><br><br><br><br>

<div class="logindiv">
     <form method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input class="input"type="text" name="uname"><br>
        <label>Password</label>
        <input class="input" type="password" name="password"> 
        <p>Nemas ucet? <a href="./../register/registerform.php">Registrovat</a></p>
        <div class="nehehe">
            <input class="loginbtn" type="submit" value="Login">
        </div>
        
     </form>
     </div>
</body>
</html>

<?php
include 'loginscript.php';
   login()
?>

<br><br><br><br><br><br>

<footer class="text-center text-lg-start fixed-bottom" style="background-color: #B7E0D9;">
  <div class="text-center p-3" style="background-color: #B7E0D9;">
  <p class="navlinkfg">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="navlinkfg" href="#">Login</a>
  </div>
</footer>

</body>
</html>