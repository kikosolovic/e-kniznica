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
    <a class="navbar-brand navlinkfg" href="javascript:history.back()">Knižnica</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
  </div>
</nav><br><br><br><br>

<body>
    <div class="registerdiv">
     <form method="post">
        <h2>Register</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>First Name</label>
        <input class="input"type="text" name="fname"><br>
        <label>Last Name</label>
        <input class="input"type="text" name="lname"><br>
        <label>Email</label>
        <input class="input"type="text" name="email"><br>
        <label>Password</label>
        <input class="input" type="password" name="password"> 
        <label>Password Again</label>
        <input class="input" type="password" name="passwordagain"> 
        <p>Mas ucet? <a href="./../login/loginform.php">Prihlasit</a></p>
        <div class="nehehe">
            <input class="registerbtn" type="submit" value="Register">
        </div>
        
     </form>
     </div>
</body>
</html>

<?php
include 'registerscript.php';
   register()
?>
<br><br><br><br><br><br>


<footer class="text-center text-lg-start fixed-bottom" style="background-color: #B7E0D9;">
  <div class="text-center p-3" style="background-color: #B7E0D9;">
  <p class="navlinkfg">Year: <span id="datetime"></span></p><script>var dt = new Date(); var y = dt.getFullYear();
document.getElementById("datetime").innerHTML=y;</script>
    <a class="navlinkfg" href="#">Register</a>
  </div>
</footer>

</body>
</html>